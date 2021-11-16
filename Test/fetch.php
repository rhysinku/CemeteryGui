<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "cemetery2");
$query = "SELECT * FROM admin";
$result = mysqli_query($connect, $query);
$count= mysqli_num_rows($result);
echo '<p>'.$count.'</p>';
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
  echo '<p>'.$row["username"].'</p>';
 }
}
?>