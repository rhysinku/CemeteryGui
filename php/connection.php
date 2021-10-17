<?php

$server = "localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "cemetery";

$conn = mysqli_connect($server, $dbusername, $dbpass, $dbname);

if(!$conn)
{
    die(" Failed: " .mysqli_connect_error());
}
