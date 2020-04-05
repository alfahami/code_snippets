<?php
    # Array: Variable that holds multiple values
    /* 
        - Indexed
        - Associative
        - Multi-dimensional
    */

    // Indexed
    $people = array('John', 'Kevin', 'Jeremy', 'Sara');
    echo $people[3] . "<br><br>";
    
    # Array of numbers
    $ids = array(23, 55, 19);
    echo $ids[2] . "<br><br>";

    # Other way of creating an array
    $cars = ['Honda', 'Toyota', 'Ford'];
    echo $cars[2] . "<br><br>";

    # Adding a value to an array
    $cars[3] = 'Chevy';
    echo $cars[3] . '<br><br>';

    # When we don't know the index we're at and still want to add a value

    $cars[] = 'BMW';
    echo $cars[4] . "<br><br>";
    
    # Counting the items in the array! How many items in the array
    echo count($cars) . "<br><br>";

    # show the whole array, very handy when debugging
    print_r($cars);

    # Debuging function to see the datatypes of the array
    var_dump($cars);

    # var_dump is not only for arrays, we can dump any variable and look at it datatype and the number of characters.

    // Associated arrays
    /*
      - Define a key and value
      - With index array, the key is a number
      - with this new array, we can assign the key to any value we want  
    */
    $persons= array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    echo '<br><br>' . $persons['Brad'] . "<br><br>";

    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

    echo $ids[63] . '<br><br>' ;

    # Adding an element to the array
    $persons['Jill'] = 43;
    echo $persons['Jill'] . "<br><br>";

    # var_dump, print_r
    print_r($persons);
    var_dump($persons);

    // Multi-Dimensional: Array within an array
    $big_cars = array(
        array('Honda', 20, 10),
        array('Toyotoa', 30, 20),
        array('Honda', 23, 12)
    );

    echo '<br><br>' . $big_cars[1][0];


?>
