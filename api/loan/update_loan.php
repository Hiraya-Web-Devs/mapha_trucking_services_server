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

    $sql = "UPDATE tblloan SET
        worker='$worker',
        date='$date',
        amount=$amount,
        paid=$paid
    WHERE uuid='$uuid'";

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);

?>