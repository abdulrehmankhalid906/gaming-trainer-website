<?php
session_start();
include('dbconfig.php');
if (isset($_POST['upload'])) {

    $fk_game_id = $_POST['fk_game_id'];
    $description = $_POST['description'];
    $version = $_POST['version'];
    $trainer_id = rand(0, 9999);
    $upload = $_FILES['upload_file']['name'];

    /*Insert Query*/
    $query = "INSERT INTO trainers (fk_game_id,description,version,upload_file,trainer_id)
    VALUES ('$fk_game_id','$description','$version','$upload','$trainer_id')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        move_uploaded_file($_FILES["upload_file"]["tmp_name"], "data/" . $_FILES["upload_file"]["name"]);
        header('location:index.php');
        $_SESSION['status'] = "New Data Uploaded";
    } else {
        $_SESSION['status'] = "Cannot Upload New Data";
        header('location:post.php');
    }
}
