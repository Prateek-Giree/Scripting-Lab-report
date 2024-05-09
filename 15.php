<!DOCTYPE html>
<html lang="en">

<body>
    <form action="#" method="post">
        <input type="text" name="fullname" placeholder="Full Name" required> <br><br>
        <input name="email" type="text" placeholder="Email" required><br><br>
        <input name="contact" type="text" placeholder="Contact" required><br><br>
        <input type="submit" value="Register">
    </form>
</body>

</html>
<?php
if (isset ($_POST['fullname'])) {
    $errors = array();

    $fields = array(
        "fullname" => "Full Name",
        "email" => "Email",
        "contact" => "Contact number",
    );
    foreach ($fields as $field => $label) {
        if ($_POST[$field] == '') {
            $errors[$field] = "{$label} is required";
        } elseif ($field == "fullname" && !preg_match("/^[a-zA-Z ]{4,}$/", $_POST[$field])) {
            $errors[$field] = "Name should only contain alphabet and be at least 4 characters long";
        } elseif ($field == "email" && !filter_var($_POST[$field], FILTER_VALIDATE_EMAIL)) {
            $errors[$field] = "{$_POST[$field]} is invalid email format";
        } elseif ($field == "contact" && !preg_match("/^(98|97)\d{8}$/", $_POST[$field])) {
            $errors[$field] = "{$_POST[$field]} is invalid contact number";
        }
    }

    if (!empty ($errors)) {
        foreach ($errors as $error) {
            echo "<p>{$error}<p>";
        }
    }
}
?>