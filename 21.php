<!DOCTYPE html>
<html>
<head>
    <title>File Upload and Download</title>
</head>
<body>
    <h1>File Upload and Download</h1>

    <!-- File Upload Form -->
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <input type="submit" name="upload" value="Upload">
    </form>

    <?php
    // File Upload Logic
    if (isset($_POST['upload'])) {
        $targetDir = "uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // Check if file already exists
        if (file_exists($targetFilePath)) {
            echo "File already exists.";
        } else {
            // Check if the file is a valid upload
            if (is_uploaded_file($_FILES["file"]["tmp_name"])) {
                // Move the uploaded file to the specified directory
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                    echo "File uploaded successfully.";
                } else {
                    echo "Error uploading the file.";
                }
            } else {
                echo "Invalid file upload.";
            }
        }
    }
    ?>

    <hr>

    <!-- File Download Links -->
    <h2>Uploaded Files</h2>
    <ul>
        <?php
        // Get the list of uploaded files
        $files = glob("uploads/*");

        foreach ($files as $file) {
            $fileName = basename($file);
            echo "<li><a href='download.php?file=$file'>$fileName</a></li>";
        }
        ?>
    </ul>
</body>
</html>
