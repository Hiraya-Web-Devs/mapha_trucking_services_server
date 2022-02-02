<?php

require_once('../../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode('Empty Data');
    return;
}

try {
    
    $emparray = array();
    
    $sql = "SELECT * FROM tbltruck WHERE uuid='$uuid'";
    
    $result = $db->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }

    echo json_encode($emparray);
    
} catch (MySQLException $e) {
    echo json_encode($e);
}

?>