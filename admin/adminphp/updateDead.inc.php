<?php
require_once 'connect.php';

if(isset($_POST["deadUpdate"]))
{
    $id=  $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mname = $_POST["mname"];
    $dod = date('y-m-d', strtotime($_POST["dod"]));
    $dob = date('y-m-d', strtotime($_POST["dob"]));
    

        $update = "UPDATE corpse SET 
                    cfname = '$fname', clname = '$lname', cmname = '$mname', cdob = '$dob' , cdod = '$dod'
                   WHERE corpseid = '$id' ";

            if(mysqli_query($conn,$update))
            {
                header("Location: ../deaddata.php?msg=Success");
            }

            else
            {
                header("Location: ../deaddata.php?msg=WentWrong");
            }
               
}