    
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DrivePulse Inventory</title>
  <link rel="stylesheet" href="./assets/css/dp.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
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
  <!-- Popup Menu -->
  <div id="popup" class="popup">
    <div class="popup-content">
      <span class="close-btn" onclick="closePopup()">&times;</span>

        <!-- Image Section -->
        <div class="popup-left">
          <div class="main-image">
            <img src=".\admin\img\cars\bmw\3 series\3 series.jpeg" alt="Main Car Image">
          </div>
          <div class="thumbnail-images">
            <img src=".\admin\img\cars\bmw\3 series\int1.jpeg" alt="Thumbnail 1" onclick="changeImage(this)">
            <img src=".\admin\img\cars\bmw\3 series\int2.jpeg" alt="Thumbnail 2" onclick="changeImage(this)">
            <img src=".\admin\img\cars\bmw\3 series\ex1.jpeg" alt="Thumbnail 2" onclick="changeImage(this)">
          </div>
        </div>

        <!-- Details Section -->
        <div class="popup-right"> 
          <h3>3 Series</h3>
          <p><span class="rating">4.3 ★★★★★</span> (4 reviews)</p>

          <!-- Size Selection -->
          <div class="sizes">
            <button>₹21000.00</button>
            <button>Automatic</button>
            <button>Petrol</button>
            <button>5</button>
          </div>

          <!-- Action Buttons -->
          <div class="actions">
            <button class="book-now">Book Now</button>
            <button class="wishlist">❤ Wishlist</button>
            <button class="compare">Compare</button>
          </div>

          <!-- Additional Details -->
          <div class="add-detail">
            <p><strong>Brand:&nbsp;</strong>BMW</p>
            <p><strong>Availability:&nbsp;</strong>Available</p>
            <p><strong>Transmission:&nbsp;</strong>Automatic</p>
            <p><strong>Seats:&nbsp;</strong>5</p>
            <p>Features <i class="ri-arrow-down-s-line"></i></p>
          </div>
        <div class="features">
          <p><i class="ri-check-double-line"></i>&nbsp;Spare Tyre</p>
          <p><i class="ri-check-double-line"></i>&nbsp;Toolkit</p>
          <p><i class="ri-check-double-line"></i>&nbsp;Reverse Camera</p>
          <p><i class="ri-check-double-line"></i>&nbsp;Child Seat</p>
          <p><i class="ri-check-double-line"></i>&nbsp;Pet Friendly</p>
          <p><i class="ri-check-double-line"></i>&nbsp;Anti-lock Bracking System</p>
          <p><i class="ri-check-double-line"></i>&nbsp;Airbags</p>
          <p><i class="ri-check-double-line"></i>&nbsp;Power Windows</p>
        </div>
      </div>
    </div>
  </div>

  <script src="script.js"></script>
  <script>
    function closePopup() {
      window.location.href = "inventory.php";
    }
    const mainImage = document.getElementById('mainImage');
    mainImage.addEventListener('click', () => {
      mainImage.classList.toggle('zoomed');
    });

    // Update main image when a thumbnail is clicked
    function updateMainImage(thumbnail) {
      mainImage.src = thumbnail.src;
    }
  </script>
</body>

</html>