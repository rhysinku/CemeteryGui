<?php
include_once 'header.php';

?>


<div class="d-flex justify-content-center" style="padding: 23px;">
        <form action="php/gcashpay.inc.php" class="d-flex flex-column" style="background: linear-gradient(133deg, black, rgb(7,8,48) 100%), rgb(33,37,41);text-align: center;padding: 18px;border-radius: 33px;color: rgb(13,110,253);" method="post">
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
                                                    <header><label class="form-label" style="color: rgb(249,249,249);font-size: 33px;">GCash Payment</label></header>
                                                </td>
                                                <td style="border-style: none;">
                                                    <header><label class="form-label" style="color: rgb(249,249,249);font-size: 33px;"></label></header>
                                                </td>
                                            </tr>
                                            <tr style="color: rgb(249,251,252);">
                                                <td class="d-flex flex-column" style="border-style: none;"><label class="form-label">Cost: Php 500.00</label><label class="form-label">Send to : 09273743328</label></td>
                                            </tr>
                                            <tr>
                                                <input type="hidden" name="profile" value = "<?php echo$_SESSION["user"] ?>"> 
                                                <input type="hidden" name="id" value = "<?php echo$_SESSION["payid"] ?>"> 
                                               
                                                <td style="border-style: none;"><input name ="gcash" class="form-control form-control-lg" type="text" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" placeholder="Gcash Number" style="background: rgba(255,255,255,0);text-align: center;color: rgb(13,110,253);border-style: none;" title="Gcash Number"></td>
                                            </tr>
                                            <tr>
                                                <td style="border-style: none;"><input  name ="accpass" class="form-control form-control-lg" type="text" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" placeholder="Account Password" style="background: rgba(255,255,255,0);text-align: center;color: rgb(13,110,253);border-style: none;" title="Account Password"></td>
                                            </tr>
                                            <tr>
                                                <td style="border-style: none;">
                                                    <div><button class="btn btn-primary btn-lg" type="submit" name="pay" role="button"  data-bs-toggle="modal">Continue</button>

                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                            <td class="d-flex" style="border-bottom-style: none;"><img src="assets/img/Gcash.jpg" loading="auto" width="200px" style="border-bottom-style: none;"></td>
                        </tr>
                        <tr></tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <?php
include_once 'footer.php';

?>