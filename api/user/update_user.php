<?php

require_once('../../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode('Empty Data');
    return;
}

$uuid = $_POST['uuid'];
$username = $_POST['username'];
$password = $_POST['password'];

try {

    $sql = "UPDATE tbluser SET
        username='$username',
        password='$password'
    WHERE uuid='$uuid'";

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);

?>