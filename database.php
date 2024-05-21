<!-- Display data from database -->
<html>

<head>
    <title>Database connectivity</title>
</head>

<body>
    <?php

    $servername = "localhost";
    $dbname = "smstest";
    $dbusername = "root";
    $dbpassword = "";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_errno != 0) {
        die("Error connecting to server: " . $conn->connect_errno);
    }
    $sql = "select * from student";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo " <table border='2'>
                        <tr> 
                            <th>StudentName</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Date of birth</th>
                            <th>Class</th>
                        </tr>";

        // fetch_assoc is a function which fetch only one row at a time 
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['address'] . "</td>
                    <td>" . $row['contact'] . "</td>
                    <td>" . $row['dob'] . "</td>
                    <td>" . $row['class'] . "</td>
                </tr>";
        }
        echo " </table>";
    } else {
        echo "Empty Database!";
    }
    $conn->close();


    ?>
</body>

</html>