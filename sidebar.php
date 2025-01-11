<div class="container-fluid">
    <div class="row">
        <div class="col-sm-auto bg-light sticky-top">
            <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-left sticky-top">
                <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-left justify-content-between w-100 px-3 align-items-left">
                    <li class="nav-item">
                        <a href="#" class="nav-link py-3 px-2" title="Home" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                            <i class="fa-solid fa-house"></i>
                            My Home
                        </a>
                    </li>
                    <li>
                        <a href="#trainers" class="nav-link py-3 px-2" data-bs-toggle="tooltip" title="Trainers" data-bs-placement="right" data-bs-original-title="Trainer">
                            <i class="fa-solid fa-star"></i>
                            All Trainers
                        </a>
                    </li>
                    <li>
                        <a href="request.php" class="nav-link py-3 px-2" data-bs-toggle="tooltip" title="Request Trainer" data-bs-placement="right" data-bs-original-title="Requests">
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
                            <li><a class="dropdown-item" href="#Stronghold">Stronghold</a></li>
                            <li><a class="dropdown-item" href="#Stronghold Crusader">Stronghold Crusader</a></li>
                            <li><a class="dropdown-item" href="#Stronghold Extreme">Stronghold Extreme</a></li>
                            <li><a class="dropdown-item" href="#Call Of Duty">Call of Duty</a><li>
                            <!-- <li><a class="dropdown-item" href="#Smoke Attack">Smoke Attack</a><li> -->
                        </ul>
                    </li>
                </ul>
            </div>
        </div>


        <div class="col-sm p-3 min-vh-100">
            <div class="row">
                <div class="error">
                    <span class="center">
                        <?php
                        include('error.php');
                        ?>
                    </span>
                </div>
            </div>

            <h2>Home - Expert Here Gaming Trainers</h2>
            <hr>

            <?php include "swaper.php" ?>

            <hr/>

            <h1 id="trainers">All Trainers</h1>
            <hr>

            <!--Stronghold-->
            <h3 class="text-center" id="Stronghold">Stronghold HD- Trainers</h3>
            <?php
               $query = "SELECT trainers.*, games.name as title, games.game_pic as image_url FROM trainers
                INNER JOIN games ON trainers.fk_game_id = games.id WHERE trainers.fk_game_id = 1";
                $display_query = mysqli_query($con,$query);
                if(mysqli_num_rows($display_query)>0)
                {
                    while($res = mysqli_fetch_assoc($display_query))
                    {
                        ?>           
                            <div class="card" style="max-width:1000px;">
                                <div class="card-body"><b>Trainer No:</b> <?php echo $res['trainer_id'];?></div>
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="<?php echo "logo/".$res['image_url'];?>" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php echo $res['title'];?></h3>
                                        <hr>
                                        <h5 class="card-title"><?php echo $res['version'];?></h5>
                                        <p class="card-text"><?php echo $res['description'];?></p>
                                        <p class="card-text"><small class="text-muted"><time class="timeago" datetime="<?php echo $res['upload_time'];?>"></time></small></p>
                                    </div>

                                    <div class="card-body">
                                        <a href="<?php echo "data/".$res['upload_file'];?>" class="btn btn-success">
                                            <i class="fa-sharp fa-solid fa-circle-down"></i> 
                                        </a>
                                    <?php
                                        if(isset($_SESSION['name']))
                                        {
                                            ?>
                                                <a href="delete.php?id=<?php echo $res['id']?>" id="bt_delete" class="btn btn-success">Delete</a>
                                            <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                                </div>
                            </div>
                        <?php
                    }
                }
                else
                {
                    echo "No Trainer Found";
                }
            ?>

            <!-- Stronghold Crusader -->
            <h3 class="text-center" id="Stronghold Crusader">Stronghold Crusader HD- Trainers</h3>
            <?php
                $query = "SELECT trainers.*, games.name as title, games.game_pic as image_url FROM trainers
                INNER JOIN games ON trainers.fk_game_id = games.id WHERE trainers.fk_game_id = 2";

                $display_query = mysqli_query($con,$query);
                if(mysqli_num_rows($display_query)>0)
                {
                    while($res = mysqli_fetch_assoc($display_query))
                    {
                        ?>           
                            <div class="card" style="max-width:1000px;">
                                <div class="card-body"><b>Trainer No:</b> <?php echo $res['trainer_id'];?></div>
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="<?php echo "logo/".$res['image_url'];?>" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php echo $res['title'];?></h3>
                                        <hr>
                                        <h5 class="card-title"><?php echo $res['version'];?></h5>
                                        <p class="card-text"><?php echo $res['description'];?></p>
                                        <p class="card-text"><small class="text-muted"><time class="timeago" datetime="<?php echo $res['upload_time'];?>"></time></small></p>
                                    </div>

                                    <div class="card-body">
                                        <a href="<?php echo "data/".$res['upload_file'];?>" class="btn btn-success">
                                            <i class="fa-sharp fa-solid fa-circle-down"></i> 
                                        </a>
                                    <?php
                                        if(isset($_SESSION['name'])){
                                        ?>
                                            <a href="delete.php?id=<?php echo $res['id']?>" id="bt_delete" class="btn btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                                        <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                                </div>
                            </div>
                        <?php
                    }
                }
                else
                {
                    echo "No Trainer Found";
                }
            ?>

            <!-- Stronghold Extreme -->
            <h3 class="text-center" id="Stronghold Extreme">Stronghold Extreme HD- Trainers</h3>
            <?php
               $query = "SELECT trainers.*, games.name as title, games.game_pic as image_url FROM trainers
                INNER JOIN games ON trainers.fk_game_id = games.id WHERE trainers.fk_game_id = 3";
                $display_query = mysqli_query($con,$query);
                if(mysqli_num_rows($display_query)>0)
                {
                    while($res = mysqli_fetch_assoc($display_query))
                    {
                        ?>           
                            <div class="card" style="max-width:1000px;">
                                <div class="card-body"><b>Trainer No:</b> <?php echo $res['trainer_id'];?></div>
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="<?php echo "logo/".$res['image_url'];?>" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php echo $res['title'];?></h3>
                                        <hr>
                                        <h5 class="card-title"><?php echo $res['version'];?></h5>
                                        <p class="card-text"><?php echo $res['description'];?></p>
                                        <p class="card-text"><small class="text-muted"><time class="timeago" datetime="<?php echo $res['upload_time'];?>"></time></small></p>
                                    </div>

                                    <div class="card-body">
                                        <a href="<?php echo "data/".$res['upload_file'];?>" class="btn btn-success">
                                            <i class="fa-sharp fa-solid fa-circle-down"></i> 
                                        </a>
                                    <?php
                                        if(isset($_SESSION['name']))
                                        {
                                            ?>
                                                <a href="delete.php?id=<?php echo $res['id']?>" id="bt_delete" class="btn btn-success">Delete</a>
                                            <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                                </div>
                            </div>
                        <?php
                    }
                }
                else
                {
                    echo "No Trainer Found";
                }
            ?>

            <!--Call Of Duty-->
            <h3 class="text-center" id="Call Of Duty">Call Of Duty - Trainers</h3>
            <?php
                $query = "SELECT trainers.*, games.name as title, games.game_pic as image_url FROM trainers
                INNER JOIN games ON trainers.fk_game_id = games.id WHERE trainers.fk_game_id = 4";
                $display_query = mysqli_query($con,$query);
                if(mysqli_num_rows($display_query)>0)
                {
                    while($res = mysqli_fetch_assoc($display_query))
                    {
                        ?>           
                            <div class="card" style="max-width:1000px;">
                                <div class="card-body"><b>Trainer No:</b> <?php echo $res['trainer_id'];?></div>
                                <div class="row g-0">
                                    <div class="col-md-4">
                                    <img src="<?php echo "logo/".$res['image_url'];?>" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php echo $res['title'];?></h3>
                                        <hr>
                                        <h5 class="card-title"><?php echo $res['version'];?></h5>
                                        <p class="card-text"><?php echo $res['description'];?></p>
                                        <p class="card-text"><small class="text-muted"><time class="timeago" datetime="<?php echo $res['upload_time'];?>"></time></small></p>
                                    </div>

                                    <div class="card-body">
                                        <a href="<?php echo "data/".$res['upload_file'];?>" class="btn btn-success">
                                        <i class="fa-sharp fa-solid fa-circle-down"></i> 
                                    </a>
                                    <?php
                                        if(isset($_SESSION['name']))
                                        {
                                            ?>
                                                <a href="delete.php?id=<?php echo $res['id']?>" id="bt_delete" class="btn btn-success">Delete</a>
                                            <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                                </div>
                            </div>
                        <?php
                    }
                }
                else
                {
                    echo "No Trainer Found";
                }
            ?>
        </div>
    </div>
</div>