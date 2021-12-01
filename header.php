<?php
session_start();

if(isset($_GET["error"]))
{
    if ($_GET["error"] == "InvalidAccount")
    {
        $error =" <p class='font-monospace text-center text-danger'> Invalid Account </p>";
    }

    if ($_GET["error"] == "Success")
    {
        $error =" <p class='font-monospace text-center text-danger'> Account Created </p>";
    }

    if ($_GET["error"] == "PasswordError")
    {
        $error =" <p class='font-monospace text-center text-danger'> Password did not Match </p>";
    }

    if ($_GET["error"] == "LogOut")
    {
        $error =" <p class='font-monospace text-center text-danger'> Account Has Been Log Out </p>";
    }

    if ($_GET["error"] == "IncorrectPass")
    {
        $error =" <p class='font-monospace text-center text-danger'> Incorrect Password </p>";
    }
}

elseif(isset($_GET["succ"])){

    if ($_GET["succ"] == "BookSuc")
    {
        $error =" <p class='font-monospace text-center text-success'> Booking Success </p>";
    }    
    if ($_GET["succ"] == "PaySuc")
    {
        $error =" <p class='font-monospace text-center text-success'> Booking Updated Succesfully </p>";
    }  

    if ($_GET["succ"] == "Userlogin")
    {
        $error =" <p class='font-monospace text-center text-success'> Welcome " .$_SESSION["user"]. "</p>";
    }  

}

else
{
    $error ="";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cemetery</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/mine.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>
    <ul class="nav nav-pills d-flex flex-row flex-shrink-0 justify-content-end flex-wrap" style="background: var(--bs-gray-900);padding: 22px;">
    <?php 
    if(isset($_SESSION["user"]))
                {
                    echo "<li class='nav-item'><a class='nav-link active' href='index.php'>Cemetery</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='Profile.php'>".$_SESSION["user"]."</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='Booking.php'>Booking</a></li>";
                    echo "<li class='nav-item'><a class='nav-link' href='php/db.Logout.inc.php'>Logout</a></li>";
                }
                else
                {
                    echo "<li class='nav-item'><a class='nav-link active' href='index.php'>Cemetery</a></li>";
                    echo " <li class='nav-item'><a class='nav-link' href='Login.php'>Log In</a></li>";
                    echo " <li class='nav-item'><a class='nav-link' href='Signup.php'>Sign Up</a></li>";
                }
                ?>
       
    </ul>
<?php echo $error; ?>