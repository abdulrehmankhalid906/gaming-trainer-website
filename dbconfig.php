<?php

$servername = 'localhost';
$username = 'gradavrd_school_sy';
$password = 'gradavrd_expert';
$dbname = '@jvdK3%yQ*U0';

$con = mysqli_connect($servername,$username,$password,$dbname);

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