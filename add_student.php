<?php

$servername = "localhost";
$username = "root";
$password = "ilovepython";
$dbname = "dbstudentsystem";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sid = (int)$_POST["sid"];
$sfname = $_POST["sfname"];
$slname = $_POST["slname"];
$sdob = $_POST["sdob"];
$sgender = $_POST["sgender"];
$sphonenumber = $_POST["sphonenumber"];

$sql = "INSERT INTO tblstudentinfo (seqno, sid, sfname, slname, sdob, sgender, sphonenumber)
                                VALUES (NULL, '$sid', '$sfname', '$slname', '$sdob', '$sgender', '$sphonenumber')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
