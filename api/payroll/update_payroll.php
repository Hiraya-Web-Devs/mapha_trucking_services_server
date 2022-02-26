<?php

require_once('../../config.php');

if(!isset($_POST['uuid'])) {
    echo json_encode('Empty Data');
    return;
}

$uuid = $_POST['uuid']; 
$worker = $_POST['worker'];
$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];
$trips = $_POST['trips'];
$special_trips = $_POST['special_trips'];
$loan = $_POST['loan']; 
$salary = $_POST['salary'];
$deduction = $_POST['deduction'];
$special_salary = $_POST['special_salary'];
$loan_payment = $_POST['loan_payment'];
$received = $_POST['received'];
$rate = $_POST['rate'];

try {

    $sql = "UPDATE tblpayroll SET
        worker='$worker',
        date_from='$date_from',
        date_to='$date_to',
        trips=$trips,
        special_trips=$special_trips,
        loan=$loan,
        salary=$salary,
        deduction=$deduction,
        special_salary=$special_salary,
        loan_payment=$loan_payment,
        received=$received,
        rate=$rate
    WHERE uuid='$uuid'";

    $result = $db->query($sql);

} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);

?>