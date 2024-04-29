<?php
include ('dbconfig.php');

$id= $_GET['id'];
$status= $_GET['status'];

$edit= "update request set status=$status where id='$id'";
mysqli_query($con,$edit);

header("location:request.php");

?>