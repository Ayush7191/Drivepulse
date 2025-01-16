<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DrivePulse</title>
    <link rel="stylesheet" href=".\assets\css\dp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playwrite+AU+SA:wght@100..400&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
<?php include 'navbar.php'; ?>

    <div class="profile-section">
        <div class="profile-photo">
            <img src=".\assets\img\profile.png" alt="">
            <a href="#"><i class="ri-edit-line"></i>&nbsp;Change</a>
            <a href="#"><i class="ri-delete-bin-6-line"></i>&nbsp;Remove</a>
        </div>
        <div class="profile-details">
            <div class="profile-group">
                <label for="profile-name">Name:</label>
                <span>ayush patel</span>
            </div>
            <div class="profile-group">
                <label for="profile-phone">Phone:</label>
                <span>9909581373</span>
            </div>
            <div class="profile-group">
                <label for="profile-email">Email:</label>
                <span>ayushchhodavadiya9900@gmail.com</span>
            </div>
            <div class="profile-group">
                <label for="profile-dob">DOB:</label>
                <span>21/04/2004</span>
            </div>
            <div class="profile-group">
                <label for="profile-address">Address:</label>
                <span>Sector 27, Gandhinagar</span>
            </div>
            <div class="profile-group">
                <label for="profile-kyc">KYC Status:</label>
                <span>Completed</span>
            </div>
            <div class="profile-btn">
                <button>Save Changes</button>
            </div>
            
        </div>
    </div>
    <script src="script.js">
        function gotologin() {
            window.location.href = "login.php";
        }
    </script>
</body>

</html>