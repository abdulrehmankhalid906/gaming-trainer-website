<?php
$servername ="localhost";
$username = "root";
$password ="";
$dbname ="expert";

$con = mysqli_connect('localhost','root','','expert');

if(!$con)
{
    echo "Sorry cannot connect right now!";
    die();
}
/*else
{
    echo "Connected";
}
*/
?>