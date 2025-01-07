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
  <title>All Requests</title>
  <link rel="icon" type="image/s-icon" href="logo/stronghold_hd.png">
  </head>
<body>
<!--Header-->
<?php
include ('header.php');
?>
<!--navbar-->
<?php include 'header_top.php' ?>

<!--Main Area-->
<section class="vh-70">
  <div class="container py-2 h-100">
    <div class="row flex align-items-center justify-content-center h-100">
      <h2>All Requests</h2>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
              <?php
                $query = "select * from request";
                $display_query = mysqli_query($con,$query);
                if(mysqli_num_rows($display_query)>0)
                {
                  while($res = mysqli_fetch_assoc($display_query))
                  {
                    ?>
                      <tbody>
                        <tr>
                          <td><?php echo $res['id'];?></td>
                          <td><?php echo $res['name'];?></td>
                          <td><?php echo $res['email'];?></td>
                          <td><?php echo $res['descrip'];?></td>                  
                        </tr>
                      <tbody>
                    <?php
                  }
                }
                else
                {
                  //echo "No Request Result";
                }
              ?>
        </table>
    </div>
  </div>
</section>

<!--Footer-->
<?php
  include ('footer.php');
?>
</body>
</html>