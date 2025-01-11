<?php
session_start();
include('dbconfig.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link rel="icon" type="image/s-icon" href="favicon/expert.png">
    <script src="https://kit.fontawesome.com/8594ef0287.js" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
<body>

<?php
  include 'header.php';
  include 'header_top.php'
?>

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
                    <a href="#" class="nav-link py-3 px-2" title="All Trainers" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-bars"></i>
                        Trainer Menu
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownUser3">
                        <li><a class="dropdown-item" href="index.php#Stronghold">Stronghold</a></li>
                        <li><a class="dropdown-item" href="index.php#Stronghold Crusader">Stronghold Crusader</a></li>
                        <li><a class="dropdown-item" href="index.php#Stronghold Extreme">Stronghold Extreme</a></li>
                        <li><a class="dropdown-item" href="index.php#Call Of Duty">Call of Duty</a><li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-sm p-3 min-vh-100">
        <h2>About Us</h2>
        <hr/>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <b>Expert Here Message</b>
              </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body" style="text-align:center;">
                      This website is manage by "Expert Here". We mostly upload Stronghold Crusader Trainer but 
                      now we are uploading other games trainers as well. Stuck in the game oh....... use our trainer
                      and get rid from the difficulty. If you like trainer please make sure to subscribe 
                      my Youtube Channel
                  </div>
              </div>
          </div>

          <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <b>100% Free Trainers</b>
                  </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      You can download any game trainer 100% for free. <em class="fw-bold">You don't need to pay even single penny</em>.
                  </div>
              </div>
          </div>

          <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <b>How to get trainer?</b>
                  </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      Homepage left side game names are listed. Just click your favourite game, read description and download it.
                  </div>
              </div>
          </div>

          <div class="accordion-item">
              <h2 class="accordion-header" id="headingfour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                      <b>How can I find specific version trainer?</b>
                  </button>
              </h2>
              <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      Once you click your favourite game. Make sure you have read complete description and game version as well.
                  </div>
              </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingfive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                    <b>Why Expert Here Trainers?</b>
                </button>
            </h2>
              <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  1. 100% free trainers.<br>
                  2. Virus free trainers.<br>
                  3. One click download.<br>
                  4. Updated trainers.
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php" ?>
</body>  
</html>