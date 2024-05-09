 <?php
// File path
$filename = "example.txt";
// Create a file and write content to it
$file = fopen($filename, "w");
if ($file) {
    $content = "Hello, world!<br>This is a test file.";
    fwrite($file, $content);
    fclose($file);
    echo "<br>File created and content written successfully";
} else {
    echo "Failed to create the file";
}
// Read content from the file 
$file = fopen($filename, "r");
if ($file) {
    echo "<br>Content:<br>";
    while (!feof($file)) {
        echo fgets($file);
    }
    fclose($file);
} else {
    echo "Failed to open the file for reading";

}
