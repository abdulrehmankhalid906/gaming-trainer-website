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
  <link rel="icon" type="image/s-icon" href="logo/stronghold_hd.png">
  </head>
<body>
<!--Header-->
<?php
include ('header.php');
?>
<!--navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="logo/stronghold_hd.png" alt="Responsive Image" height="60"><span style="font-family:calibery;  font-weight:52px;"> Expert Here<span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="font-size: larger;">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="font-size: larger;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>