<?php
$servername = "localhost";
$dbname = "smstest";
$dbusername = "root";
$dbpassword = "";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];

if ($conn->connect_errno != 0) {
    die("Error connecting to server: " . $conn->connect_errno);
}
$sql = "select * from user where email='" . $email . "' and password='" . $pass . "'";
if ($conn->query($sql)->num_rows > 0) {
    echo "success";
} else {
    echo "failed";
}
?>