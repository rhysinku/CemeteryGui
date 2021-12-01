<?php
include_once 'admin.header.php';
?>


<div style="margin: 29px;">
        <div class="table-responsive">
            <table  id="example" class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Corpse Name</th>
                        <th>Booking Date</th>
                        <th>Payment</th>
                        <th>Admin Approval</th>
                        <th>Gcash Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $num= 1;
                    $tableview = $conn->query("SELECT * FROM booking LEFT JOIN user ON booking.userid = user.userId");
                    while ($view = $tableview->fetch_assoc()):
                        $bdate = date(" F, d, Y h:i A",strtotime($view['corpsetimestamp'])) ;
                        $dob = date(" F, d, Y h:i A",strtotime($view['dateBirth'])) ;
                        $dod = date(" F, d, Y h:i A",strtotime($view['dateDeath'])) ;
                    ?>
                    <tr>
                        <td><?php echo $num++?></td>
                        <td><?php echo $view['userName'];?></td>
                        <td> <?php echo $view['corpse']; ?> </td>
                        <td><?php echo $bdate; ?></td>
                        <td><?php echo $view['payment']; ?></td>
                        <td><?php echo $view['adminapprove']; ?></td>   
                        <td><?php echo $view['gcash']?></td>
                        <td class="d-flex justify-content-center">
                            <a class="btn btn-info" role="button" id="edit" href="#edit<?php echo $view['id']; ?>" data-bs-toggle="modal" role="button" >Preview</a>
                            
                            <div class="modal fade" role="dialog" tabindex="-1" id="edit<?php echo $view['id']; ?>">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"><?php echo $view['userName']; ?>'s Transaction</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Corpse Name</th>
                                                            <th><?php echo $view['corpse']; ?></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Date of Birth</td>
                                                            <td><?php echo $dob; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Date of Death</td>
                                                            <td><?php echo $dod ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Address</td>
                                                            <td><?php echo $view['corpseAddress']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Religion</td>
                                                            <td><?php echo $view['corpseReligion']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Payment</td>
                                                            <td><?php echo $view['payment']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gcash</td>
                                                            <td><?php echo $view['gcash']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Screenshot</td>
                                                            <?php 
                                        if ($view['bookimg'] == "")
                                        { ?>

                                            <td>No ScreenShot</td>
                                    <?php
                                        }
                                        else
                                        {?>
                                     <td class="d-flex justify-content-center"><img src="../assets/imageDb/<?php echo $view['bookimg'];?>" width="50%"></td>

                                    <?php
                                        }
                                        ?>
                                            <!-- <td class="d-flex justify-content-center"><img src="../assets/imageDb/CemImg-61a5c939c4b523.50452351.1065654.png" width="50%"></td> -->

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><button class="btn btn-danger" role="button" href="#bookingdelete<?php echo $view['id']; ?>" data-bs-toggle="modal">Delete</button>
                            <div class="modal fade" role="dialog" tabindex="-1" id="bookingdelete<?php echo $view['id']; ?>">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete this Transaction?</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure to DELETE <?php echo $view['userName']; ?>'s transaction</p>
                                            <p><?php echo $view['corpse']; ?>'s Booking</p>
                                        </div>
                                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cancel</button>
                                        <a  href="adminphp/connect.php?bookCdelete=<?php echo $view['id'];?>" class="btn btn-danger" >Delete</a></div>
                                    </div>
                                </div>
                            </div>
                            <?php if($view['adminapprove'] == 'waiting')
                            {
                                $notif = "";
                            }
                            else{
                                $notif = "hidden";
                            } ?>
                            <a <?php echo $notif; ?> href="Approval.php?ID=<?php echo $view['id']?>&&Name=<?php echo $view['userName']; ?>"class="btn btn-success" ><i class="fa fa-check"></i></a>
                        </td>
                    </tr>
                    <?php endwhile ?>
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
         });
    </script>
<?php
include_once 'admin.footer.php';
?>