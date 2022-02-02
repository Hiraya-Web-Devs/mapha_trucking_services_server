<?php

require_once('../../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode('Empty Data');
    return;
}

$uuid = $_POST['uuid'];
$plate_no = $_POST['plate_no'];
$driver = $_POST['driver'];
$helper1 = $_POST['helper1'];
$helper2 = $_POST['helper2'];
$description = $_POST['description'];

try {

    $sql = "UPDATE tbltruck SET

        plate_no='$plate_no', 
        driver='$driver', 
        helper1='$helper1', 
        helper2='$helper2', 
        description='$description'

        WHERE uuid='$uuid'";

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);

?>