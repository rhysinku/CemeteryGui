<?php
require_once 'connection.php';
session_start();

$profile = $_POST["profile"];
$id2 = $_SESSION["payid"];
$accpass = $_POST["accpass"];
$gcash = $_POST["gcash"];
$admin = "waiting";



if(isset($_POST["pay"]))
{
    

       
        $sql = "SELECT * FROM user WHERE userName = '$profile'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if($accpass == $row['userPwd'])
        {
            
            $sql2 = "UPDATE booking SET adminapprove = '$admin' ,  gcash='$gcash' WHERE id = '$id2'";
            if(mysqli_query($conn,$sql2))
            {
                //echo mysqli_errno($conn); MY LIFE SAVER
                header("Location: ../Payment.php?error=Success");
                
            }


        }
        else
        {
            header("Location: ../Payment.php?error=IncorrectPass");
          
        }

        //header("Location: ../Payment.php?error=Success");
    
}
else
{
    header("Location: ../Payment.php?error=WTF");
    //echo'<script>alert("Incorrect Password")</script>';
}