<?php

require_once('../../config.php');

if(!isset(_POST['uuid'])) {
    echo json_encode('Empty Data');
    return;
}

$uuid = $_POST['uuid'];
$id_no = $_POST['id_no'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$position = $_POST['postiion'];
$salary = $_POST['salary'];
$contact_no = $_POST['contact_no'];
$birthday = $_POST['birthday'];
$date_hired = $_POST['date_hired'];
$address = $_POST['address'];
$emergency_person = $_POST['emergency_person'];
$emergency_contact = $_POST['emergency_contact'];
$license_no = $_POST['license_no'];
$sss_no = $_POST['sss_no'];
$pagibig_no = $_POST['pagibig_no'];
$philhealth_no = $_POST['philhealth_no'];
$tin = $_POST['tin'];

//links
$uri_profile = $_POST['uri_profile'];
$uri_birth_certificate = $_POST['uri_birth_certificate'];
$uri_brgy_clearance = $_POST['uri_brgy_clearance'];
$uri_police_clearance = $_POST['uri_police_clearance'];
$uri_nbi_clearance = $_POST['uri_nbi_clearance'];
$uri_health_card = $_POST['uri_health_card'];
$uri_medical_test = $_POST['uri_medical_test'];
$uri_cbc = $_POST['uri_cbc'];
$uri_ecg = $_POST['uri_ecg'];
$uri_license = $_POST['uri_license'];

try {

    $sql = "UPDATE tblworker SET
        lname='$lname', 
        fname='$fname', 
        mname='$mname', 
        position='$position', 
        salary='$salary', 
        contact_no='$contact_no', 
        birthday='$birthday', 
        date_hired='$date_hired', 
        address='$address', 
        emergency_person='$emergency_person', emergency_contact='$emergency_contact',
        license_no='$license_no', 
        sss_no='$sss_no', 
        pagibig_no='$pagibig_no', philhealth_no='$philhealth_no', 
        tin='$tin',
    
        uri_profile='$uri_profile', 
        uri_birth_certificate='$uri_birth_certificate',uri_brgy_clearance='$uri_brgy_clearance',
        uri_police_clearance='$uri_police_clearance',
        uri_nbi_clearance='$uri_nbi_clearance',
        uri_health_card='$uri_health_card',
        uri_medical_test='$uri_medical_test',
        uri_cbc='$uri_cbc',
        uri_ecg='$uri_ecg',
        uri_license='$uri_license'

        WHERE uuid='$uuid'";

    $result = $db->query($sql);
    
} catch (MySQLException $e) {
    $result = $e;
}

echo json_encode($result);

?>