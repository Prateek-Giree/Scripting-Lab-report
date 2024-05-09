<?php
$servername = "localhost:3306";
$dbname = "lab";
$dbuser = "root";
$dbpass = "";
$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
if ($conn->connect_errno > 0) {
    die ("Connection failed" . $conn->connect_error);
}
$sql = 'INSERT INTO student(name,email,address)VALUES("Pratik","prateek7@gmail.com","Parsa")';
$result = $conn->query($sql);
if ($result) {
    echo "Data inserted successfully";
} else {
    echo "Data insertion failed";
}
$sql1 = "Select * from student";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Action</th>
    </tr>";
    while ($row = $result1->fetch_assoc()) {
        echo "
        <tr>
        <td>" . $row['name'] . "</td>
        <td>" . $row['email'] . "</td>
        <td>" . $row['address'] . "</td>
        <td>
        <a href='edit.php?id=" . $row['id'] . "'>Edit</a>||
        <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "Empty database";
}
$conn->close();
?>