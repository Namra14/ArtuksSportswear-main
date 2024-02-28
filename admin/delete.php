<!-- delete.php -->
<?php
// Handle image deletion
if(isset($_GET['file'])) {
    $file = urldecode($_GET['file']);
    if(file_exists($file)) {
        unlink($file);
        // Perform database deletion here if necessary
        header("Location: admin_panel.html");
        exit();
    } else {
        echo "File not found.";
    }
}
?>
