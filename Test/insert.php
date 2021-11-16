<?php
//insert.php
if(isset($_POST["post_name"]))
{
 $connect = mysqli_connect("localhost", "root", "", "cemetery2");
 $post_name = mysqli_real_escape_string($connect, $_POST["post_name"]);
 $sql = "INSERT INTO admin (username) VALUES ('".$post_name."')";
 mysqli_query($connect, $sql);
}

?>