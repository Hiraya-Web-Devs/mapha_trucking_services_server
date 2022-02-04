<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Access-Control-Allow-Origin, Access-Control-Allow-Methods, X-Requested-With");

$serverhost = "194.163.35.1";
$username = "u135501428_hirayatechdev";
$password = "Hirayatech2022";
$dbname = "u135501428_mapha_trucking";

try {
    // Create connection
    $db = new mysqli($serverhost, $username, $password, $dbname);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
} catch (\Throwable $th) {
    die("Connection failed: ".$th);
}

?>