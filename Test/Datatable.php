<?php 

$server = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "cemetery";

$conn = mysqli_connect($server, $dbusername, $dbpass, $dbname);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Map-Clean.css">
    <link rel="stylesheet" href="../assets/css/mine.css">
    
</head>

<body>


<div style="margin: 53px;">
        <div class="table-responsive">

            <table id="example" class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Corpse</th>
                        <th>Time Created</th>
                        <th>Payment</th>
                        <th>Approvement</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php 
$sql = "SELECT * FROM user ";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{



?>
                    <tr>
                        <td><?php echo $row["userId"]; ?></td>
                        <td><?php echo $row['userName']; ?></td>
                        <td>Date</td>
                        <td>Paid</td>
                        <td class="text-warning">Approve</td>
                        <td class="d-flex flex-row justify-content-evenly" style="padding: 0;">
                            <div><a class="btn btn-primary btn-lg" role="button" href="#preview<?php echo $row['userName']; ?>" data-bs-toggle="modal">Preview</a>
                                <div class="modal fade" role="dialog" tabindex="-1" id="preview<?php echo $row['userName']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4><?php echo $row['userName']; ?></h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted">Description </p>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </td>
                    </tr>
                    <?php } ?>
            
                </tbody>
              
            </table>
        </div>

     
    </div>
      



    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable({
        "paging":   false,
        "ordering": false,
        "info":     false

    });
} );
    </script>

</body>

<!-- <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->

</html>