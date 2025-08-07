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
                            <li><a class="dropdown-item" href="#Stronghold HD">Stronghold</a></li>
                            <li><a class="dropdown-item" href="#Stronghold Crusader HD">Stronghold Crusader</a></li>
                            <li><a class="dropdown-item" href="#Stronghold Crusader Definitive Edition">Stronghold Crusader DE</a></li>
                            <li><a class="dropdown-item" href="#Stronghold Extreme">Stronghold Extreme</a></li>
                            <li><a class="dropdown-item" href="#Call Of Duty">Call of Duty</a></li>
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

            <hr />

            <h1 id="trainers">All Trainers</h1>
            <hr>

            <?php
            $query = "SELECT games.*, 
                            trainers.id AS t_id, 
                            trainers.trainer_id, 
                            trainers.description, 
                            trainers.version, 
                            trainers.upload_file AS file, 
                            trainers.upload_time,
                            trainers.download_count
                        FROM games 
                        LEFT JOIN trainers ON games.id = trainers.fk_game_id 
                        ORDER BY games.id ASC";

            $result = mysqli_query($con, $query);
            $games = [];

            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $games[$id]['game'] = $row['name'];
                $games[$id]['game_pic'] = $row['game_pic'];

                if (!is_null($row['trainer_id'])) {
                    $games[$id]['trainers'][] = [
                        't_id' => $row['t_id'],
                        'trainer_id' => $row['trainer_id'],
                        'description' => $row['description'],
                        'version' => $row['version'],
                        'file' => $row['file'],
                        'upload_time' => $row['upload_time'],
                        'download_count' => $row['download_count'],
                    ];
                }
            }

            // Output loop
            foreach ($games as $game) {
            ?>
                <h3 class="text-center" id="<?php echo $game['game']; ?>">
                    <?php echo $game['game'] . ' Trainers'; ?>
                </h3>
                <?php
                if (!empty($game['trainers'])) {
                    foreach ($game['trainers'] as $trainer) {
                ?>
                        <div class="card" style="max-width:1000px;">
                            <div class="card-body d-flex justify-content-between">
                                <div><b>Trainer No:</b> <?php echo $trainer['trainer_id']; ?></div>
                                <div><b>Downloads:</b> <?php echo $trainer['download_count'] ?? 0 ?></div>
                            </div>
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?php echo "logo/" . $game['game_pic']; ?>" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php echo $game['game']; ?></h3>
                                        <hr>
                                        <h5 class="card-title"><?php echo $trainer['version']; ?></h5>
                                        <p class="card-text"><?php echo $trainer['description']; ?></p>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                <time class="timeago" datetime="<?php echo $trainer['upload_time']; ?>"></time>
                                            </small>
                                        </p>
                                    </div>
                                    <div class="card-body">
                                        <a href="download_count.php?file=<?php echo urlencode($trainer['file']); ?>&id=<?php echo $trainer['t_id']; ?>" class="btn btn-success">
                                            <i class="fa-sharp fa-solid fa-circle-down"></i>
                                        </a>
                                        <?php if (isset($_SESSION['name'])): ?>
                                            <a href="delete.php?id=<?php echo $trainer['t_id']; ?>" class="btn btn-danger">
                                                <i class="fa-sharp fa-solid fa-trash"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php
                    }
                } else {
                    echo "<p class='text-center'>No trainer found</p>";
                }
            }
            ?>
        </div>
    </div>
</div>