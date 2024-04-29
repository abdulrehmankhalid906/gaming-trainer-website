<?php
session_start();
include ('dbconfig.php');
if(isset($_POST['request'])){

    $name =$_POST['name'];
    $email =$_POST['email'];
    $game_name = $_POST['game_name'];
    $game_var = $_POST['game_ver'];
    $descrip = $_POST['descrip'];

    /*Insert Query*/
    $query = "INSERT INTO request (name,email,game_name,game_ver,descrip)
    VALUES ('$name','$email','$game_name','$game_var','$descrip')";
    $query_run = mysqli_query($con,$query);

    if($query_run){
        header('location:index.php');
        $_SESSION['status']="Your have successfully requested";
    }
    else
    {
        $_SESSION['status']="Your cannot request right now!";
        header('location:request.php');
    }
}
?>