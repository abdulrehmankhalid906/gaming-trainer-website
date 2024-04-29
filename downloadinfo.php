<?php
session_start();
include ('dbconfig.php');
if(isset($_POST['upload'])){

    /*Basic Info*/
    $game_name = $_POST['game_name'];
    $description = $_POST['description'];
    $link = $_POST['link'];

    /*Insert Query*/
    $query = "INSERT INTO download (game_name,description,link)
    VALUES ('$game_name','$description','$link')";
    $query_run = mysqli_query($con,$query);

    if($query_run){
        header('location:index.php');
        $_SESSION['status']="New Link Uploaded";
    }
    else
    {
        $_SESSION['status']="Link Cannot Upload";
        header('location:post.php');
    }
}
?>