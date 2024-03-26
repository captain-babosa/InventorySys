<?php
include 'db.php';

$name = $_POST['name'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$category_id = $_POST['category_id'];

$sql = "INSERT INTO items (name, description, quantity, price, category_id) VALUES ('$name', '$description', $quantity, $price, $category_id)";

if ($conn->query($sql) === TRUE) {
    echo "New item added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
