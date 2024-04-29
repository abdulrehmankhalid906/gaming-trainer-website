<?php
session_start();
include('dbconfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Expert Here</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8594ef0287.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <link rel="icon" type="image/s-icon" href="logo/stronghold_hd.png">
  <style>
    #back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      display: none;
      border-radius: 20px;
    }

    .carousel-item img {
      width: 100% !important;
      height: 80vh !important;
    }
  </style>
</head>
<body>

  <?php
  include 'header.php';
  include 'header_top.php';
  ?>

  <!--Display Display-->
  <div class="fluid-container" style="width: 70;">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
  </div>
  <!-- Footer -->
  <button type="button" class="btn btn-danger" id="back-to-top"><i class="fa-solid fa-arrow-up"></i></button>

  <?php include 'footer.php' ?>
</body>

</html>