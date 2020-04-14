<?php 
    if(isset($_POST['submit'])){
    //    Every page you want to use that data, you have to use session start
        
        session_start();
        $_SESSION['name'] = htmlspecialchars($_POST['name']);
        $_SESSION['email'] = htmlspecialchars($_POST['email']);

        header('Location: page2.php');

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name" placeholder="Enter Name"><br><br>
        <input type="email" name="email" placeholder="Enter Email"><br>
        <br>
        <input type="submit" name="submit" value="Submit">
    
    </form>
</body>
</html>