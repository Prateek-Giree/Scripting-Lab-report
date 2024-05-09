<!DOCTYPE html>
<html>

<head>
    <title>Multiplication Table of 5</title>
</head>

<body>


    <!-- Using for loop -->
    <h3>Using for loop:</h3>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        $result = 5 * $i;
        echo "5 x $i = $result<br>";
    }
    ?>

    <!-- Using while loop -->
    <h3>Using while loop:</h3>
    <?php
    $j = 1;
    while ($j <= 10) {
        $result = 5 * $j;
        echo "5 x $j = $result<br>";
        $j++;
    }
    ?>

    <!-- Using do-while loop -->
    <h3>Using do-while loop:</h3>
    <?php
    $k = 1;
    do {
        $result = 5 * $k;
        echo "5 x $k = $result<br>";
        $k++;
    } while ($k <= 10);
    ?>

</body>

</html>