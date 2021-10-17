
<?php
include_once 'header.php';
include_once 'php/db.profile.inc.php';

?>
    <div style="margin: 53px;">
    <h1><?php echo @ $_SESSION["user"] ?>' Profile</h1>
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
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Column 1</th>
                        <th>Column 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Cell 1</td>
                        <td>Cell 2</td>
                    </tr>
                    <tr>
                        <td>Cell 3</td>
                        <td>Cell 4</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php
include_once 'footer.php';

?>