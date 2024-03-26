<!DOCTYPE html>
<html>
<head>
    <title>Add New Item</title>
</head>
<body>
    <h2>Add New Item</h2>
    <form action="add_item.php" method="post">
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Description:</label><br>
        <textarea name="description"></textarea><br>
        <label>Quantity:</label><br>
        <input type="number" name="quantity" value="1" min="1" required><br>
        <label>Price:</label><br>
        <input type="text" name="price" required><br>
        <label>Category ID:</label><br>
        <input type="number" name="category_id" required><br>
        <input type="submit" value="Add Item">
    </form>
</body>
</html>
