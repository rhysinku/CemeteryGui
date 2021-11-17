<?php 

require_once 'connection.php';

$gcash = $_POST['gcash'];
$accpass = $_POST['accountpass'];
$id2 = $_POST['pID'];
$profile = $_POST['profile'];
$admin = "waiting";

if (isset($_POST['pay']))
{
    $sql = "SELECT * FROM user WHERE userName = '$profile'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($accpass == $row['userPwd'])
    {
        
        $sql2 = "UPDATE booking SET payment = 'pending' , adminapprove = '$admin' ,  gcash='$gcash' WHERE id = '$id2'";
        if(mysqli_query($conn,$sql2))
        {
            //echo mysqli_errno($conn); MY LIFE SAVER
            header("Location: ../Profile.php?error=Success");
            
        }


    }
    else
    {
        header("Location: ../Profile.php?error=IncorrectPass");
      
    }

}
else
{

}