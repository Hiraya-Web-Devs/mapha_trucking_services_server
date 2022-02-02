<?php

require_once('../../config.php');

if(!isset($_POST['worker'])) {
    echo json_encode('Empty Data');
    return;
}

$worker = $_POST['worker'];

try {
    
    $emparray = array();
    
    $sql = "SELECT * FROM tblloan WHERE worker='$worker' ORDER BY date";
    
    $result = $db->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }

    echo json_encode($emparray);
    
} catch (MySQLException $e) {
    echo json_encode($e);
}

?>