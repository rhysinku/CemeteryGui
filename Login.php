
<?php
include_once 'header.php';

?>
    <div class="d-flex justify-content-center" style="padding: 89px;">
        <form class="d-flex flex-column" style="background: rgb(33,37,41);text-align: center;padding: 51px;border-radius: 33px;color: rgb(13,110,253);" method="post" action="php/dbLogin.inc.php">
            <div class="table-responsive" style="border-style: none;color: rgb(13, 110, 253);">
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="border-style: none;">
                                <header><label class="form-label" style="color: rgb(255,255,255);font-size: 38px;">Log In</label></header>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-style: none;">
                            <input name ="user" class="form-control form-control-lg" type="text" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" placeholder="Username" style="background: rgba(255,255,255,0);text-align: center;color: rgb(13,110,253);border-style: none;" title="Input Username"></td>
                        </tr>
                        <tr>
                            <td style="border-style: none;">
                            <input name ="password" class="form-control form-control-lg" type="password" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" placeholder="Password" style="background: rgba(206,212,218,0);text-align: center;color: rgb(13,110,253);border-style: none;" title="Input Password"></td>
                        </tr>
                        <tr>
                            <td style="border-style: none;">
                            <button class="btn btn-primary" type="submit" name="submit"  style="background: rgb(13,110,253);border-style: none;">Log In</button></td>
                        </tr>
                        <tr>
                            <td style="border-style: none;">
                            <a href="#">Forgot Password.?</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <?php
include_once 'footer.php';

?>