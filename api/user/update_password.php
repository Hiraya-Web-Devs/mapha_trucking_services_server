<?php

require_once('../../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode('Empty Data');
    return;
}

$uuid = $_POST['uuid'];
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];

try {
    
    $emparray = array();
    
    $sql = "SELECT * FROM tbluser WHERE uuid='$uuid' AND password='$current_password'";
    
    $result = $db->query($sql);

    $row_count = $result->num_rows;
    
    if($row_count > 0) {
        $sql = "UPDATE tbluser SET password='$new_password' WHERE uuid='$uuid'";
        $result = $db->query($sql);
        echo json_encode($result);
    }
    else {
        echo json_encode("Incorrect Password");
    }

    
    
} catch (MySQLException $e) {
    echo json_encode($e);
}

?>