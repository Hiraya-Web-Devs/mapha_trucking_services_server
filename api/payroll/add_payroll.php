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
$special_trips = $_POST['spcl_trips'];
$loan = $_POST['loan']; 
$salary = $_POST['salary'];
$deduction = $_POST['deduction'];
$special_salary = $_POST['special_salary'];
$loan_payment = $_POST['loan_payment'];
$received = $_POST['received'];
$rate = $_POST['rate'];

?>