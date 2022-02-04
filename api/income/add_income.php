<?php

require_once('../../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode('Empty Data');
    return;
}

$uuid = $_POST['uuid'];
$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];
$amount = $_POST['amount'];

try {

    $sql = "INSERT INTO tblincome VALUES (
        '$uuid',
        '$date_from',
        '$date_to',
        $amount
    )";

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);

?>