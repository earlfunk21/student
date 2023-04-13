<?php

require_once 'includes/header.php';
require_once('db_student.php');

$sid = (int)$_POST["sid"];
$sfname = $_POST["sfname"];
$slname = $_POST["slname"];
$sdob = $_POST["sdob"];
$sgender = $_POST["sgender"];
$sphonenumber = $_POST["sphonenumber"];

$db_student = new DBStudent(DBStudent::getConnection());

$db_student->add_student($sid, $sfname, $slname, $sdob, $sgender, $sphonenumber);

?>

<table>
    <tr>
        <th>Student ID:</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date Of Birth</th>
        <th>Gender</th>
        <th>Phone Number</th>
    </tr>
</table>