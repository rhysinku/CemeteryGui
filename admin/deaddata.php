<?php
include_once 'admin.header.php';

?>

<div class="d-flex flex-row justify-content-end">
        <div><a class="btn btn-primary btn-lg" role="button" id="add" href="#addUser" data-bs-toggle="modal" style="margin: 7px;">Add</a>
            <div class="modal fade" role="dialog" tabindex="-1" id="addUser">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Insert Corpse</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="text-center text-muted">Create New Corpse </p>
                            <form action="adminphp/adddead.inc.php" method="POST" role="form">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr></tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>First Name</td>
                                            
                                            <td><input class="form-control" type="text" name="fname" ></td>
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td><input class="form-control" type="text" name="lname" ></td>
                                        </tr>
                                        <tr>
                                            <td>Middle Name</td>
                                            <td><input class="form-control" type="text" name="mname" ></td>
                                        </tr>
                                        <tr>
                                            <td>Date of Birth</td>
                                            <td><input class="form-control" type="date" name="dob" ></td>
                                        </tr>
                                        <tr>
                                            <td>Date of Died</td>
                                            <td><input class="form-control" type="date" name="dod" ></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                            <button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="adddead" class="btn btn-primary" value="Add">
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div style="margin: 25px;">
        <div class="table-responsive">
            <table id="example" class="table">
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>Date of Dead</th>
                        <th>Time Created</th>
                        <th style="text-align: center;">Action</th>
                    </tr>
                </thead>
               
                <tbody>
                <?php
        $usernum = 1;
        $tableview = $conn->query("SELECT * FROM corpse");
        while ($view = $tableview->fetch_assoc()){
            $date = date(" F, d, Y h:i A",strtotime($view['dtimestamp'])) ; 
            $dob = date(" F, d, Y   ",strtotime($view['cdob'])) ; 
            $dod= date(" F, d, Y",strtotime($view['cdod'])) ; 
            //     Y/F/d 
        ?>
                    <tr>
                        <td> <?php echo $usernum++; ?> </td>
                        <td> <?php echo $view['cfname']; ?> </td>
                        <td><?php echo $view['cmname']; ?></td>
                        <td><?php echo $view['clname']; ?></td>
                        <td style="font-size:13px" ><?php echo $dob ?></td>
                        <td style="font-size:13px"><?php echo $dod ?></td>
                        <td style="font-size:13px"><?php echo $date; ?></td>

                        <td class="d-flex flex-row justify-content-evenly">
                            <div><a class="btn btn-primary btn-lg" role="button" id="edit" href="#edit<?php echo $view['corpseid']; ?>" data-bs-toggle="modal" style="background: rgb(75,203,15);border-style: none;padding: 2px 16px;">Edit</a>
                                
                            <div class="modal fade" role="dialog" tabindex="-1" id="edit<?php echo $view['corpseid']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Edit <?php echo $view['cfname'];?>'s Info </h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted">Edit Info</p>
                        <form action="adminphp/updateDead.inc.php" method="POST" role="form">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr></tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>First Name</td>
                                            <input type="hidden" value="<?php echo $view['corpseid']; ?>" name="id">
                                            <td><input class="form-control" type="text" name="fname" value="<?php echo $view['cfname']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td><input class="form-control" type="text" name="lname" value="<?php echo $view['clname']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Middle Name</td>
                                            <td><input class="form-control" type="text" name="mname" value="<?php echo $view['cmname']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Date of Birth</td>
                                            <td><input class="form-control" type="date" name="dob" value="<?php echo $view['cdob']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Date of Died</td>
                                            <td><input class="form-control" type="date" name="dod" value="<?php echo $view['cdod']; ?>"></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="deadUpdate" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                                            </div>                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div><a class="btn btn-primary btn-lg" role="button" id="del" href="#delete<?php echo $view['corpseid']; ?>" data-bs-toggle="modal" style="border-style: none;background: rgb(253,13,42);padding: 2px 16px;">Delete</a>
                                <div class="modal fade" role="dialog" tabindex="-1" id="delete<?php echo $view['corpseid']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Kill <?php echo $view['cfname']; ?>?</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted">Are you sure to DELETE this USER from the database? </p>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                            <a href="adminphp/connect.php?cdelete=<?php echo $view['corpseid'];?>" class="btn btn-primary" >Delete</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>   
                    </tr>
                    <?php 
                } ?>
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