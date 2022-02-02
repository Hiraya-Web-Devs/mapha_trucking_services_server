<?php

require_once('../../config.php');

if(!isset($_POST['amount'])) {
    echo json_encode('Empty Data');
    return;
}

$amount = $_POST['amount'];

try {

    $sql = "UPDATE tblsalaryrate SET
        amount=$amount
    WHERE description='driver_senior'";

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);

?>