<?php
// Create a multi-dimensional array
$multiArray = array(
    array(1, 2, 3),
    array('a', 'b', 'c'),
);
// Display the values using foreach loop
echo "<h2>Multi-Dimensional Array Values</h2>";
echo "<ul>";
foreach ($multiArray as $subArray) {
    foreach ($subArray as $value) {
        echo $value . "<br>";
    }
}
echo "</ul>";
