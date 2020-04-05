<?php 
    # FUNCTION - Block of code that can be repeatedly called

    /*
        Camel Case - myFunction()
        Lower Case - my_function()
        Pascal Case - MyFunction()
    */


    // Create Simple Function
    function simpleFunction(){
        echo 'Hello World <br><brs>';
    }

    // Run simple Function
    simpleFunction();

    // Function With Param
    function sayHello($name = 'sayHello with no param'){
        echo "Hello $name <br>";
    }

    sayHello('Joe');
    sayHello('Bob');
    sayHello();

    // Return Value
    function addNumbers($num1, $num2){
        echo $num1 + $num2;
    }

    echo addNumbers(2, 3);
    echo "<br><br>";

    // By Reference
    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }

    addFive($myNum);
    
    echo "Value: $myNum<br>";

    addTen($myNum);
    echo "Value: $myNum<br>";
?>