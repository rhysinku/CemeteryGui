<?php
session_start();
include '../php/connection.php';
//include 'adminphp/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cemetery</title>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Map-Clean.css">
    <link rel="stylesheet" href="../assets/css/mine.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <ul class="nav nav-pills d-flex flex-row flex-shrink-0 justify-content-end flex-wrap" style="background: var(--bs-gray-900);padding: 22px;">
    <?php 
    if(isset($_SESSION["user"]))
                {
                    echo "<li class='nav-item'><a class='nav-link active' href='admin.php'>Cemetery</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='adminProfile.php'>".$_SESSION["user"]."</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='deaddata.php'>Config</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='client.php'>Client</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='../admin/adminphp/adminlogout.inc.php'>Logout</a></li>";
                }
                else
                {
                    echo "<li class='nav-item'><a class='nav-link active' href='index.php'>Cemetery</a></li>";
                    echo " <li class='nav-item'><a class='nav-link' href='Login.php'>Log In</a></li>";
                    echo " <li class='nav-item'><a class='nav-link' href='Signup.php'>Sign Up</a></li>";
                }
                ?>
       
    </ul>