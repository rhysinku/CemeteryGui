<?php

require_once 'connection.php';

if(isset($_POST["pay"]))
{
    
    $userId =$_POST["id"];
    $corpse = $_POST["corpse"];
    $dob = date('y-m-d', strtotime($_POST["dob"])); 
    $dod = date('y-m-d', strtotime($_POST["dod"]));
    $address = $_POST["address"];
    $religion = $_POST["religion"];


        $sql = "INSERT INTO booking (userid, corpse, dateBirth, dateDeath, corpseAddress, corpseReligion, payment)
                VALUES ('$userId','$corpse','$dob','$dod','$address','$religion' , 1)";
        mysqli_query($conn,$sql);
        header("Location: ../Booking.php?msg=GANA");
   
}

if(isset($_POST["draft"]))
{
    
    $userId =$_POST["id"];
    $corpse = $_POST["corpse"];
    $dob = date('y-m-d', strtotime($_POST["dob"])); 
    $dod = date('y-m-d', strtotime($_POST["dod"]));
    $address = $_POST["address"];
    $religion = $_POST["religion"];


        $sql = "INSERT INTO booking (userid, corpse, dateBirth, dateDeath, corpseAddress, corpseReligion, payment)
                VALUES ('$userId','$corpse','$dob','$dod','$address','$religion' , 0)";
        mysqli_query($conn,$sql);
        header("Location: ../Booking.php?msg=GANA");
   
}

else
{
    header("Location: ../Booking.php?error=connectionError");
}