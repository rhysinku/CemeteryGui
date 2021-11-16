
<?php
include_once 'header.php';
include_once 'php/db.profile.inc.php';

?>
    <div style="margin: 53px;">
    <h1><?php echo @ $_SESSION["user"] ?>'s Profile ('#<?php echo @ $_SESSION["userId"] ?>')</h1>
        <div class="table-responsive">
            <table class="table">
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
                            <div><a type="hidden" class="btn btn-primary btn-lg" role="button" href="#edit" data-bs-toggle="modal">Edit</a>
                                <div class="modal fade" role="dialog" tabindex="-1" id="edit">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Modal Title</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted">Description </p>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button> 
                                            <button class="btn btn-primary" type="button">Save</button></div>
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