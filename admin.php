<?php
include 'database.php';

// جلب الطلبات
$sql = "SELECT * FROM customizations";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Customization Orders</h1>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Color</th>
            <th>Style</th>
            <th>Custom Text</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['product_name']; ?></td>
                <td><?php echo $row['color']; ?></td>
                <td><?php echo $row['style']; ?></td>
                <td><?php echo $row['custom_text']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
