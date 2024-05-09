<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>

<body>
    <h2>Upload Image</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Upload</button>
    </form>
</body> 

</html>

<?php

$maxFileSize = 5 * 1024 * 1024;
$allowedFileTypes = array('jpg', 'jpeg', 'png');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset ($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        // Get file information
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $fileTmpName = $_FILES["image"]["tmp_name"]; //access the temporary name of file which is automatically created
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); //extracts the file extension

        if ($fileSize > $maxFileSize) {
            echo "Error: File size exceeds the maximum limit (5MB).";
        } elseif (!in_array($fileType, $allowedFileTypes)) {
            echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
        } else {
            // Generate a unique name for the file to prevent overwriting
            $uniqueFileName = uniqid() . "." . $fileType;

            // Move the file to the desired directory
            $uploadPath = "uploads/" . $uniqueFileName;
            if (move_uploaded_file($fileTmpName, $uploadPath)) {
                echo "File uploaded successfully.";
            } else {
                echo "Error uploading file.";
            }
        }
    } else {
        echo "Error: " . $_FILES["image"]["error"];
    }
}
?>