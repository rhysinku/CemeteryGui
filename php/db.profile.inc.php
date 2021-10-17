<?php

require_once 'connection.php';

$username = $_SESSION["user"];

$sql="SELECT * FROM user WHERE userName= '$username'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    while ($urow = mysqli_fetch_array($result))
    {
        $fname = $urow['userFname'];
        $lname = $urow['userLname'];
        $contact = $urow['userContact'];
        $address = $urow['userAddress'];
        $email = $urow['userMail'];
    }
}