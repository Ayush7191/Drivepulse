<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/dp.css">
    
</head>

<body>

    <?php include 'navbar.php'; ?>


    <!-- choose-details-start -->
    <div class="booking-container">
        <h1>Start Your Journey</h1>
        <form class="booking-form">
            <div class="form-group">
                <label for="city">City</label>
                <select id="city" name="city">
                    <option value="">Select City</option>
                    <option value="city1">Ahmedabad</option>
                    <option value="city2">Gandhinagar</option>
                    <option value="city3">Vadodara</option>
                    <option value="city3">Surat</option>
                    <option value="city3">Porbandar</option>
                    <option value="city3">Mehsana</option>
                    <option value="city3">Anand</option>
                    <option value="city3">Jamnagar</option>
                    <option value="city3">Bhavnagar</option>
                    <option value="city3">Bharuch</option>
                    <option value="city3">Navsari</option>
                    <option value="city3">Nadiad</option>
                    <option value="city3">Navi Mumbai</option>
                    <option value="city3">Gurgaon</option>
                    <option value="city3">Chandigarh</option>
                    <option value="city3"> Mysore</option>
                    <option value="city3">Dehradun</option>
                    <option value="city3">Surat</option>
                </select>
            </div>

            <div class="form-group">
                <label for="start-date">Start Date</label>
                <input type="date" id="start-date" name="start-date" value="2024-10-10">
            </div>

            <div class="form-group">
                <label for="start-time">Start Time</label>
                <input type="time" id="start-time" name="start-time" value="18:00">
            </div>

            <div class="form-group">
                <label for="end-date">End Date</label>
                <input type="date" id="end-date" name="end-date" value="2024-11-10">
            </div>

            <div class="form-group">
                <label for="end-time">End Time</label>
                <input type="time" id="end-time" name="end-time" value="04:00">
            </div>

            <button type="button" class="btn-book" onclick="goin()">Search</button>
        </form>
    </div>
    <!-- choose-details-end -->
    <script src="script.js"></script>
</body>

</html>