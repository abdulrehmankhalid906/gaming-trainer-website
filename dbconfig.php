<?php

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