<?php

require_once('../../config.php');

if(!isset($_POST['username'])) {
    echo json_encode('Empty Data');
    return;
}

$username = $_POST['username'];
$password = $_POST['password'];

try {
    
    $emparray = array();
    
    $sql = "SELECT * FROM tbluser WHERE username='$username' AND password='$password'";
    
    $result = $db->query($sql);
    
    while($row = $result->fetch_assoc()) {
        $emparray[] = $row;
    }

    echo json_encode($emparray);
    
} catch (MySQLException $e) {
    echo json_encode($e);
}

?>