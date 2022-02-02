<?php

header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, access-control-allow-methods, X-Requested-With, access-control-allow-origin, access-control-allow-credentials");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");


if(!isset($_POST['folder_name'])) {
    echo json_encode('Empty Data');
    return;
}

$folder_name = $_POST['folder_name'];

$folder = '../uploads/'.$folder_name;

if (!file_exists($folder)) {
    mkdir($folder, 0777, true);
}

echo json_encode(true);

?>