<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$category_id = $_POST['category_id'];

$sql = "UPDATE items SET name='$name', description='$description', quantity=$quantity, price=$price, category_id=$category_id WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Item updated successfully";
} else {
    echo "Error updating item: " . $conn->error;
}

$conn->close();
?>
