<?php

header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, access-control-allow-methods, X-Requested-With, access-control-allow-origin, access-control-allow-credentials");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

if(!isset($_POST['file_pointer'])) {
    echo json_encode('Empty Data');
    return;
}

$file_pointer = $_POST['file_pointer'];

$file_pointer = '../uploads/'.$file_pointer;

if (!unlink($file_pointer)) { 
    echo json_encode("$file_pointer cannot be deleted due to an error");
}
else { 
    echo json_encode("$file_pointer has been deleted"); 
} 

?>