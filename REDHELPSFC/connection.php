<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "sfcredhelp";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("unsuccessful" . $conn->connect_error);
}
?>