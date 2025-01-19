<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DrivePulse</title>
    <link rel="stylesheet" href=".\assets\css\dp.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
  <style>
    .booking-container {
      max-width: 900px;
      margin: 0 auto;
      background-color: rgb(119, 205, 255, 0.1);
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: left;
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #e05a2d;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: white;
    }
    input, select, textarea {
      width: 97.5%;
      padding: 10px;
      margin: 5px 0 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    button {
      width: 100%;
      background: #009688;
      color: white;
      padding: 10px;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    button:hover {
      background: #00796b;
    }
  </style>
</head>
<body>
  <?php include 'navbar.php';?>
  <div class="booking-container">
    <h1>Book Your Ride Now</h1>
    <form action="process_booking.php" method="POST">
      <!-- Client Details Section -->
      <!-- <div class="form-group">
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="3" placeholder="Enter your address"></textarea>
      </div>
       -->
      <!-- Car Booking Options -->
      <!-- <div class="form-group">
        <label for="carType">Select Car Type:</label>
        <select id="carType" name="carType" required>
          <option value="">--Select--</option>
          <option value="sedan">Sedan</option>
          <option value="suv">SUV</option>
          <option value="hatchback">Hatchback</option>
          <option value="luxury">Luxury</option>
        </select>
      </div> -->
      <div class="form-group">
        <label for="pickupLocation">Pickup Location:</label>
        <input type="text" id="pickupLocation" name="pickupLocation" placeholder="Enter pickup location" required>
      </div>
      <div class="form-group">
        <label for="pickupDate">Pickup Date:</label>
        <input type="date" id="pickupDate" name="pickupDate" required>
      </div>
      <div class="form-group">
        <label for="dropoffDate">Drop-off Date:</label>
        <input type="date" id="dropoffDate" name="dropoffDate" required>
      </div>
      <div class="form-group">
        <label for="additionalRequests">Additional Requests (Optional):</label>
        <textarea id="additionalRequests" name="additionalRequests" rows="3" placeholder="Enter any additional requests"></textarea>
      </div>
      
      <!-- Submit Button -->
      <button type="submit">Submit Booking</button>
    </form>
  </div>
</body>
</html>
