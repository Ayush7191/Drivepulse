<?php include 'connection.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $name = $_POST['Name'];
    $brand = $_POST['Brand'];
    $brand = $_POST['CarType'];
    $brand = $_POST['FuelType'];
    $brand = $_POST['Transmission'];
    $brand = $_POST['Seat'];
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
        $sql = "UPDATE inventory SET name='$name', brand='$brand', price_per_day='$price_per_day', status='$status'";
        if ($imagePath) $sql .= ", image='$imagePath'";
        $sql .= " WHERE id=$id";
    } else {
        // Insert new car
        $sql = "INSERT INTO inventory (name, brand, price_per_day, status, image)
                VALUES ('$name', '$brand', '$price_per_day', '$status', '$imagePath')";
    }

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["success" => true, "message" => "Car saved successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Error: " . $conn->error]);
    }
}

if ($_GET['action'] === 'fetch') {
    $result = $conn->query("SELECT * FROM inventory");
    $cars = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($cars);
}

if ($_GET['action'] === 'edit' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM cars WHERE id=$id");
    echo json_encode($result->fetch_assoc());
}

if ($_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM cars WHERE id=$id");
    echo json_encode(["success" => true, "message" => "Car deleted successfully"]);
}

$conn->close();
?>
