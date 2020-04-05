package com.airline.controllers;

import java.util.ArrayList;

import javax.servlet.ServletContext;
import javax.servlet.ServletContextEvent;
import javax.servlet.ServletContextListener;
import javax.servlet.annotation.WebListener;

import com.airline.models.Passenger;


@WebListener
public class AirlineListener implements ServletContextListener {

    public AirlineListener() {
        
    }
	
    @SuppressWarnings("unchecked")
	public void contextInitialized(ServletContextEvent event)  { 
     
    	/*
         * This when our servlet context is first being created
         * i.e when our application is being created
         * Let's initialize our passenger list in here
         */
    	ServletContext sc = event.getServletContext();
    	
    	ArrayList<Passenger> passengersList = (ArrayList<Passenger>) sc.getAttribute("passengers");
    			
    	/*
    	 * This check is redundent because this method will run when our application is being deployed adn our
    	 * servlet being started, there is no way this list exist
    	 */
    	if(passengersList == null ) {
    		System.out.println("No passenger list created yet. Let's create the list here... ");
    		passengersList = new ArrayList<Passenger>();
    		sc.setAttribute("passengers", passengersList);
    	}
    	
    }
    

    public void contextDestroyed(ServletContextEvent sce)  { 
         
    }
	
}
