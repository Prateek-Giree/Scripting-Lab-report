<!DOCTYPE html>
<html>

<head>
    <title>Factorial of a Number</title>
</head>

<body>

    <h2>Factorial of a Number</h2>

    <form action="#" method="post">
        Enter a number:
        <input type="number" name="n">
        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset ($_POST["n"])) {
        // Check if the input is numeric
        $n = intval($_POST["n"]); // Convert input to integer
        echo "<br>Factorial of $n: " . factorial($n);
    }

    // Factorial function definition
    function factorial($n)
    {
        if ($n <= 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
    ?>

</body>

</html>