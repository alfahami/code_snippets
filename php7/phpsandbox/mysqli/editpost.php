<?php 
    require('config/config.php');
    require('config/db.php');

    // Check for submit
    if(isset($_POST['submit'])){
        // Get from Data
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);

        $query = "UPDATE posts SET
                    title = '$title',
                    author = '$author',
                    body = '$body' 
                    WHERE id = {$update_id}";

        if(mysqli_query($conn, $query)){
            header('Location:' .ROOT_URL.'');
        } else {
            echo 'ERRO: '. mysqli_error($conn);
        }
    }


     // get ID and escape any dangerous, harmful input character
     $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Create Query
    $query = 'SELECT * FROM posts WHERE id = '.$id;

    // Get the Results
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $post = mysqli_fetch_assoc($result);

    // Free Result
    mysqli_free_result($result);

    //var_dump($posts);
    // Close Connection
    mysqli_close($conn);

    
    ?>

    <?php include('inc/header.php'); ?>
    <div class="container">
    
        <h1>Add Post</h1>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
            </div>
            <div class="form-group">
                <label for="">Author</label>
                <input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
            </div>
            <div class="form-group">
                <label for="">Body</label>
                <textarea name="body" class="form-control"><?php echo $post['body']; ?></textarea>
            </div>
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
        </form>
    </div>
    <?php include('inc/footer.php'); ?>