<?php

class DBStudent{
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "ilovepython";
    private static $dbname = "dbstudentsystem";

    private $conn;

    function __construct($conn){
        $this->conn = $conn;
    }

    public static function getConnection(){
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$dbname);
        if ($conn->connect_error)
            die("Connection failed: " . $conn->connect_error);
        return $conn;
    }

    function query($sql){
        $result = $this->conn->query($sql);
        $this->conn->close();
        return $result;
    }

    function add_student($sid, $sfname, $slname, $sdob, $sgender, $sphonenumber){
        return $this->query("INSERT INTO tblstudentinfo (seqno, sid, sfname, slname, sdob, sgender, sphonenumber)
                                VALUES (NULL, '$sid', '$sfname', '$slname', '$sdob', '$sgender', '$sphonenumber')");
    }

    function get_students(){
        $sql = "SELECT * FROM tblstudentinfo";
        return $this->query($sql);
    }
}