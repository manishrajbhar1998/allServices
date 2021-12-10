<?php

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "ecoelectron";
$db_port = 3307;

// Create Connection

mysqli_report(MYSQLI_REPORT_STRICT);
try {
    $con = new mysqli($db_host,$db_user,$db_password,$db_name,$db_port);
    // echo "Connection established succssfully";
} catch (Exception $ex) {
        echo "Connection Failed : ".$ex->getMessage();
}


?>