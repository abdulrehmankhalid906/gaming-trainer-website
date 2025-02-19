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
  <link href="css/bootstrap.min.css" rel="stylesheet">
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
            <label class="form-label" for="form1Example13">Game Name</label>
            <select class="form-control" name="fk_game_id" required>
              <?php
                $query = "SELECT * FROM games";
                $query_run = mysqli_query($con, $query);
                while($res = mysqli_fetch_assoc($query_run))
                {
                  ?>
                    <option value="<?php echo $res['id']; ?>"><?php echo $res['name']; ?></option>
                  <?php
                }
              ?>
            </select>
          </div>

          <div class="mb-1">
            <label class="form-label">Game Version</label>
            <input type="text" class="form-control" name="version" required>
          </div>

          <div class="mb-1">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="3" name="description" required></textarea>
          </div>
          
          <div class="mb-1">
            <label class="form-label">Upload File</label>
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
</body>
</html>