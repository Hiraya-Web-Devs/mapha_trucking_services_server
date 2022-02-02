<?php

require_once('../../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode('Empty Data');
    return;
}

$uuid = $_POST['uuid'];
$truck = $_POST['truck'];
$date = $_POST['date'];
$loaded = $_POST['loaded'];
$price = $_POST['price'];
$consume = $_POST['consume'];
$average = $_POST['average'];

try {

    $sql = "INSERT INTO tbldiesel VALUES (
        '$uuid',
        '$truck',
        '$date',
        $loaded,
        $price,
        $consume,
        $average
    )";

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);

?>