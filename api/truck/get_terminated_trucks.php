<?php

require_once('../../config.php');

try {
    
    $emparray = array();
    
    $sql = "SELECT * FROM tbltruck WHERE active=0";
    
    $result = $db->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }

    echo json_encode($emparray);
    
} catch (MySQLException $e) {
    echo json_encode($e);
}

?>