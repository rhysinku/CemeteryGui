<?php
include_once 'header.php';

?>
    <div class="d-flex justify-content-center" style="padding: 89px;">
        <form class="d-flex flex-column" style="background: rgb(33,37,41);text-align: center;padding: 51px;border-radius: 33px;color: rgb(13,110,253);" method="post" action="php/db.booking.inc.php">
            <div class="table-responsive" style="border-style: none;color: rgb(13, 110, 253);">
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="border-style: none;">
                                <header style="color: rgb(255,255,255);"><label class="form-label">BOOKING FORM</label></header>
                            </td>
                        </tr>
                        <tr>
                            <td style="border-style: none;"><input type ="none" name ="id" value ="<?php echo @$_SESSION['userId'] ?>"/>  
                            <input class="form-control form-control-lg" type="text" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" placeholder="Name of Corpse" name="corpse" id="corpse" style="background: rgba(255,255,255,0);text-align: center;color: rgb(13,110,253);border-style: none;" title="Name of Corpse" required></td>
                        </tr>
                        <tr>
                            <td style="border-style: none;">
                            <label class="form-label" style="color: rgb(255,255,255);">Date of Birth</label>
                            <input class="form-control" type="date" name="dob"  id="dob" style="color: rgb(255,255,255);background: rgba(255,255,255,0);border-style: none;" required></td>
                        </tr>
                        <tr>
                            <td style="border-style: none;">
                            <label class="form-label" style="color: rgb(255,255,255);">Date of Death</label>
                            <input class="form-control" type="date" name="dod" id="dod" style="color: rgb(255,255,255);background: rgba(255,255,255,0);border-style: none;" required></td>
                        </tr>
                        <tr>
                            <td style="border-style: none;">
                            <input class="form-control form-control-lg" type="text" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" placeholder="Address" name="address" id="address" style="background: rgba(255,255,255,0);text-align: center;color: rgb(13,110,253);border-style: none;" title="Address" required></td>
                        </tr>
                        <tr>
                            <td style="border-style: none;">
                            <input class="form-control form-control-lg" type="text" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="left" placeholder="Religion" name="religion" id="religion" style="background: rgba(255,255,255,0);text-align: center;color: rgb(13,110,253);border-style: none;" title="Religion" required></td>
                        </tr>
                        <tr>
                            <td style="border-style: none;">
                            
                                <div><a type="submit" class="btn btn-primary btn-lg" role="button" id="preview" href="#myModal" data-bs-toggle="modal">Preview</a>
                                    <div class="modal fade" role="dialog" tabindex="-1" id="myModal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4>Preview</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-center text-muted">Book Mass</p>
                                                    <div class="table-responsive">
                                                    <div id="modal_body"></div>
                                                        <table class="table">
                                                            <thead>
                                                                <tr></tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Name of Corpse:</td>
                                                                    <td id="corpse1"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date of Birth</td>
                                                                    <td id="dob1"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date of Death</td>
                                                                    <td id="dod1"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Address</td>
                                                                    <td id="address1"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Religion</td>
                                                                    <td id="religion1"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                <button class="btn btn-light" type="submit" data-bs-dismiss="modal" name="draft">Save to Draft</button>
                                                <button class="btn btn-primary" type="submit" name="pay">Proceed to Payment</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>

    <script type="text/javascript">
    $("#preview").click(function () {
            var corpse = $("#corpse").val();
            var dob = $("#dob").val();
            var dod = $("#dod").val();
            var address = $("#address").val();
            var religion = $("#religion").val();
            $("#corpse1").html(corpse);
            $("#dob1").html(dob);
            $("#dod1").html(dod);
            $("#address1").html(address);
            $("#religion1").html(religion);
            
        });
    </script>
    <?php
include_once 'footer.php';

?>