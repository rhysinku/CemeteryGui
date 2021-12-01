<?php
require_once 'connection.php';
session_start();

$profile = $_POST["profile"];
$id2 = $_SESSION["payid"];
$accpass = $_POST["accpass"];
$gcash = $_POST["gcash"];
$admin = "waiting";
$imagename =$_FILES['bookimg']['name'];
$imagetemp = $_FILES['bookimg']['tmp_name'];
$newimage = uniqid("CemImg-",true).'.'.$imagename; // rename image to avoid duplicate




if(isset($_POST["pay"]))
{
    
        $sql = "SELECT * FROM user WHERE userName = '$profile'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if($accpass == $row['userPwd'])
        {
            
            $sql2 = "UPDATE booking SET adminapprove = '$admin' ,  gcash='$gcash' , bookimg = '$newimage' WHERE id = '$id2'";
            if(mysqli_query($conn,$sql2))
            {
                    

                    $location = '../assets/imageDb/'.$newimage;
                
                    move_uploaded_file($imagetemp,$location);


                    header("Location: ../Profile.php?succ=BookSuc");
               /*  $sql3 ="INSERT INTO bookingimage (bookId,bkimage) VALUES ('$id2','$newimage')";
                mysqli_query($conn,$sql3); */
                
                //error testing
              /*   echo mysqli_errno($conn); 

                echo $newimage;
                echo "<pre>";
                print_r($_FILES['bookimg']);
                echo "<pre>";  */
            }

        }
        else
        {
            header("Location: ../Payment.php?error=IncorrectPass");
    
        }
   //header("Location: ../Payment.php?error=Success");
    
}

elseif(isset($_POST["pending"]))
{
    $sql3 = "UPDATE booking SET payment = 'queue' WHERE id = '$id2'";
    mysqli_query($conn,$sql3);
    header("Location: ../Profile.php?suc=Draft");

}
else
{
    header("Location: ../Payment.php?error=WTF");
    //echo'<script>alert("Incorrect Password")</script>';
}