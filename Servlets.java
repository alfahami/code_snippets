package com.airline.controllers;

import java.io.IOException;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.Date;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletContext;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import com.airline.models.Gender;
import com.airline.models.Passenger;

// path to our servlet
@WebServlet("/AddPassenger")
public class AddPassenger extends HttpServlet {
	private static final long serialVersionUID = 1L;

	public AddPassenger() {
		super();
	}

//	Method invoked when the browser goes to the path mapped in the annotation which is localhost:8080/web3/AddPassenger
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		
//		response is the http response we're sending back to the browser
//		getWriter gives a printwriter object to be able to write html to the http response
		PrintWriter out = response.getWriter();
		
		response.setContentType("text/html"); // content type of the response
		out.println("<html><body>");
		
		out.println("<h2>Welcome to World Adventure Airlines</h2>");
		
		out.println("</body></html>");
		
/**
 * A SEPARATOR FROM THE VERY VERY BASICS TO THE BASICS
 */
		
		request.setAttribute("first_name", "");
		request.setAttribute("last_name", "");
		/*
		 * The RequestDispatcher interface provides the facility of dispatching the
		 * request to another resource it may be html, servlet or jsp. This interface
		 * can also be used to include the content of another resource also. It is one
		 * of the way of servlet collaboration.
		 */
		RequestDispatcher view = request.getRequestDispatcher("WEB-INF/views/add_passenger.jsp");

//		request from a servlet to another resource (servlet, JSP file, or HTML file) on the server.
		view.forward(request, response);
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		request.setAttribute("errors", false);
		
		Passenger p = new Passenger();
		
		String firstName = request.getParameter("fname");
		System.out.println("First name: " + firstName);

		if (firstName.length() == 0) {
			System.out.println("Empty first name error");
			request.setAttribute("errors", true);
			request.setAttribute("firstname_error", true);
			request.setAttribute("first_name", "");
		}
		else {
			p.setFirstName(firstName);
			request.setAttribute("first_name", firstName);
		}

		String lastName = request.getParameter("lname");
		System.out.println("Last name: " + lastName);
		if (lastName.length() == 0) {
			System.out.println("Empty last name error");
			request.setAttribute("errors", true);
			request.setAttribute("lastname_error", true);
			request.setAttribute("last_name", "");
		}
		else {
			p.setLastName(lastName);
			request.setAttribute("last_name", lastName);
		}

		String dob_raw = request.getParameter("dob");
		System.out.println("Date from the browser: " + dob_raw);
//		the \\ are escape characters for the forward slash(it has a special value) that makes java ignore the / special value 
		String[] dobArray = (String[]) dob_raw.split("\\-");

		String pattern = "^\\d{4}\\-\\d{1,2}\\-\\d{1,2}$";
		Pattern r = Pattern.compile(pattern);

		Matcher m = r.matcher(dob_raw);

		if (m.find()) {
			String year = dobArray[0];
			String month = dobArray[1];
			String day = dobArray[2];

			Calendar cal = Calendar.getInstance();
			cal.set(Calendar.DAY_OF_MONTH, Integer.parseInt(day));
			cal.set(Calendar.MONTH, Integer.parseInt(month) - 1);
			cal.set(Calendar.YEAR, Integer.parseInt(year));

			Date dob = cal.getTime();
			p.setDob(dob);
			System.out.println("Date of birth: " + dob);
			request.setAttribute("dob", dob_raw);
		}
		

		else {
			System.out.println("Invalid date of birth");
			request.setAttribute("errors", true);
			request.setAttribute("date_format_error", true);
			request.setAttribute("dob", dob_raw);

		}

		String gender = request.getParameter("gender");
		p.setGender(Gender.valueOf(gender));
		System.out.println("Gender = " + gender);

		if ((Boolean) request.getAttribute("errors")) {
			RequestDispatcher view = request.getRequestDispatcher("/WEB-INF/views/add_passenger.jsp");

			view.forward(request, response);
		}
		else {
			
/*
 * 		ServletContext object gives us access to our application context, this context lives as long as our app is deployed
		We can save attributes that will live as long as our app is deployed as opposed to request attributes that are only 
		available until the page has been rendered
*/
			ServletContext sc = this.getServletContext();
			/*
			 * Thread: This forces java to execute the code sequentially if there is two users updating the list at the same time
			 * This means this piece of code will never runs sumultanely i.e never un to doPost method in the same time
			 * The first thread asked for the lock to open this code and the second thread is waiting till the T1 finishes and release
			 * the key lock so T2 can borrow it and get access to this code.
			 * ONE THREAD CAN HAVE ACCESS TO THE LOCK IN ONE TIME
			 */
			synchronized (this) {
				
				/*
				 * The problem here is each time we add a new user, we override the existing list
				 * Solution: let's get the new existing list from the servlet context
				 */
				@SuppressWarnings("unchecked")
				ArrayList<Passenger> passengersList = (ArrayList<Passenger>) sc.getAttribute("passengers");
				
				/*
				 * The problem here is when the attribute passenger is not yet set on the
				 * servlet context This first time the form was submitted and the passenger
				 * attributes was not set yet on the sc We would get null, how do we ensure
				 * Solution: This is where Listeners come in to play We want to listen to when
				 * our application start so a lifecycle listener to our servlet context
				 */
				passengersList.add(p);
				sc.setAttribute("passengers", passengersList);
			}
			
			response.sendRedirect("");
		}
		
	}

}
