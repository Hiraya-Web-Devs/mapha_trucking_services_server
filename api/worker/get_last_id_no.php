<?php

require_once('../../config.php');

try {
    
    $emparray = array();
    
    $sql = "SELECT * FROM tblworker  ORDER BY id_no DESC LIMIT 1 ";
    
    $result = $db->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }

    if(count($emparray) > 0) {
        echo json_encode($emparray[0]['id_no']);
    }
    else {
        echo json_encode(0);
    }
    
} catch (MySQLException $e) {
    echo json_encode($e);
}

?>