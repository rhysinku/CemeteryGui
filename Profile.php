
<?php
include_once 'header.php';
include_once 'php/db.profile.inc.php';

?>


    
    <div style="margin: 53px;">
    <h1><?php echo @ $_SESSION["user"] ?>'s Profile ('#<?php echo @ $_SESSION["userId"] ?>')</h1>
        <div class="table-responsive">
            <table class="table" >
                <thead>
                    <tr></tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img></td>
                        <td>
                            <div>
                                <form>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr> </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>User Name:</td>
                                                    <td><?php echo @ $_SESSION["user"] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>First Name</td>
                                                    <td><?php echo @$fname ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Last Name</td>
                                                    <td><?php echo @$lname ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Contact Numner</td>
                                                    <td><?php echo @$contact ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Address:</td>
                                                    <td><?php echo @$address ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Email Address:</td>
                                                    <td><?php echo @$email ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div style="margin: 53px;">
    <h1> BOOKING HISTORY </h1>
        <div class="table-responsive">
            <table class="table">
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
                <?php
        $usernum = 1;
        $id = $_SESSION["userId"];

        $tableview = $conn->query("SELECT * 
        FROM booking INNER JOIN user ON booking.userid = user.userId 
        WHERE user.userId IN ('$id') ORDER BY booking.corpsetimestamp DESC");

        while ($view = $tableview->fetch_assoc()){
        $date = date(" F, d, Y h:i A",strtotime($view['corpsetimestamp'])); 
        $dob = date(" F, d, Y",strtotime($view['dateBirth']));
        $dod = date(" F, d, Y",strtotime($view['dateDeath']));
            //     Y/F/d  user booking


        ?>
                <tbody>
                    <tr>
                        <td><?php echo $usernum++; ?></td>
                        <td><?php echo $view['corpse']; ?></td>
                        <td><?php echo $date ?></td>
                        <td><?php echo $view['payment']; ?></td>
                        <td class=""><?php echo $view['adminapprove']; ?></td>
                        <td class="d-flex flex-row justify-content-evenly" style="padding: 0;">
                            <div>
                                <a class="btn btn-primary btn-lg" role="button" href="#preview<?php echo $view['id'];?>" data-bs-toggle="modal">Preview</a>
                                <div class="modal fade" role="dialog" tabindex="-1" id="preview<?php echo $view['id'];?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4><?php echo $view['corpse'];?>'s Info</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted">Preview</p>
                            <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th><?php echo $view['corpse']; ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Address</td>
                                        <td><?php echo $view['corpseAddress']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Religion</td>
                                        <td><?php echo $view['corpseReligion']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td><?php echo $dob; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Date of Death</td>
                                        <td><?php echo $dod; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Payments</td>
                                        <td><?php echo $view['payment']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Admin Appovement</td>
                                        <td><?php echo $view['adminapprove']; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if($view['payment'] == 'queue' || $view['adminapprove'] == 'Not Approve')
                            {
                                $style = "";
                            }
                            else
                            {
                                $style = "visibility:hidden";
                            }
                            ?>

                            <div  style="<?php echo $style ?>" >
                                <a type="hidden" class="btn btn-primary btn-lg" role="button" href="#edit<?php echo $view['id'];?>" data-bs-toggle="modal">Edit</a>
                                <div class="modal fade" role="dialog" tabindex="-1" id="edit<?php echo $view['id'];?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4><?php echo $_SESSION['user'];?>'s Transaction </h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted"> ID <?php echo $view['id'];?> </p>
                                                <div class="d-flex justify-content-center" style="padding: 23px;"> 
                                                <!-- Form -->
                            <form method="POST" action="php/profilePayment.inc.php" class="d-flex flex-column" style="background: linear-gradient(133deg, black, rgb(7,8,48) 100%), rgb(33,37,41);text-align: center;padding: 18px;border-radius: 33px;color: rgb(13,110,253);font-size: 11px;" method="post">
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
                                                                        <header><label class="form-label" style="color: rgb(249,249,249);font-size: 16px;">GCash Payment</label></header>
                                                                    </td>
                                                                    <td style="border-style: none;">
                                                                        <header><label class="form-label" style="color: rgb(249,249,249);font-size: 33px;"></label></header>
                                                                    </td>
                                                                </tr>
                                                                <tr style="color: rgb(249,251,252);">
                                                                    <td class="d-flex flex-column" style="border-style: none;"><label class="form-label">Cost: Php 500.00</label><label class="form-label">Send to : 09273743328</label></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="border-style: none;">
                                                                    <input type="hidden" name= "pID" value ="<?php echo $view['id'];?>">
                                                                    <input type="hidden" name= "profile" value ="<?php echo $_SESSION['user'];?>">
                                                                    <input name= "gcash" class="form-control form-control-lg" type="text" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" placeholder="Gcash Number" style="background: rgba(255,255,255,0);text-align: center;color: rgb(13,110,253);border-style: none;font-size: 13px;" title="Gcash Number"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="border-style: none;">
                                                                    <input name="accountpass" class="form-control form-control-lg" type="password" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" placeholder="Account Password" style="background: rgba(255,255,255,0);text-align: center;color: rgb(13,110,253);border-style: none;font-size: 13px;" title="Account Password"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="border-style: none;">
                                                                        <div><button name="pay" type="submit" class="btn btn-primary btn-lg" role="button" style="font-size: 11px;"><a>Continue</a></button>
                                                                            
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                                <td class="d-flex" style="border-bottom-style: none;"><img src="./assets/img/Gcash.jpg" loading="auto" width="170px" style="border-bottom-style: none;"></td>
                                            </tr>
                                            <tr></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                                            </div>
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

    <?php
include_once 'footer.php';

?>