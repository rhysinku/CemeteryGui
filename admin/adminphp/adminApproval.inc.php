<?php 

$conn = mysqli_connect("localhost", "root", "", "cemetery");

$id = $_POST['id'];

if (isset($_POST["yes"]))
{
    $sql ="UPDATE booking SET payment = 'Paid', adminapprove = 'Approve' WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../admin.php?msg=Approve");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
}

if (isset($_POST["no"]))
{
    $sql ="UPDATE booking SET payment = 'pending', adminapprove = 'Not Approve' WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../admin.php?msg=Approve");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
}