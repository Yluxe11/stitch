<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $color = $_POST['color'];
    $style = $_POST['style'];
    $custom_text = $_POST['custom_text'];

    $sql = "INSERT INTO customizations (product_name, color, style, custom_text) 
            VALUES ('$product_name', '$color', '$style', '$custom_text')";

    if ($conn->query($sql) === TRUE) {
        echo "Customization saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
