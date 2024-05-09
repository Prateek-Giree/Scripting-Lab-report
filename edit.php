<?php
$servername = "localhost:3306";
$dbname = "lab";
$dbuser = "root";
$dbpass = "";
$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
if ($conn->connect_errno > 0) {
    die ("Connection failed" . $conn->connect_error);
}  

if (isset ($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "select * from student where id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        ?>
        <html>

        <head></head>

        <body>
            <form action="#" method="post">
                <input type="hidden" name="sid" value="<?php echo $row['id']; ?>" />
                <label>Student Name</label>
                <input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter name" /><br><br>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Enter phone number"><br><br>
                <label>Addres</label>
                <textarea name="address"><?php echo $row['address']; ?></textarea><br><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </body>

        </html>
        <?php
    }
}
if (isset ($_POST['sid'])) {
    $sid = $_POST['sid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $sql1 = "UPDATE student SET name='$name',email='$email',address='$address' where id=$sid";
    if ($conn->query($sql1)) {
        echo "Updated successfully";
    } else {
        echo "Failed to update";
    }
}
$conn->close();
?>