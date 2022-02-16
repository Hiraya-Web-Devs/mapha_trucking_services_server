<?php

require_once('../../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode('Empty Data');
    return;
}

$uuid = $_POST['uuid'];
$waybill_no = $_POST['waybill_no'];
$truck = $_POST['truck'];
$driver = $_POST['driver'];
$helper1 = $_POST['helper1'];
$helper2 = $_POST['helper2'];
$origin = $_POST['origin'];
$destination = $_POST['destination'];
$date_go = $_POST['date_go'];
$date_return = $_POST['date_return'];
$gas = $_POST['gas'];
$toll_gate = $_POST['toll_gate'];
$pass_way = $_POST['pass_way'];
$allowance = $_POST['allowance'];
$eload = $_POST['eload'];
$other = $_POST['other'];
$total = $_POST['total'];
$special = $_POST['special'];
$driver_special = $_POST['driver_special'];
$helper_special = $_POST['helper_special'];

try {

    $sql = "INSERT INTO tbltrip VALUES (
        '$uuid',
        '$waybill_no',
        '$truck',
        '$driver',
        '$helper1',
        '$helper2',
        '$origin',
        '$destination',
        '$date_go',
        '$date_return',
        $gas,
        $toll_gate,
        $pass_way,
        $allowance,
        $eload,
        $other,
        $total,
        $special,
        $driver_special,
        $helper_special
    )";

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);


?>