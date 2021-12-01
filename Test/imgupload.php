<?php
$conn = mysqli_connect("localhost","root", "", "cemetery2");


if(isset($_POST['imgpass']))
{
    /* echo "<pre>";
    print_r($_FILES['img']);
    echo "<pre>"; */
    $image = $_FILES['img']['name'];
    $imgtemp = $_FILES['img']['tmp_name'];

    $location = 'assets/'.$image;
    move_uploaded_file($imgtemp, $location);

   $sql = "INSERT INTO imgup (img) VALUES ('$image')";
    mysqli_query($conn,$sql); 

    echo $image;
    echo $imgtemp;
    
    echo "Success";

    header("location: ../test/index.php");


}