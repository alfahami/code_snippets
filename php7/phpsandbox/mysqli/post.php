<?php 
    require('config/config.php');
    require('config/db.php');

    // Check for submit
    if(isset($_POST['delete'])){
      // Get from Data
      $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
      $query = "DELETE FROM posts WHERE id = {$delete_id}";

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

  <?php include('inc/header.php');?>
    <div class="container">
    
        <h1><?php echo $post['title']; ?></h1>
        <div>
        
                <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Back</a>
        </div>
                <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
                <p><?php echo $post['body']; ?></p>
                <hr>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="pull-right">
                  <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
                  <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                </form>


                <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-default">Edit</a>
                
            
    </div>
<?php include('inc/footer.php'); ?>