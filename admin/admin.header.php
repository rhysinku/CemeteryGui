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

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    
    <!-- Datatable -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <!-- Boostratp -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Map-Clean.css">
    <link rel="stylesheet" href="../assets/css/mine.css">
    
</head>

<body>
    <ul class="nav nav-pills d-flex flex-row flex-shrink-0 justify-content-end flex-wrap" style="background: var(--bs-gray-900);padding: 22px;">
    <?php 
    if(isset($_SESSION["user"]))
                {
                    ?>
                    <li class='nav-item'><a class='nav-link active' href='admin.php'>Cemetery</a></li>
                    <li class='nav-item'><a class='nav-link' href='#'><?php echo $_SESSION["user"]; ?></a></li>
                    <li class='nav-item'><a class='nav-link' href='deaddata.php'>Config</a></li>";
                    <li class='nav-item'><a class='nav-link' href='client.php'>Client</a></li>";
                    <li class="nav-item">
                    <div class="nav-item dropdown">
                    <button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button">
                    <span class="counter"></span>  <span><i class="fa fa-bell"></i></span></button>
                    <div class="dropdown-menu">
                        
                    </div>
                    </div>
                    </li>
                    <li class='nav-item'><a class='nav-link' href='../admin/adminphp/adminlogout.inc.php'>Logout</a></li>
                    <?php
                }
                else
                {?>
                    <li class='nav-item'><a class='nav-link active' href='index.php'>Cemetery</a></li>
                    <li class='nav-item'><a class='nav-link' href='Login.php'>Log In</a></li>
                    <li class='nav-item'><a class='nav-link' href='Signup.php'>Sign Up</a></li>
                
                <?php 
                }
                ?>
       
    </ul>
   
        
    </div>