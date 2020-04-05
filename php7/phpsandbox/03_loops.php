<?php 
    # LOOPS - Execute code set number of times

    /* 
        For
        While
        Do..While
        Foreach
    */

    # For Loop
    # @params - init, condition, inc

    for($i = 0; $i <= 10; $i++) {
        echo 'Number ' . $i;
        echo '<br>';
    }

    echo "<br><br>";

    #While Loop
    # @params - condition

    $i = 10;

    while($i <= 20){
        echo  'Using While to increment ' . $i;
        echo '<br>';
        $i++;
    }

    echo '<br><br>';
    # Do .. While
    # @params - condition

    $i = 20;

    do{
        echo 'Using Do..While to increment ' . $i;
        echo'<br>';
        $i++;
    }
    while($i <= 30);
    
    echo '<br><br>';

    $people = array('Brad', 'Jose', 'Willian');

    foreach($people as $person) {
        echo 'Using foreach in a indexed array ' . ' \'' .$person .'\' ';
        echo '<br>';
    }

    echo '<br><br>';

    $people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'Willian' => 'willian@gmail.com');

    foreach($people as $person => $email) {
        echo $person.': '.$email;
        echo '<br>';
    }


?>