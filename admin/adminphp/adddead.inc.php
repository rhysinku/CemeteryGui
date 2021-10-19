<?php
require_once 'connect.php';

if(isset($_POST["adddead"]))
{
    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mname = $_POST["mname"];
    $dob = date('y-m-d', strtotime($_POST["dob"])); 
    $dod = date('y-m-d', strtotime($_POST["dod"]));

        $update = "INSERT INTO corpse (cfname, clname, cmname,cdob,cdod)
                    VALUES ('$fname','$lname','$mname','$dob','$dod')";

            if(mysqli_query($conn,$update))
            {
                header("Location: ../deaddata.php?msg=Success");
            }

            else
            {
                header("Location: ../deadata.php?msg=WentWrong");
            }
               
}