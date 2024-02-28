<!-- get_images.php -->
<?php
// Fetch and display existing images
$directory = "uploads/";
$images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
foreach($images as $image) {
    echo "<li><img src='" . $image . "' height='100'><br><a href='delete.php?file=" . urlencode($image) . "'>Delete</a></li>";
}
?>
