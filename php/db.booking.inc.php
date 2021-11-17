<?php

require_once "connection.php";

if(isset($_POST["pay"]))
{
    

    $userId =$_POST["id"];
    $corpse = $_POST["corpse"];
    $dob = date('y-m-d', strtotime($_POST["dob"])); 
    $dod = date('y-m-d', strtotime($_POST["dod"]));
    $address = $_POST["address"];
    $religion = $_POST["religion"];
    $payment = "pending";

        $sql = "INSERT INTO booking (userid, corpse, dateBirth, dateDeath, corpseAddress, corpseReligion, payment)
                VALUES ('$userId','$corpse','$dob','$dod','$address','$religion' , '$payment')";
        mysqli_query($conn,$sql);
        //header("Location: ../Booking.php?msg=Payment");


        $sql2 = "SELECT id FROM booking WHERE userid = '$userId' AND corpse = '$corpse' AND payment ='pending' ORDER BY corpsetimestamp DESC ";
         $result = mysqli_query($conn,$sql2);
         $row = mysqli_fetch_array($result);
        $Idpay = $row['id'];
        session_start();
        $_SESSION['payid'] = $Idpay;

        header("Location: ../Payment.php?ID=$Idpay ");
   
}

if (isset($_POST["draft"]))
{
    
    $userId =$_POST["id"];
    $corpse = $_POST["corpse"];
    $dob = date('y-m-d', strtotime($_POST["dob"])); 
    $dod = date('y-m-d', strtotime($_POST["dod"]));
    $address = $_POST["address"];
    $religion = $_POST["religion"];
    $payment = "queue";

        $sql = "INSERT INTO booking (userid, corpse, dateBirth, dateDeath, corpseAddress, corpseReligion, payment)
                VALUES ('$userId','$corpse','$dob','$dod','$address','$religion' , '$payment')";
        mysqli_query($conn,$sql);
        header("Location: ../Profile.php?msg=Draft");
   
}
