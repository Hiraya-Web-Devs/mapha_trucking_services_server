<?php

require_once('../../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode('Empty Data');
    return;
}

$uuid = $_POST['uuid'];
$date = $_POST['date']; 
$description = $_POST['description'];
$amount = $_POST['amount'];
$type = $_POST['type'];

try {

    $sql = "UPDATE tblexpenses SET
        date='$date',
        description='$description',
        amount=$amount,
        type=$type
    WHERE uuid='$uuid'";

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);


?>