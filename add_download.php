<?php
session_start();
include ('dbconfig.php');
if(!isset($_SESSION['name'])){
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Upload Download Link</title>
  <link rel="icon" type="image/s-icon" href="favicon/expert.png">
  </head>
<body>
<!--Header-->
<?php
include 'header.php';
include 'header_top.php';
?>

<!--Main Area-->
<section class="vh-70">
  <div class="container py-2 h-100">
    <div class="row flex align-items-center justify-content-center h-100">
      <div class="col-md-6 col-lg-6 col-xl-5 offset-xl-1">
      <div class="mb-2">
            <?php
            include ('error.php');
            ?>
          </div>
        <form action="downloadinfo.php" method="post">
          <div class="mb-1">
            <h2>Upload Game Link</h2>
          </div>

          <div class="mb-1">
            <label class="form-label">Game Name:</label>
            <input type="text" class="form-control" name="game_name" required>
          </div>

          <div class="mb-1">
            <label class="form-label">Add Description:</label>
            <textarea class="form-control" rows="3" name="description" required></textarea>
          </div>

          <div class="mb-1">
            <label class="form-label">Game Link:</label>
            <textarea class="form-control" rows="3" name="link" required></textarea>
          </div>

          <div class="mb-1">
            <button type="submit" class="btn btn-success my-3" name="upload" value="submit">Upload</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!--Footer-->
  <?php
    include ('footer.php');
  ?>
</body>
</html>