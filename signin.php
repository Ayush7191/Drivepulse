<!-- php start -->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    include "connection.php";
    
    // Optimized SQL query to fetch only the relevant admin record
    $sql = "SELECT `email`, `password` FROM `user` WHERE `email` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $match = false;
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['email'] == $email && $row['password'] == $password) {
            $match = true;
            $_SESSION['email'] = $email; // Store email in session
            header('location: profile.php');
            exit();
        }
    }
    
    if ($match == false) {
        ?>
        <script>
            alert('Invalid username or password');
        </script>
        <?php
    }
    
    $conn->close();
}
?>
<!-- php end -->



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
    <?php include 'navbar.php';?>

        <!-- login-form-start -->
        <div class="container">
            <!-- Login Form -->
            <div class="form-container login">
                <h2>Login</h2>
                <form action="signin.php" method="POST">
                <div class="wave-group">
                    <input required type="email" name="email" class="input">
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
                    <input required type="password" name="password" class="input">
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

                    <button type="submit" name="login">Login</button>
                    <a href="signup.php">Don't Have accouunt? Sign Up</a>
                </form>
            </div>

        </div>
        <!-- login-form-end -->
<script src="script.js"></script>
</body>

</html>

