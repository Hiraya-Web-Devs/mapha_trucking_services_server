<?php

require_once('../../config.php');

try {

    $emparray = array();

    $sql = "SELECT * FROM tblworker WHERE active=0";
    $result = $db->query($sql);

    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

} catch (exception $e) {
    echo json_encode($emparray);
}

?>