<?php

require_once 'connection.php';



    $usern= $_POST["user"];
    $pass = $_POST["password"];

    $sql= "SELECT * FROM user WHERE userName ='$usern' AND userPwd = '$pass'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result))
        {
            $userID = $row['userId'];
            $username = $row['userName'];
            session_start ();
            $_SESSION['user'] = $username;
            $_SESSION['userId'] = $userID;
            
        }
        if($_SESSION['user'] == "Admin" || $_SESSION['user'] == "admin")
        {
        header("Location: ../admin/admin.php?succ=Adminlogin"); 
        }
        else{

        header("Location: ../index.php?succ=Userlogin"); 
         }
    }

    else
    {
        header("Location: ../LogIn.php?error=InvalidAccount"); 
    }
    
   