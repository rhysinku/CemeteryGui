<?php
include_once 'admin.header.php';

?>

<div class="d-flex flex-row justify-content-end">
        <div><a class="btn btn-primary btn-lg" role="button" id="add" href="#addUser" data-bs-toggle="modal" style="margin: 7px;">Add</a>
            <div class="modal fade" role="dialog" tabindex="-1" id="addUser">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Add User</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="text-center text-muted">Create New User </p>
                            <form action="adminphp/addUser.inc.php" method="POST" role="form">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr></tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>User Name</td>
                                            
                                            <td><input class="form-control" type="text" name="username" ></td>
                                        </tr>
                                        <tr>
                                            <td>First Name</td>
                                            <td><input class="form-control" type="text" name="fname" ></td>
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td><input class="form-control" type="text" name="lname" ></td>
                                        </tr>
                                        <tr>
                                            <td>Contact Num</td>
                                            <td><input class="form-control" type="text" name="contact" ></td>
                                        </tr>
                                        <tr>
                                            <td>Adress</td>
                                            <td><input class="form-control" type="text" name="address" ></td>
                                        </tr>
                                        <tr>
                                            <td>Mail</td>
                                            <td><input class="form-control" type="text" name="email"></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td><input type="password" class="form-control" name="pass"  id="myPassword">
                                         <input type="checkbox" onclick="myFunction()"> View Password <div class="col-sm-8">
                                          <script>
                                          function myFunction() {
                                            var x = document.getElementById("myPassword");
                                            if (x.type === "password") {
                                              x.type = "text";
                                            } else {
                                              x.type = "password";
                                            }
                                          }
                                          </script>
                                      </div></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="userAdd" class="btn btn-primary" value="Add">
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
            <table class="table">
                <thead>
                    <tr>
                        <th>Number</th>
                        <th>UserName</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Created</th>
                        <th style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <?php
        $usernum = 1;
        $tableview = $conn->query("SELECT * FROM user");
        while ($view = $tableview->fetch_assoc()){
            $date = date(" F, d, Y h:i A",strtotime($view['userTimestamp'])) ; 
            //     Y/F/d 

        ?>
                <tbody>
                    <tr>
                        <td> <?php echo $usernum++; ?> </td>
                        <td> <?php echo $view['userName']; ?> </td>
                        <td><?php echo $view['userAddress']; ?></td>
                        <td><?php echo $view['userMail']; ?></td>
                        <td><?php echo $view['userPwd']; ?></td>
                        <td><?php echo $date; ?></td>

                        <td class="d-flex flex-row justify-content-evenly">
                            <div><a class="btn btn-primary btn-lg" role="button" id="edit" href="#edit<?php echo $view['userId']; ?>" data-bs-toggle="modal" style="background: rgb(75,203,15);border-style: none;padding: 2px 16px;">Edit</a>
                                
                            <div class="modal fade" role="dialog" tabindex="-1" id="edit<?php echo $view['userId']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Edit <?php echo $view['userName'];?>'s Profile </h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted">Description</p>
                        <form action="adminphp/updateUser.inc.php" method="POST" role="form">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr></tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>User Name</td>
                                            <input type="hidden" value="<?php echo $view['userId']; ?>" name="id">
                                            <td><input class="form-control" type="text" name="username" value="<?php echo $view['userName']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>First Name</td>
                                            <td><input class="form-control" type="text" name="fname" value="<?php echo $view['userFname']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td><input class="form-control" type="text" name="lname" value="<?php echo $view['userLname']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Contact Num</td>
                                            <td><input class="form-control" type="text" name="contact" value="<?php echo $view['userContact']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td><input class="form-control" type="text" name="address" value="<?php echo $view['userAddress']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Mail</td>
                                            <td><input class="form-control" type="text" name="email" value="<?php echo $view['userMail']; ?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td><input class="form-control" type="text"  name="pass" value="<?php echo $view['userPwd']; ?>"></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="userUpdate" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                                            </div>                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div><a class="btn btn-primary btn-lg" role="button" id="del" href="#delete<?php echo $view['userId']; ?>" data-bs-toggle="modal" style="border-style: none;background: rgb(253,13,42);padding: 2px 16px;">Delete</a>
                                <div class="modal fade" role="dialog" tabindex="-1" id="delete<?php echo $view['userId']; ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Kill <?php echo $view['userName']; ?>?</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted">Are you sure to DELETE this USER from the database? </p>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button>
                                            <a href="adminphp/connect.php?delete=<?php echo $view['userId'];?>" class="btn btn-primary" >Delete</a>
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
include_once 'admin.footer.php';
?>