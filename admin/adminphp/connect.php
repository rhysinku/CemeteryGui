<?php

include_once '../../php/connection.php';


if(!$conn)
{
    die(" Failed: " .mysqli_connect_error());
}

if(isset($_GET['delete']))
{
    $id = $_GET['delete'];
    $del= "DELETE FROM user WHERE userId = '$id'";

   // $querydelete = mysqli_query($conn, "DELETE FROM user WHERE id_user=$id");

    if (mysqli_query($conn,$del)) {
        header ("location: ../client.php?msg=deletesuc");
    }
    else{
        header ("location: ../client.php?msg=NOdelete");
    }
    
}

if(isset($_GET['cdelete']))
{
    $id = $_GET['cdelete'];
    $del= "DELETE FROM corpse WHERE corpseid = '$id'";

   // $querydelete = mysqli_query($conn, "DELETE FROM user WHERE id_user=$id");

    if (mysqli_query($conn,$del)) {
        header ("location: ../deaddata.php?msg=deletesuc");
    }
    else{
        header ("location: ../deaddata.php?msg=NOdelete");
    }
    
}

else
{
    header("Location: ../client.php?error=connectionError");
}