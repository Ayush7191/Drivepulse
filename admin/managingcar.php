<?php
require_once 'connection.php';
// Fetch all cars
$query = "SELECT * FROM fleet";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Cars</title>
    <link rel="stylesheet" href=".\assets\css\dp.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="content">
        <h1>Manage Cars</h1>
        <a href="add_car.php" class="btn">Add New Car</a>
        <table>
            <thead>
                <tr>
                    <th>Car Name</th>
                    <th>Type</th>
                    <th>Fuel</th>
                    <th>Price/Day</th>
                    <th>Availability</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                    <td><?php echo $row['fuel_type']; ?></td>
                    <td><?php echo $row['price_per_day']; ?></td>
                    <td><?php echo $row['availability'] ? 'Available' : 'Booked'; ?></td>
                    <td>
                        <a href="edit_car.php?id=<?php echo $row['car_id']; ?>">Edit</a>
                        <a href="delete_car.php?id=<?php echo $row['car_id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="script.js"></script>
</body>
</html>
