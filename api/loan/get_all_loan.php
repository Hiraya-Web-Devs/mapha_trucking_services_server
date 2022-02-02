<?php

require_once('../../config.php');

try {
    
    $emparray = array();
    
    $sql = "SELECT * FROM tblloan ORDER BY date";
    
    $result = $db->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }

    echo json_encode($emparray);
    
} catch (MySQLException $e) {
    echo json_encode($e);
}

?>