<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "wms";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection Fail" . $conn->connect_error);
}
