<?php
require_once 'connect.php';

if(isset($_POST["updateUser"]))
{
    $id = $_POST["id"];
    $username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $num = $_POST["contact"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $password = $_POST["pass"];

        $update = "UPDATE user SET userName='$username' , userFname = '$fname', userLname='$lname', userContact='$num', userAddress='$address', userMail=' $email', userPwd='$password'
             WHERE userId='$id'";

            if(mysqli_query($conn,$update))
            {
                header("Location: ../client.php?msg=Success");
            }

            else
            {
                header("Location: ../client.php?msg=WentWrong");
            }
               
}