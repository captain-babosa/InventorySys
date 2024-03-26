<!DOCTYPE html>
<html>
<head>
    <title>Inventory</title>
</head>
<body>
    <h2>Inventory</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Category ID</th>
        </tr>
        <?php
        include 'db.php';

        $sql = "SELECT * FROM items";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>" . $row["quantity"] . "</td>";
                echo "<td>" . $row["price"] . "</td>";
                echo "<td>" . $row["category_id"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No items found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
