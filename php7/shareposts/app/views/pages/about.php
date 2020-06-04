<?php require APPROOT . '/views/inc/header.php';?>
<div class="jumbotron jumbotron-flud text-center mt-4">

  <h1 class="display-8"><?php echo $data['title']; ?></h1>
  <p class="lead"><?php echo $data['description']; ?></p>
  <p>Version <strong><?php echo APPVERSION; ?></strong></p>
</div>

<?php require APPROOT . '/views/inc/footer.php';?>