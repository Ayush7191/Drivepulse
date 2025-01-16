<!-- PHP Code -->
<?php
require_once 'connection.php';
$sql = "SELECT * from inventory where availability='Available'";
$fleet = $conn->query($sql);
?>
<!-- HTML Code -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DrivePulse Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/dp.css">
</head>

<body>

    <?php include 'navbar.php'; ?>
    <div class="filter-panel">
        <h2>Filters</h2>
        <div class="filter-group">
            <label for="carType">Car Type</label>
            <select id="carType" name="carType">
                <option value="all">All</option>
                <option value="suv">SUV</option>
                <option value="sedan">Sedan</option>
                <option value="hatchback">Hatchback</option>
                <option value="luxury">Luxury</option>
            </select>
        </div>

        <div class="filter-group">
            <label for="transmission">Transmission</label>
            <select id="transmission" name="transmission">
                <option value="all">All</option>
                <option value="automatic">Automatic</option>
                <option value="manual">Manual</option>
            </select>
        </div>

        <div class="filter-group">
            <label for="fuelType">Fuel Type</label>
            <select id="fuelType" name="fuelType">
                <option value="all">All</option>
                <option value="petrol">Petrol</option>
                <option value="diesel">Diesel</option>
                <option value="electric">Electric</option>
                <option value="hybrid">Hybrid</option>
            </select>
        </div>
    </div>
    <!-- Main inventory -->
    <div class="inventory">
        <!-- PHP code to fetch data from database -->
        <div class="car-list">
            <?php
            // Fetch each row of car data
            while ($row = mysqli_fetch_assoc($fleet)) {
                // Fetch the image BLOB
                $image = $row['ImageURL'];
                $imageBase64 = base64_encode($image); // Convert to Base64
                ?>
                <!-- Car Card -->
                <div class="carcard" onclick="openPopup()">
                    <!-- Car Image -->
                    <div class="car-image"
                        style="background-image: url('data:image/jpeg;base64,<?php echo $imageBase64; ?>')">
                    </div>

                    <!-- Car Details -->
                    <div class="car-details">
                        <div class="car-name"><?php echo htmlspecialchars($row["Name"]); ?></div>
                        <div class="car-price">
                            <?php echo "₹" . htmlspecialchars($row["PricePerDay"]) . "/Per Day"; ?>
                        </div>
                        <div class="car-info">
                        <i class="ri-gas-station-fill"></i> <?php echo htmlspecialchars($row["FuelType"]); ?>&nbsp; | &nbsp;
                        <i class="ri-team-fill"></i> <?php echo htmlspecialchars($row["Seat"]); ?> &nbsp; | &nbsp;
                        <i class="ri-settings-5-line"></i></i> <?php echo htmlspecialchars($row["Transmission"]); ?>&nbsp; | &nbsp;
                        <i class="ri-roadster-line"></i> <?php echo htmlspecialchars($row["CarType"]); ?>
                            <!-- <button onclick="openPopup()">Quick View</button> -->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="script.js"></script>
    <script>
        function openPopup() {
            window.location.href = "viewcar.php";
        }
        document.addEventListener("DOMContentLoaded", () => {
            // Filter elements
            const carTypeSelect = document.getElementById("carType");
            const transmissionSelect = document.getElementById("transmission");
            const fuelTypeSelect = document.getElementById("fuelType");
            const carList = document.querySelector(".car-list");

            // Event listeners for each filter
            carTypeSelect.addEventListener("change", applyFilters);
            transmissionSelect.addEventListener("change", applyFilters);
            fuelTypeSelect.addEventListener("change", applyFilters);

            // Function to apply filters
            function applyFilters() {
                const selectedCarType = carTypeSelect.value.toLowerCase();
                const selectedTransmission = transmissionSelect.value.toLowerCase();
                const selectedFuelType = fuelTypeSelect.value.toLowerCase();

                // Get all car cards
                const carCards = document.querySelectorAll(".carcard");

                carCards.forEach((carCard) => {
                    const carType = carCard.querySelector(".car-info").textContent.toLowerCase();
                    const transmission = carCard.querySelector(".car-info").textContent.toLowerCase();
                    const fuelType = carCard.querySelector(".car-info").textContent.toLowerCase();

                    // Check if the car matches the filters
                    const matchesCarType = selectedCarType === "all" || carType.includes(selectedCarType);
                    const matchesTransmission = selectedTransmission === "all" || transmission.includes(selectedTransmission);
                    const matchesFuelType = selectedFuelType === "all" || fuelType.includes(selectedFuelType);

                    // Show or hide the car based on filter matches
                    if (matchesCarType && matchesTransmission && matchesFuelType) {
                        carCard.style.display = "block";
                    } else {
                        carCard.style.display = "none";
                    }
                });
            }
        });

    </script>
</body>

</html>