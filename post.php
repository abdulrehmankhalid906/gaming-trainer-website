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
  <title>Upload Trainer</title>
  <link rel="icon" type="image/s-icon" href="logo/stronghold_hd.png">
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
        <form action="postinfo.php" method="post" enctype="multipart/form-data">
          <div class="mb-1">
            <h2>Upload Trainer</h2>
            <a href="add_download.php" class="btn btn-primary">Upload Link</a>
          </div>

          <div class="mb-1">
            <label class="form-label">Game Picture:</label>
            <input type="file" class="form-control" name="game_pic" required>
          </div>
          
          <div class="mb-1">
            <label class="form-label" for="form1Example13">Game Name:</label>
            <select class="form-control" name="game_name" required>
              <option value="Stronghold HD">Stronghold HD</option>
              <option value="Stronghold Crusader HD">Stronghold Crusader HD</option>
              <option value="Call Of Duty">Call Of Duty</option>
              <option value="Smoke Attack">Smoke Attack</option>
            </select>
          </div>

          <div class="mb-1">
            <label class="form-label">Description:</label>
            <textarea class="form-control" rows="3" name="description" required></textarea>
          </div>

          <div class="mb-1">
            <label class="form-label">Game Version:</label>
            <input type="text" class="form-control" name="version" required>
            <input type="hidden" class="form-control" name="trainer_id" value="<?php $a= rand(0,9999); echo $a;?>">
          </div>
          
          <div class="mb-1">
            <label class="form-label">Upload File:</label>
            <input type="file" class="form-control" name="upload_file" required>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>