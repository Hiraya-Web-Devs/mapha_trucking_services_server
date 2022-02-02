<?php

require_once('../../config.php');

if(!isset($_POST['truck'])) {
    echo json_encode('Empty Data');
    return;
}

$truck = $_POST['truck'];

try {
    
    $emparray = array();
    
    $sql = "SELECT * FROM tbldiesel WHERE truck='$truck' ORDER BY date";
    
    $result = $db->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }

    echo json_encode($emparray);
    
} catch (MySQLException $e) {
    echo json_encode($e);
}

?>