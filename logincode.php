<?php
session_start();
include ('dbconfig.php');
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    //checking account existance.
    $email_query = "select * from admin_table where email='$email'";
    $email_check = mysqli_query($con,$email_query);
    if(mysqli_num_rows($email_check)==0)
    {
        $_SESSION['status-error']="This user does not exists!";
        header('location:login.php');
    }
    else
    {
        $email_check = "select * from admin_table where email='$email' AND password ='$password'";
        $query = mysqli_query($con,$email_check);

        if(mysqli_num_rows($query) > 0)
        {
            $res=mysqli_fetch_assoc($query);
            if($res['rank']==1)
            {
                $_SESSION['id'] = $res['id'];
                $_SESSION['name'] = $res['name'];
                header('location:index.php');
            }
            else
            {
                $_SESSION['status-error']="You have no permission to access!";
                header("location:login.php");
            }
        }
        else
        {
            $_SESSION['status-error']="Your Email or Password Incorrect";
            header("location:login.php");
        }
    }
}
?>