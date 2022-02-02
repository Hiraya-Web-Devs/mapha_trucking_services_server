<?php

require_once('../../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode('Empty Data');
    return;
}

$uuid = $_POST['uuid'];
$worker = $_POST['worker'];
$date = $_POST['date'];
$amount = $_POST['amount'];
$paid = $_POST['paid'];

try {

    $sql = "INSERT INTO tblloan VALUES (
        '$uuid',
        '$worker',
        '$date',
        $amount,
        $paid
    )";

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);

?>