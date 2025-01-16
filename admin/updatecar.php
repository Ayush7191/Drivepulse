<?php
require_once 'connection.php';

// Initialize $id from GET or POST request
if (isset($_GET['id'])) {
    $id = $_GET['id']; // For loading the form
} elseif (isset($_POST['id'])) {
    $id = $_POST['id']; // For form submission
} else {
    die("Car ID is missing."); // Handle missing ID
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $carType = $_POST['FuelType'];
    $fuelType = $_POST['FuelType'];
    $transmission = $_POST['status'];
    $seat = $_POST['status'];
    $pricePerDay = $_POST['price_per_day'];
    $status = $_POST['status'];
    $image = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];

    // If a new image is uploaded
    if (!empty($image)) {
        $uploadDir = 'uploads/';
        $imagePath = $uploadDir . basename($image);
        move_uploaded_file($imageTmp, $imagePath);
    } else {
        // Retain the existing image
        $sql = "SELECT ImageURL FROM inventory WHERE id = $id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $imagePath = $row['ImageURL'];
    }

    // Update the database
    $sql = "UPDATE inventory 
            SET Name = '$name', Brand = '$brand', CarType = '$carType', FuelType = '$fuelType', 
                Transmission = '$transmission', Seat = '$seat', PricePerDay = '$pricePerDay', 
                Availability = '$status', ImageURL = '$imagePath' 
            WHERE id = $id";

    $data = $conn->query($sql);
}

// Fetch car details before the loop
$sql = "SELECT * FROM inventory WHERE id = $id";
$data = $conn->query($sql);

if (!$data) {
    die("Error fetching car details: " . $conn->error); // Handle SQL errors
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Car</title>
</head>
<body>
    <h1>Update Car</h1>
    <form method="POST" action="updatecar.php">
        <?php 
            while ($row = mysqli_fetch_assoc($data)) {
        ?>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="car_id">Car: <?php echo $row['Name']; ?></label>
        <br>
        <label for="car_type">Car Brand:<?php echo $row['Brand']; ?></label>
        <br>
        <label for="car_type">Car Type:</label>
        <select name="car_id" required>
                <option value="<?= $row['id'] ?>"><?= $row['CarType'] ?></option>
                <option value="">Sedan</option>
                <option value="">SUV</option>
                <option value="">Luxury</option>
        </select>
        <br>
        <label for="car_type">Fuel Type:</label>
        <select name="car_id" required>
                <option value="<?= $row['id'] ?>"><?= $row['FuelType'] ?></option>
        </select>
        <br>
        <label for="car_type">Transmission Type:</label>
        <select name="car_id" required>
                <option value="<?= $row['id'] ?>"><?= $row['Transmission'] ?></option>
        </select>
        <br>
        <label for="car_type">Seat:<?= $row['Seat'] ?></label>
        <br>
        <label for="price">Price per Day:</label>
        <input type="number" name="price" value="<?= $row['PricePerDay'] ?>">
        <br>
        <label for="price">Availability:<?= $row['Availability'] ?></label>
        <br>
        <?php } ?>

        <br>
        <button type="submit">Update Car</button>
        </form>