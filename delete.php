<?php
session_start();
include ('dbconfig.php');

$id = $_GET['id'];
$query = "delete from stronghold where id=$id";
unlink("data/".$id);

$query=mysqli_query($con, $query);

if($query)
{
    echo "Data is Deleted";
    header('location:index.php');
}

else
{
    echo "Cannot Delete Record";
    header('location:index.php');
}
?>