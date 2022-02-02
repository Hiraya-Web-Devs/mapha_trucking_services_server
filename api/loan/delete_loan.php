<?php

require_once('../../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode('Empty Data');
    return;
}

try {

    $sql = "DELETE FROM tblloan WHERE uuid='$uuid'";

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);

?>