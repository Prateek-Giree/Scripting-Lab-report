<!DOCTYPE html>
<html>

<head>
    <title>Page Visit Counter</title>
</head>

<body>
    <div class="container">
        <h2>Page Visit Counter</h2>
        <?php
        // Start or resume the session
        session_start();

        // Check if the visit count session variable exists
        if (!isset ($_SESSION['visit_count'])) {
            $_SESSION['visit_count'] = 1;
        } else {
            // Increment the visit count
            $_SESSION['visit_count']++;
        }

        // Display the visit count
        echo "<p>You have visited this page " . $_SESSION['visit_count'] . " time(s).</p>";
        ?>
    </div>
</body>

</html>