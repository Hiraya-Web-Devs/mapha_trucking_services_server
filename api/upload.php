<?php

header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, access-control-allow-methods, X-Requested-With, access-control-allow-origin, access-control-allow-credentials");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");


if(!isset($_FILES['file'])) {
    echo json_encode('Empty Data');
    return;
}

$folder = $_POST['folder'];
$new_name = $_POST['new_name'];

if($_FILES['file']) {

    // name of the uploaded file
    $filename = $new_name;

    // destination of the file on the server
    $destination = '../uploads/'.$folder.'/'.$filename;

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['file']['tmp_name'];

    // move the uploaded (temporary) file to the specified destination
    if (move_uploaded_file($file, $destination)) {
        echo json_encode("File uploaded successfully");
    } else {
        echo json_encode("Failed to upload file.");
    }
}
else {
    echo json_encode("Empty file");
}

?>