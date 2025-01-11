<?php
session_start();
include ('dbconfig.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
    <link rel="icon" type="image/s-icon" href="favicon/expert.png">

<style>
.btn-success, .btn-danger{
  width: 100%;
}
</style>
</head>
<body>
<!--Header-->
<?php
include ('header.php');
include 'header_top.php';
?>
<!--Middel area-->
<section class="vh-70">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="banner/stronghold_hd.jpg" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="logincode.php" method="post">
          <div class="form-outline">
            <h2>Login</h2>
              <?php
              include('error.php');
              ?>
          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Email</label>
            <input type="email" class="form-control form-control-lg" name="email" required>
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example23">Password</label>
            <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" required>
          </div>

          <div class="form-outline mb-4">
            <button type="submit" class="btn btn-success my-3" name="login" value="submit">Login</button>
          </div>

          <div class="form-outline mb-4">
            <a href="https://www.youtube.com/channel/UCYBxEwLAiBuiLQtdFf6rPog" class="btn btn-danger my-1">Youtube Link</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!--Footer Area-->
<?php
  include ('footer.php');
?>
</body>
</html>