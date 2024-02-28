<!-- admin_panel.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your stylesheets and scripts -->
    <title>Admin Panel</title>
</head>
<body>
    <h2>Admin Panel</h2>
    
    <!-- Form for uploading images -->
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>

    <!-- Display existing images with delete option -->
    <h3>Existing Images:</h3>
    <ul>
        <?php include 'get_images.php'; ?>
    </ul>
</body>
</html>
