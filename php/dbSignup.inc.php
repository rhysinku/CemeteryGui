<?php

require_once 'connection.php';

if(isset($_POST["submit"]))
{
    $username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $num = $_POST["num"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rpassword = $_POST["rpassword"];



        $sql = "INSERT INTO user (userName, userFname, userLname,userContact,userAddress,userMail,userPwd)
                          VALUES ('$username','$fname','$lname','$num','$address','$email','$password')";
        $conn->query($sql);
        header("Location: ../index.php?error=Success");
   

   
    
}
else
{
    header("Location: ../Register.php?error=connectionError");
}