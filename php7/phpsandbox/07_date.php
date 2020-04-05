<?php 
    echo date('l '); // Day of the week
    echo date('d/'); // Day
    echo date('m/'); // Month
    echo date('Y'); // Year

    echo '<br><br>';
    
    echo date('Y/m/d');

    echo '<br><br>';

    echo date('m-d-Y');

    echo '<br><br>';

    echo date('d-m-Y');

    echo "<br>Working with time<br><br>";

    echo date('h:'); // Hour
    echo date('i:'); // Min
    echo date('s '); // Seconds
    echo date('A'); // AM or PM
    echo '<br><br>';

    // Set Time Zone
    echo '<br>New York USA Timezone<br>';
    date_default_timezone_set('America/New_York');

    echo date('h:i:s A');


    /* 
        Unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified 
    */

    $timestamp = mktime(20, 00, 00, 5, 21, 1992);

    echo '<br><br>Seconds passed since 21/05/1992<br>';
    echo $timestamp;
    echo '<br><br>Conversion to readable time<br>';

    echo date('m/d/Y h:i:s A', $timestamp);
    echo '<br><br>';

    $timestamp2 = strtotime('7:00pm March 22 2016');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Days');
    

    // echo $timestamp2;
    echo date('m/d/Y h:i:s A', $timestamp5);
    ?>