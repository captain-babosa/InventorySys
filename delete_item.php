<?php
include 'db.php';

$id = $_POST['id'];

$sql = "DELETE FROM items WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Item deleted successfully";
} else {
    echo "Error deleting item: " . $conn->error;
}

$conn->close();
?>
