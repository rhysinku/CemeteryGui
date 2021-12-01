<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Cemetery</title>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Map-Clean.css">
    <link rel="stylesheet" href="../assets/css/mine.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<?php 
$idurl = $_GET['ID'];
$nameurl = $_GET['Name'];
$conn = mysqli_connect("localhost", "root", "", "cemetery");?> 
<body>

<div style="padding: 18px;background: linear-gradient(133deg, black, rgb(7,8,48) 100%), rgb(33,37,41);color: rgb(255,255,255);margin: 12px;">
        <h1>Form Content:</h1>
        <div class="table-responsive" style="color: rgb(255,255,255);">
            <table class="table">
                <thead>
                    <?php
                        $sql="SELECT * FROM booking WHERE id = '$idurl'";
                        $result =mysqli_query($conn,$sql);

                        while($data = mysqli_fetch_assoc($result))
                        {
                            $dob = date(" F, d, Y",strtotime($data['dateBirth']));
                            $dod = date(" F, d, Y",strtotime($data['dateDeath']));

                            
                            ?>
                        
                
                    <tr>
                        <th style="color: rgb(255,255,255);border-style: none;">Corpse</th>
                        <th style="color: rgb(255,255,255);border-style: none;"><?php echo $data['corpse']; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="color: rgb(255,255,255);border-style: none;">
                        <td style="color: rgb(255,255,255);border-style: none;">Date of Birth</td>
                        <td style="color: rgb(255,255,255);border-style: none;"><?php echo $dob; ?></td>
                    </tr>
                    <tr style="color: rgb(255,255,255);border-style: none;">
                        <td style="color: rgb(255,255,255);border-style: none;">Date of Death</td>
                        <td style="color: rgb(255,255,255);border-style: none;"><?php echo $dod; ?></td>
                    </tr>
                    <tr style="color: rgb(255,255,255);border-style: none;">
                        <td style="color: rgb(255,255,255);border-style: none;">Corpse Address</td>
                        <td style="color: rgb(255,255,255);border-style: none;"><?php echo $data['corpseAddress']; ?></td>
                    </tr>
                    <tr style="color: rgb(255,255,255);border-style: none;">
                        <td style="color: rgb(255,255,255);border-style: none;">Corpse Religion</td>
                        <td style="color: rgb(255,255,255);border-style: none;"><?php echo $data['corpseReligion']; ?></td>
                    </tr>
                    <tr style="color: rgb(255,255,255);border-style: none;">
                        <td style="color: rgb(255,255,255);border-style: none;">Payment</td>
                        <td style="color: rgb(255,255,255);border-style: none;"><?php echo $data['payment']; ?></td>
                    </tr>
                    <tr style="color: rgb(255,255,255);border-style: none;">
                        <td style="color: rgb(255,255,255);border-style: none;">Gcash Number</td>
                        <td style="color: rgb(255,255,255);border-style: none;"><?php echo $data['gcash']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p>Sent Screenshot:</p>
        <div style="width: 264.656px;">
            <div class="modal fade" role="dialog" tabindex="-1" id="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="display-5 text-primary"><?php echo $nameurl; ?>'s Screenshot</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex justify-content-center">
                            <img src="../assets/imageDb/<?php echo $data['bookimg']; ?>"  width="200%"  height="100%"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-content-center justify-content-md-center"><a href="#myModal" data-bs-target="#myModal" data-bs-toggle="modal"><img src="../assets/imageDb/<?php echo $data['bookimg']; ?>" width="100%"></a></div>
    </div>
      <?php } ?>                  




    <!-- form -->
    <div class="d-flex" style="margin: 16px;">
        <form action="./adminphp/adminApproval.inc.php" class="d-flex flex-column" style="background: linear-gradient(133deg, black, rgb(7,8,48) 100%), rgb(33,37,41);text-align: center;border-radius: 33px;color: rgb(13,110,253);width: 100%;" method="post">
            <div class="table-responsive" style="border-style: none;border-bottom-style: none;">
                <table class="table">
                    <thead>
                        <tr></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="border-bottom-style: none;width: 298px;">
                                <div class="table-responsive" style="border-style: none;color: rgb(13, 110, 253);">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td style="border-style: none;">
                                                    <header>
                                                        <h6 class="display-5 text-primary">Approve Payment</h6>
                                                    </header>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="d-flex justify-content-lg-center" style="border-style: none;">
                                                <input type="hidden" value="<?php echo $idurl; ?>" name="id">
                                                    <div class="btn-group d-flex flex-fill" role="group">
                                                        <button class="btn btn-success" type="submit" name="yes">Yes, I receive the payment</button>
                                                        <button class="btn btn-danger" type="submit" name ="no">No, I did not receive the payment</button></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-style: none;">
                                                <button class="btn btn-secondary" name="later">Maybe, later</button>
                                            </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>