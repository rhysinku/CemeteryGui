<?php 

require_once 'connection.php';

$gcash = $_POST['gcash'];
$accpass = $_POST['accountpass'];
$id2 = $_POST['pID'];
$profile = $_POST['profile'];
$admin = "waiting";


$imagename =$_FILES['bookimg']['name'];
$imagetemp = $_FILES['bookimg']['tmp_name'];
$newimage = uniqid("CemimgProfile-",true).'.'.$imagename; // rename image to avoid duplicate

if (isset($_POST['pay']))
{
    $sql = "SELECT * FROM user WHERE userName = '$profile'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($accpass == $row['userPwd'])
    {
        
            

        
        $sql2 = "UPDATE booking SET adminapprove = '$admin' , payment = 'pending',  gcash='$gcash' , bookimg = '$newimage' WHERE id = '$id2'";
        if(mysqli_query($conn,$sql2))
        {
            $location = '../assets/imageDb/'.$newimage;
                
           /*  move_uploaded_file($imagetemp,$location);
            echo mysqli_errno($conn); */
            header("Location: ../Profile.php?succ=PaySuc");
            
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