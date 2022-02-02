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

    $sql = "INSERT INTO tbltruck VALUES (
        '$uuid',
        '$plate_no', 
        '$driver',
        '$helper1',
        '$helper2', 
        '$description',
        1
    )";

    //1 is for active status

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);

?>