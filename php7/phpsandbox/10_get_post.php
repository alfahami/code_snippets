<?php
    if(isset($_GET['name'])){
        // print_r($_GET);
        $name= htmlentities($_GET['name']);
        // echo $name;
        
    }

    // // Data will be sent through the header not in the url
    // if(isset($POST['name'])){
    //     print_r($_POST);
    //     $name= htmlentities($_POST['name']);
    //     // echo $name;
        
    // }

    // // REQUEST
    // if(isset($_REQUEST['name'])){
    //     // print_r($_REQUEST);
    //     $name= htmlentities($_REQUEST['name']);
    //     echo $name;
        
    // }

    echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <form method="POST" action="10_get_post.php">
        <div>
            <label for="">Name</label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" id="">
        </div>
        <input type="submit" value="Submit">
    </form>

    <ul>
        <li>
            <a href="10_get_post.php?name=Brad">Brad</a>
            <a href="10_get_post.php?name=Steve">Steve</a>
        </li>
    </ul>
    <h1><?php echo "{$name}' Profile"?></h1>
</body>
</html>