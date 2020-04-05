<?php 
    # CONDITIONALS

    /* 
        ==
        === : IDENTICAL, MATCHES THE VALUES AND DATYPE.
        <
        >
        <=
        >=
        !=
        !==
    */

    $num= 6;

    if($num == 5){
        echo '5 passed';
    } else if($num == 6){
        echo '6 passed<br>';
    } 
    else {
        echo 'did not pass';
    }
    

    # NESTING IF

    $num1 = 5;

    if($num1 > 4){
        if($num1 < 10){
            echo "$num passed<br>";
        }
        else {
            echo "whatever";
        }
    }

    /*
        LOGICAL OPERATORS

        and &&
        or  ||
        xor : one of them has to be true but not both
    */

    if($num1 > 4 XOR $num1 < 10){
        echo "$num passed<br>";
    }
    
    # SWITCHE: test for value with differents case, and depending on when catch matches it will do something, whatever you want it to do

    $favColor = 'red';

    switch($favColor){
        case 'red':
            echo 'Your favorite color is red';
            break;
        case 'blue':
            echo 'Your favorite color is blue';
            break;
        case 'green':
            echo 'Your favorite color is green';
            break;
        default:
            echo 'Your favorite color is something else';        
    }

        
?>