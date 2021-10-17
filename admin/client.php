<?php
include_once 'admin.header.php';

?>

<div class="d-flex flex-row justify-content-end">
        <div><a class="btn btn-primary btn-lg" role="button" id="add" href="#myModal" data-bs-toggle="modal" style="margin: 7px;">Add</a>
            <div class="modal fade" role="dialog" tabindex="-1" id="myModal-2">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Modal Title</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="text-center text-muted">Description </p>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
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
                        <th>UserName</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Created</th>
                        <th style="text-align: center;">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>name</td>
                        <td>address</td>
                        <td>mail</td>
                        <td>pass</td>
                        <td>time</td>
                        <td class="d-flex flex-row justify-content-evenly">
                            <div><a class="btn btn-primary btn-lg" role="button" id="edit" href="#myModal" data-bs-toggle="modal" style="background: rgb(75,203,15);border-style: none;padding: 2px 16px;">Edit</a>
                                <div class="modal fade" role="dialog" tabindex="-1" id="myModal">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Edit Profile</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="text-center text-muted">Description </p>
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div><a class="btn btn-primary btn-lg" role="button" id="delete" href="#myModal" data-bs-toggle="modal" style="border-style: none;background: rgb(253,13,42);padding: 2px 16px;">Delete</a>
                                <div class="modal fade" role="dialog" tabindex="-1" id="myModal-1">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Delete</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                </tbody>
            </table>
        </div>
    </div>
    <?php
include_once 'admin.footer.php';

?>