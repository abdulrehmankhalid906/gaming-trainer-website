<?php
session_start();
include ('dbconfig.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Request Trainer</title>
    <link rel="icon" type="image/s-icon" href="logo/stronghold_hd.png">
    <script src="https://kit.fontawesome.com/8594ef0287.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
<body>
<?php
  include ('header.php');
?>
<!--navbar-->
<?php include 'header_top.php' ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-auto bg-light sticky-top">
        <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-left sticky-top">
            <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-left justify-content-between w-100 px-3 align-items-left">
                <li class="nav-item">
                    <a href="index.php" class="nav-link py-3 px-2" title="Home" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                        <i class="fa-solid fa-house"></i>
                        My Home
                    </a>
                </li>
                <li>
                    <a href="index.php#trainers" class="nav-link py-3 px-2" data-bs-toggle="tooltip" title="Trainers" data-bs-placement="right" data-bs-original-title="Trainer">
                        <i class="fa-solid fa-star"></i>
                        All Trainers
                    </a>
                </li>
                <li>
                    <a href="#request.php" class="nav-link py-3 px-2" data-bs-toggle="tooltip" title="Request Trainer" data-bs-placement="right" data-bs-original-title="Requests">
                    <i class="fa-solid fa-square-plus"></i>
                    Request Trainer
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link py-3 px-2" title="All Trainers" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-bars"></i>
                        Trainer Menu
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownUser3">
                        <li><a class="dropdown-item" href="#Stronghold HD">Stronghold Crusader</a></li>
                        <li><a class="dropdown-item" href="#Stronghold Crusader HD">Stronghold Crusader HD</a></li>
                        <li><a class="dropdown-item" href="#Call Of Duty">Call of Duty</a><li>
                        <li><a class="dropdown-item" href="#Smoke Attack">Smoke Attack</a><li>
                        <li><a class="dropdown-item" href="#Jos Dream Organic Coffee"></a><li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-sm p-3 min-vh-100">
        <h2>Request Trainer</h2>
        <?php
            include ('error.php');
        ?>
    <hr/>
        <form action="requestinfo.php" method="POST">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="mb-3">
                        <label for="game name" class="form-label">Game Name:</label>
                        <input type="text" class="form-control" name="game_name" required>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    <div class="mb-3">
                        <label for="game ver" class="form-label">Game Version:</label>
                        <input type="text" class="form-control" name="game_ver" required>
                    </div>
                </div>
            </div>

            <!--Description-->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Requirements:</label>
                        <textarea class="form-control" rows="2" col="12" name="descrip" required></textarea>
                    </div>
                </div>
            </div>
            <button type="request" class="btn btn-primary" name="request">Request</button>
        </form>
        <hr>
        <h2>All Requests</h2>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Game</th>
                <th scope="col">Version</th>
                <th scope="col">Status</th>
                <th scope="col" id="action">
                  <?php
                    if(isset($_SESSION['name']))
                    {
                    ?>
                      <span>Action</span>
                    <?php
                    }
                    else
                    {
                      ?>
                      <script>
                        $(document).ready(function(){
                          $("#action").hide();
                        });
                      </script>
                      <?php
                    }
                  ?>
                </th>
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
                          <td><?php echo $res['game_name'];?></td>
                          <td><?php echo $res['game_ver'];?></td>
                          <td>
                            <?php
                              if($res['status']==0)
                              {
                                ?>
                                <span class="text-danger fw-bold"><i>Pending</i></span>
                                <?php
                              }
                              else if($res['status']==1)
                              {
                                ?>
                                <span class="text-success fw-bold"><i>Completed</i></span>
                                <?php
                              }
                              else
                              {
                                ?>
                                <span class="text-dark fw-bold"><i>Rejected</i></span>
                                <?php
                              }
                            ?>
                          </td>

                          <td id="action-edit">
                            <?php
                              if(isset($_SESSION['name']))
                              {
                                if($res['status']==0)
                                {
                                  echo '<p><a href="edit_status.php?id='.$res['id'].'&status=1">Pending</a></p>';
                                }
                                else if($res['status']==1)
                                {
                                  echo '<p><a href="edit_status.php?id='.$res['id'].'&status=0">Completed</a></p>';
                                }
                                else
                                {
                                  echo '<p><a href="edit_status.php?id='.$res['id'].'&status=2">Rejeted</a></p>';
                                }
                              }
                              else
                              {
                                ?>
                                <script>
                                  $(document).ready(function(){
                                  $("#action-edit").hide();
                                  });
                                </script>
                              <?php
                              }
                            ?>
                          </td>
                          <td>
                            
                          </td>
                        </tr>
                      <tbody>
                    <?php
                  }
                }
                else
                {
                  //echo "No Request Yet!!";
                }
              ?>
        </table>
    </div>
  </div>
</div>
<?php
  include "footer.php";
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>  
</html>