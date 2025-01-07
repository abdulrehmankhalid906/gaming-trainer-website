<?php

$type = 'production';
switch($type)
{
    case 'production':
        $servername = 'localhost';
        $username = 'gradavrd_school_sy';
        $password = '@jvdK3%yQ*U0';
        $dbname = 'gradavrd_expert';
        break;
    default:
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'expert';
}

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