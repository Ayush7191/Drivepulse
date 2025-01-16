<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Real-Time Location Tracker</title>
  <link rel="stylesheet" href="./assets/css/dp.css">
  <style>
    #map {
      height: 80vh;
      width: 100%;
    }
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    #info {
      padding: 10px;
      background: #f9f9f9;
      border-bottom: 1px solid #ccc;
    }
  </style>
</head>
<body>
<?php include 'navbar.php'; ?>
  <div id="info">
    <h2>Real-Time Car Location</h2>
    <p>Track your rented car in real-time below:</p>
  </div>
  <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1179.0355054347397!2d72.64716746384849!3d23.24661788871742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2b8ef77be5b1%3A0xa1b726c52c1def23!2s525%2C%20Gayatrinagar%20Society%2C%20Sector%2027%2C%20Gandhinagar%2C%20Gujarat%20382028!5e1!3m2!1sen!2sin!4v1736069230627!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
  <script src="script.js"></script>
  <!-- Include the Google Maps API -->
  <!-- <script async src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script> -->
  <script src="script.js"></script>
</body>
</html>
