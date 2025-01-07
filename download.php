<?php
session_start();
include('dbconfig.php');
?>
<!DOCTYPE html>
<html>

<head>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4710257103142047" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <title>All Downloads</title>
  <link rel="icon" type="image/s-icon" href="logo/stronghold_hd.png">
  <script src="https://kit.fontawesome.com/8594ef0287.js" crossorigin="anonymous"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="jquery/jquery.min.js"></script>
</head>

<body>
  <?php
  include('header.php');
  ?>
  <!--navbar-->

  <?php include 'header_top.php' ?>

  <div class="container-fluid">
    <div class="col-sm p-3 min-vh-100">
      <h2 class="text-center">All Games Links</h2>
      <hr />
      <div class="col-sm p-3 min-vh-100">
        <!-- content -->
        <?php
        $query = "select * from download";
        $display_query = mysqli_query($con, $query);
        if (mysqli_num_rows($display_query) > 0) {
          while ($res = mysqli_fetch_assoc($display_query)) {
        ?>
            <div class="card" style="max-width:100%;">
              <div class="row g-0">
                <div class="col-md-12">
                  <div class="card-body">
                    <h3 class="card-title"><?php echo $res['game_name']; ?></h3>
                    <hr>
                    <p class="card-text"><?php echo $res['description']; ?></p>
                    <a class="btn btn-success" href="<?php echo $res['link']; ?>" target="_blank" alt="Game Link">Dowload Now</a>
                  </div>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "No Link Found";
        }
        ?>
      </div>
    </div>
  </div>
  </div>
  <?php
    include "footer.php";
  ?>
</body>
</html>