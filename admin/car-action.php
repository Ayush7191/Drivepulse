<?php include 'connection.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $name = $_POST['Name'];
    $brand = $_POST['Brand'];
    $cartype = $_POST['CarType'];
    $fueltype = $_POST['FuelType'];
    $transmission = $_POST['Transmission'];
    $seat = $_POST['Seat'];
    $price_per_day = $_POST['PricePerDay'];
    $status = $_POST['Availability'];
    $imagePath = '';

    // Handle image upload
    if (!empty($_FILES['image']['name'])) {
        $imagePath = 'uploads/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $imagePath);
    }

    if ($id) {
        // Update car
        $sql = "UPDATE `inventory` SET `Name` = '$name', `Brand` = '$brand', `CarType` = '$cartypr', `FuelType` = '$fueltype', `Transmission` = '$transmission', `PricePerDay` = '$price_per_day', `Availability` = '$status', `ImageURL` =";
        if ($imagePath) $sql .= ", image='$imagePath'";
        $sql .= " WHERE id=$id";
    } else {
        // Insert new car
        $sql = "INSERT INTO `inventory` (`id`, `Name`, `Brand`, `CarType`, `FuelType`, `Transmission`, `Seat`, `PricePerDay`, `Availability`, `ImageURL`) VALUES (NULL, '$name', '$brand', '$cartype', '$fueltype', '$transmission', '$seat', '$price_per_day', '$status','$imagePath'";
    }

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "Car saved successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: " . $conn->error]);
    }
}

if (isset($_GET['action']) === 'fetch') {
    $result = $conn->query("SELECT * FROM inventory");
    $cars = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($cars);
}

if (isset($_GET['action']) === 'edit' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM inventory WHERE id=$id");
    echo json_encode($result->fetch_assoc());
}

if (isset($_GET['action']) === 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM inventory WHERE id=$id");
    echo json_encode(["success" => true, "message" => "Car deleted successfully"]);
}

$conn->close();
?>
