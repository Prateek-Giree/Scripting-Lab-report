<?php
if (isset ($_REQUEST['id'])) {
    $sid = $_REQUEST['id'];
    $servername = "localhost:3306";
    $dbname = "lab";
    $dbuser = "root";
    $dbpass = "";
    $conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
    if ($conn->connect_errno > 0) {
        die ("Connection failed" . $conn->connect_error);
    }

    $sql = "delete from student where id=$sid";
    if ($conn->query($sql)) {
        echo "Student data deleted successfully";
    } else {
        echo "Data deletion failed";
    }
    $conn->close();
}
?>