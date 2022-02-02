<?php

require_once('../../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode('Empty Data');
    return;
}

$uuid = $_POST['uuid'];
$worker = $_POST['worker'];
$date = $_POST['date'];
$total_loan = $_POST['total_loan'];
$amount = $_POST['amount'];
$balance = $_POST['balance'];

try {

    $sql = "INSERT INTO tblloanpayment VALUES (
        '$uuid',
        '$worker',
        '$date',
        $total_loan,
        $amount,
        $balance
    )";

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);

?>