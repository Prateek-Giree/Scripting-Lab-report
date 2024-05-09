<!DOCTYPE html>
<html lang="en">

<body>
    <form action="" method="get">
        Name:
        <input type="text" name="name" id="">
        <input type="submit" name="setcookie" value="Create cookie">
        <input type="submit" name="removecookie" value="Delete cookie">
    </form>
</body>

</html>
<?php
if (isset ($_GET['setcookie'])) {
    $user = $_GET['name'];
    setcookie("user", $user, time() + 60 * 60);
    $name = null;
    if (isset ($_COOKIE['user'])) {
        $name = $_COOKIE['user'];
        echo "Cookie created. cookie value= " . $name;
    }
}
if (isset ($_GET['removecookie'])) {
    if (isset ($_COOKIE['user'])) {
        setcookie('user', '', time() - 60 * 60);
        echo "Cookie removed";
    } else {
        echo "No cookie ";
    }
}

?>