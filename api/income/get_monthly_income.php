<?php

require_once('../../config.php');

if(!isset($_POST['date_from'])) {
    echo json_encode('Empty Data');
    return;
}

$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];

try {
    
    $emparray = array();
    
    $sql = "SELECT * FROM tblincome WHERE (
            date_from >= '$date_from'
            AND date_to <= '$date_to'
        )
        OR (
            date_to >= '$date_from'
            AND date_from <= '$date_to'
        )";
    
    $result = $db->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }

    echo json_encode($emparray);
    
} catch (MySQLException $e) {
    echo json_encode($e);
}

?>