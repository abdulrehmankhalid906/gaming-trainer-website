<?php
session_start();
include ('dbconfig.php');
if(isset($_POST['upload'])){

    /*Basic Info*/
    $game_name = $_POST['game_name'];
    $description = $_POST['description'];
    $version = $_POST['version'];
    $trainer_id = $_POST['trainer_id'];
    //creating variable >>$upload
    $upload_gamepic = $_FILES['game_pic']['name'];
    $upload = $_FILES['upload_file']['name'];

    /*Insert Query*/
    $query = "INSERT INTO stronghold (game_name,description,version,game_pic,upload_file,trainer_id)
    VALUES ('$game_name','$description','$version','$upload_gamepic','$upload','$trainer_id')";
    $query_run = mysqli_query($con,$query);

    if($query_run){
        move_uploaded_file($_FILES["game_pic"]["tmp_name"],"logo/".$_FILES["game_pic"]["name"]);
        move_uploaded_file($_FILES["upload_file"]["tmp_name"],"data/".$_FILES["upload_file"]["name"]);
        header('location:index.php');
        $_SESSION['status']="New Data Uploaded";
    }
    else
    {
        $_SESSION['status']="Cannot Upload New Data";
        header('location:post.php');
    }
}
?>