<?php
include_once 'admin.header.php';

?>
    <div style="background: var(--bs-blue);">
        <header style="text-align: center;"><label class="form-label" style="color: rgb(255,255,255);font-size: 62px;">Argao Cemetery</label></header>
    </div>
    <div class="d-flex flex-row justify-content-center" style="padding-top: 13px;"><input type="text" placeholder="Search" style="border-style: none;"><i class="fa fa-search d-flex flex-row align-items-center"></i></div>
    <div id="map" onload="initMap();"> 
    <script src="../assets/js/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWLWw1JpZXDtMopAdvBBvBKP28dQ1uwTY&map_ids=e50bebc5c429891e&callback=initMap">
    </script>
    </div>
    <?php
include_once 'admin.footer.php';

?>