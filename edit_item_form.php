<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h2>Edit Item</h2>
    <form action="edit_item.php" method="post">
        <label>ID:</label><br>
        <input type="number" name="id" required><br>
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Description:</label><br>
        <textarea name="description"></textarea><br>
        <label>Quantity:</label><br>
        <input type="number" name="quantity" min="1" required><br>
        <label>Price:</label><br>
        <input type="text" name="price" required><br>
        <label>Category ID:</label><br>
        <input type="number" name="category_id" required><br>
        <input type="submit" value="Update Item">
    </form>
</body>
</html>
