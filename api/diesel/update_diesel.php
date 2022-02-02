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

    $sql = "UPDATE tbldiesel SET

        truck='$truck',
        date='$date',
        loaded=$loaded,
        price=$price,
        consume=$consume,
        average=$average
        
    WHERE uuid='$uuid'";

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);

?>