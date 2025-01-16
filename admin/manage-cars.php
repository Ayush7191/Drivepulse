<?php require_once 'connection.php'; ?>
<?php
$sql = "SELECT * from inventory";
$data = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management</title>
    <link rel="website icon" type="png" href="./assets/img/logo-3.png">
    <link rel="stylesheet" href="..\admin\css\admin.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        .car-manage-cont {
            max-width: 900px;
            margin: auto;
            padding: 10px;
            line-height: 3rem;
            left: 4rem;
            position: relative;
            color: white;
        }

        table {
            width: 72vw;
            border-collapse: collapse;
            margin-bottom: 20px;
            overflow-x: scroll;
            background-color: transparent;
            color: white;
        }

        table th,
        table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: rgba(42, 45, 67, 0.55);
        }

        .car-mng {
            margin-bottom: 20px;
        }

        .car-mng input,
        .car-mng select,
        .car-mng button {
            padding: 8px;
            margin: 5px 0;
            width: 100%;
        }

        .car-mng button {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }

        .car-mng button:hover {
            background-color: #218838;
        }

        .img-preview {
            max-width: 100px;
            max-height: 100px;
            margin-bottom: 10px;
        }
        #action-update{
            color:rgb(187, 148, 245);
        }
        #action-delete{
            color:rgb(255, 0, 0);
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="car-manage-cont">
        <h1>Inventory Management</h1>

        <!-- Insert/Update Form -->
        <div class="car-mng">
            <form id="car-form" enctype="multipart/form-data">
                <input type="hidden" name="id" id="car-id">
                <input type="text" name="name" id="car-name" placeholder="Car Name" required>
                <input type="text" name="brand" id="car-brand" placeholder="Brand" required>
                <select name="FuelType" id="car-cartype">
                    <option value="SUV">SUV</option>
                    <option value="Sedan">Sedan</option>
                    <option value="Hatchback">Hatchback</option>
                    <option value="Luxury">Luxury</option>
                </select>
                <select name="FuelType" id="car-fueltype">
                    <option value="Petrol">Petrol</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Electric">Elecrtic</option>
                    <option value="Hybrid">Hybrid</option>
                </select>
                <select name="status" id="car-transmission">
                    <option value="Automatic">Automatic</option>
                    <option value="manual">Manual</option>
                </select>
                <select name="status" id="car-seat">
                    <option value="5">5</option>
                    <option value="7">7</option>
                </select>
                <input type="number" step="0.01" name="price_per_day" id="car-price" placeholder="Price per Day"
                    required>
                <select name="status" id="car-status">
                    <option value="available">Available</option>
                    <option value="rented">Rented</option>
                </select>
                <input type="file" name="image" id="car-image" accept="image/*">
                <img id="img-preview" class="img-preview" alt="Img-Preview">
                <button type="button" onclick="saveCar()">Save</button>
            </form>
        </div>
        <!-- Car Table -->
        <h3>Cars List</h3>
        <table id="car-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>CarType</th>
                    <th>FuelType</th>
                    <th>Transmission</th>
                    <th>Seat</th>
                    <!-- <th>PricePerDay</th> -->
                    <th>Available</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            <?php while ($row = mysqli_fetch_assoc($data)) {
    $imagePath = $row['ImageURL']; // Assuming ImageURL contains the file path
    
    $imageBase64 = base64_encode($imagePath); // Encode the image data to Base64
?>
    <tr>
        <td><?php echo htmlspecialchars($row["Name"]); ?></td>
        <td><?php echo htmlspecialchars($row["Brand"]); ?></td>
        <td><?php echo htmlspecialchars($row["CarType"]); ?></td>
        <td><?php echo htmlspecialchars($row["FuelType"]); ?></td>
        <td><?php echo htmlspecialchars($row["Transmission"]); ?></td>
        <td><?php echo htmlspecialchars($row["Seat"]); ?></td>
        <!-- <td><?php //echo htmlspecialchars($row["PricePerDay"]); ?></td> -->
        <td><?php echo htmlspecialchars($row["Availability"]); ?></td>
        <td><img src="data:image/jpeg;base64,<?php echo $imageBase64; ?>" alt="Car Image" width="50"></td>
        <td><a id="action-update" href="updatecar.php?id=<?php echo $row['id']; ?>" name="Update">Update</a> |
            <a id="action-delete" href="deletecar.php?id=<?php echo $row['id']; ?>" name="Delete">Delete</a></td>
    </tr>
<?php } ?>
            </tbody>
        </table>
    </div>

    <script src="script.js"></script>
</body>

</html>