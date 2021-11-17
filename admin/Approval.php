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
?>
<body>
    <div class="d-flex justify-content-center" style="padding: 89px;">
        <form method="post" action="./adminphp/adminApproval.inc.php" class="d-flex flex-column" style="background: rgb(33,37,41);text-align: center;padding: 51px;border-radius: 33px;color: rgb(13,110,253);" method="post">
            <div class="table-responsive" style="border-style: none;color: rgb(13, 110, 253);">
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="border-style: none;">
                                <header></header>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-style: none;">
                            <input type="text" name="id" value="<?php echo $idurl; ?>" />
                                <h1 class="text-primary">Admin Approval</h1>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-style: none;">
                                <p class="text-secondary">Name want to Confirm its Payment</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="d-flex flex-column" style="border-style: none;">
                            <button class="btn btn-success" type="submit" style="margin: 4px;" name="yes"><span>I receive the payment</span></button>
                            <button class="btn btn-danger text-center d-flex flex-column" type="submit" name="no" style="margin: 4px;"><span>I did not receive the payment</span></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>