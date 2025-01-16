<!-- PHP Start -->

<?php
// database connection
require_once 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullName = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mobile'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $profile_document = $_POST['profile_document'];
    $mobile_verified = $_POST['mobile_verified'];
   
        // SQL to insert data into the table
        // $sql = "INSERT INTO users  VALUES (Null, '$fullName', '$email', '$phone', '$password')";
        $sql = "INSERT INTO `users`  VALUES (NULL, '$fullName', '$email', '$phone', '$password', '$gender', '$city', '$profile_document', '$mobile_verified')";

        if ($conn->query($sql) === TRUE) {
            header("location:index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

// Close connection
$conn->close();
?>


<!-- PHP End -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive Pulse</title>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@400..800&family=Gupter:wght@400;500;700&display=swap"
        rel="stylesheet">
    <!-- icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- css -->
    <link rel="stylesheet" href="./assets/css/dp.css">
</head>

<body class="lgn-bd">
<?php include 'navbar.php'; ?>

        <!-- login-form-start -->
        <div class="container">

            <!-- Registration Form -->
            <div class="form-container registration">
                <h2>Register</h2>
                <form action="" method="POST" onsubmit="return validate()">
                <div class="wave-group">
                    <input required="" type="text" name="name" class="input">
                    <span class="bar"></span>
                    <label class="label">
                        <span class="label-char" style="--index: 0">N</span>
                        <span class="label-char" style="--index: 1">a</span>
                        <span class="label-char" style="--index: 2">m</span>
                        <span class="label-char" style="--index: 3">e</span>
                    </label>
                </div>
                <div class="wave-group">
                    <input required="" type="email" name="email" class="input">
                    <span class="bar"></span>
                    <label class="label">
                        <span class="label-char" style="--index: 0">E</span>
                        <span class="label-char" style="--index: 1">m</span>
                        <span class="label-char" style="--index: 2">a</span>
                        <span class="label-char" style="--index: 3">i</span>
                        <span class="label-char" style="--index: 3">l</span>
                    </label>
                </div>
                <div class="wave-group">
                    <input required="" type="tel" name="phone" class="input">
                    <span class="bar"></span>
                    <label class="label">
                        <span class="label-char" style="--index: 0">P</span>
                        <span class="label-char" style="--index: 1">h</span>
                        <span class="label-char" style="--index: 2">o</span>
                        <span class="label-char" style="--index: 3">n</span>
                        <span class="label-char" style="--index: 3">e</span>
                    </label>
                </div>
                <div class="wave-group">
                    <input required="" type="password" name="password" class="input">
                    <span class="bar"></span>
                    <label class="label">
                        <span class="label-char" style="--index: 0">P</span>
                        <span class="label-char" style="--index: 1">a</span>
                        <span class="label-char" style="--index: 2">s</span>
                        <span class="label-char" style="--index: 3">s</span>
                        <span class="label-char" style="--index: 3">w</span>
                        <span class="label-char" style="--index: 3">o</span>
                        <span class="label-char" style="--index: 3">r</span>
                        <span class="label-char" style="--index: 3">d</span>
                    </label>
                </div>
                    <button type="submit" name="insert" values="insert">Register</button>
                    <a class="sin" href="signin.php">Already Have an account? Sign in</a>
                    <div class="more-links">
                    <a href="#"><i class="ri-google-fill"></i>&nbsp;Google</a>
                    <a href="#"><i class="ri-apple-fill"></i>&nbsp;Apple</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- login-form-end -->


        <script src="script.js"></script>
</body>

</html>