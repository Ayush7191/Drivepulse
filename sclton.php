<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/dp.css">
    <style>
        /* Skeleton loader styles */
        .skeleton {
            display: flex;
            flex-direction: column;
            gap: 15px;
            padding: 20px;
        }

        .skeleton .skeleton-box {
            background-color: #e0e0e0;
            animation: pulse 1.5s infinite ease-in-out;
            border-radius: 5px;
        }

        .skeleton .skeleton-title {
            width: 50%;
            height: 25px;
        }

        .skeleton .skeleton-paragraph {
            width: 100%;
            height: 15px;
        }

        .skeleton .skeleton-button {
            width: 120px;
            height: 40px;
        }

        .skeleton .skeleton-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        .skeleton .skeleton-section {
            width: 100%;
            height: 200px;
        }

        .skeleton .skeleton-footer {
            width: 100%;
            height: 50px;
        }

        @keyframes pulse {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }

            100% {
                opacity: 1;
            }
        }

        /* Hide content initially */
        #actual-content {
            display: none;
        }

        #actual-content {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        #actual-content.visible {
            opacity: 1;
        }
    </style>
</head>

<body>
    <!-- Skeleton Loader -->
    <div id="skeleton-loader" class="skeleton">
        <!-- Navbar Skeleton -->
        <div class="skeleton-box skeleton-title"></div>

        <!-- Welcome Marquee Skeleton -->
        <div class="skeleton-box skeleton-paragraph"></div>

        <!-- Welcome Section Skeleton -->
        <div class="skeleton-box skeleton-title"></div>
        <div class="skeleton-box skeleton-paragraph"></div>
        <div class="skeleton-box skeleton-button"></div>

        <!-- Notes Section Skeleton -->
        <div class="skeleton-box skeleton-title"></div>
        <div class="skeleton-box skeleton-section"></div>

        <!-- Details Section Skeleton -->
        <div class="skeleton-box skeleton-section"></div>

        <!-- Rent Process Section Skeleton -->
        <div class="skeleton-box skeleton-title"></div>
        <div class="skeleton-box skeleton-section"></div>

        <!-- Footer Skeleton -->
        <div class="skeleton-box skeleton-footer"></div>
    </div>

    <!-- Actual Content -->
    <div id="actual-content">
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
            <button class="gs" onclick="goin()">Get Started</button>
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

                <div class