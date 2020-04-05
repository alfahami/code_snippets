<?php 
    # VARIABLES
    /*
        - Prefix $
        - Start with a letter or an underscore
        - Only letters, numbers, underscores
        - Case sensitive

    */

    # DATA TYPES
    /* 
        Strings
        Integers
        floats
        Booleans
        Arrays
        Objects
        NULL
        Resource : return or reference to a function

    */

    $output = "Hello World!";

    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;

    $float1 = 4.4;
    $bool1 = true;

    $string1 = "Hello";
    $string2 = "World";
    $greeting = $string1 .' '. $string2;
    echo $greeting . "<br><br>";

    $string3 = "Babe";
    $string4 = "Come on!";
    // Single quote doesn't parse the variable, it will give exactly what we 've put in
    $greeting2 = '$string1 $string2';
    echo $greeting2 . "<br><br>";

    // Double quote will parse the variables
    $greeting3 = "$string3 $string4";
    echo $greeting3 . "<br><br>";

    // Escaping special characters with back-slash
    $string5 = 'They\'re Here';
    echo $string5 . "<br><br>";

    # CONSTANT
    /* 
        - For values that are not going to change
        - Server name
        - Database Hostname
        - Root Path
        ...etc
    */

    // The 3rd boolean parameter make the greeting constance not case sensitive
    define('GREETING', 'Hello Everyone!', true);
    echo greeting;

    ?>


    <br/>

    <?php

    // echo doesn't return a value, it just displays text in the browser and is faster than print

        // echo "Hello World";


    // print return a value so it can be used as an expression

        // print "Get the fuck out"
// We can live the ending tag if there is no html in our scipt

// Single line comment
# single line comment
/*
Multiple comment
*/
?>