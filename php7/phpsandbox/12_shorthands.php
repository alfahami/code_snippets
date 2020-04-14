<?php
    $loggedIn = true;

    if($loggedIn){
        echo 'You are logged in<br><br>';
    } else{
        echo 'You are NOT logged in<br><br>';
    }

    # Ternary

    // condition ? (display when condition is true) : (display when condition is false);
    
    echo ($loggedIn) ? 'You are logged in<br><br>' : 'You are NOT logged in<br><br>';

    $isRegistred = ($loggedIn == true) ? true : false;
    echo $isRegistred . '<br></br>';

    $age = 20;
    $score = 5;

    echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));
    ?>


    <div>
        <?php if($loggedIn) { ?>
            <h1>Weclome User</h1>
       <?php } else { ?>
        <h2>Welcome Guest</h2>
       <?php } ?>
    </div>

    <div>
        <?php if($loggedIn): ?>
            <h1>Welcome There</h1>
        <?php endif; ?>
    </div>