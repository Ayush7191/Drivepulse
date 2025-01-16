<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="website icon" type="png" href="./assets/img/logo-3.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/dp.css">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- welcome -->

    <div class="welcome-mrq">
        <marquee>Welcome to <span>DrivePulse!</span> We are thrilled to offer you a seamless car rental experience
            with a wide variety of vehicles to choose from.</marquee>
    </div>
    <!-- welcome -->
    <div class="welcome">
        <h2 class="h2">Welcome to DrivePulse</h2>
        <p class="p">Discover Effortless Car Rentals with DrivePulse!</p>
        <button class="gs" onclick="goLogin()">Get Started</button>
        <span></span>
    </div>




    <!-- notes-start -->
    <section class="notes">
        <h9>How <p>DrivePulse</p> Works</h9>
        <div class="main-container">
            <div class="box">
                <i class="ri-login-box-line"></i>
                <strong>SIGN UP</strong>
                <p>upload documents</p>
            </div>

            <div class="box">
                <i class="ri-car-line"></i>
                <strong>BOOK NOW</strong>
                <p>Search for and book a car on our site!</p>
            </div>

            <div class="box">
                <i class="ri-notification-badge-line"></i>
                <strong>REMINDER</strong>
                <p>We SMS your car details 20 minutes before pickup</p>
            </div>

            <div class="box">
                <i class="ri-steering-fill"></i>
                <strong>JUST DRIVE</strong>
                <p>Enjoy your ride</p>
            </div>

    </section>
    <!-- notes-end -->


    <!-- anything-start -->


    <div class="details">
        <div class="d1">
            <p>25,000+</p>
            <h9>Verified Cars</h9>
        </div>
        <div class="d1">
            <p>20,000+</p>
            <h9> Trusted Hosts</h9>
        </div>
        <div class="d1">
            <p>2 Billion+</p>
            <h9>KMs Driven</p>
            </h9>
        </div>
        <div class="d1">
            <p>38+ CIties </p>
            <h9>And Counting...</p>
            </h9>
        </div>
        <div class="d1">
            <p>20+ Airports</p>
            <h9>Live On DrivePulse platform</p>
            </h9>
        </div>
    </div>


    <!-- anything-end -->

    <!-- other-details-star -->
    <section class="rent-process">
        <h2>How to Rent a Car in Ahmedabad with DrivePulse?</h2>
        <div class="steps-container">
            <div class="step">
                <i class="ri-smartphone-line"></i>
                <p>Log onto <a href="#" target="_blank">drivepulse.com</a> or use the app</p>
            </div>
            <hr>
            <div class="step">
                <i class="ri-calendar-event-line"></i>
                <p>Select city, date and time</p>
            </div>
            <hr>
            <div class="step">
                <i class="ri-bank-card-line"></i>
                <p>Pick a car of your choice at 0 security deposit</p>
            </div>
            <hr>
            <div class="step">
                <i class="ri-car-line"></i>
                <p>DrivePulse with the freedom of unlimited KMs</p>
            </div>
        </div>
    </section>
    <!-- other-details-end -->

    <!-- footer-start -->
    <!-- <footer>
        
        <div class="footer">
            <p>&copy; 2024 DrivePulse. All rights reserved.</p>
            <p>
                <a href=".\admin\policies.php">Privacy Policy</a> |
                <a href=".\admin\terms&conditions.php">Terms & Conditions</a>
            </p>
        </div>
    </footer> -->
    <!-- footer-end -->
    </div>
    <script src="script.js"></script>
    <script>
        function goLogin() {
            window.location.href = "signup.php"; // Replace with your file or URL
        }      
    </script>

</body>

</html>