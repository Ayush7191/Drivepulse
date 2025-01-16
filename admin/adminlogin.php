<?php
session_start(); // Start session at the beginning

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    include "../admin/connection.php";

    // Optimized SQL query to fetch only the relevant admin record
    $sql = "SELECT `email`, `password` FROM `admin` WHERE `email` = ?";
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
            header('location: dashboard.php');
            exit(); // Ensure no further code is executed after redirection
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
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: radial-gradient(
        circle farthest-side at 0% 50%,
        #282828 23.5%,
        rgba(255, 170, 0, 0) 0
      )
      21px 30px,
    radial-gradient(
        circle farthest-side at 0% 50%,
        #2c3539 24%,
        rgba(240, 166, 17, 0) 0
      )
      19px 30px,
    linear-gradient(
        #282828 14%,
        rgba(240, 166, 17, 0) 0,
        rgba(240, 166, 17, 0) 85%,
        #282828 0
      )
      0 0,
    linear-gradient(
        150deg,
        #282828 24%,
        #2c3539 0,
        #2c3539 26%,
        rgba(240, 166, 17, 0) 0,
        rgba(240, 166, 17, 0) 74%,
        #2c3539 0,
        #2c3539 76%,
        #282828 0
      )
      0 0,
    linear-gradient(
        30deg,
        #282828 24%,
        #2c3539 0,
        #2c3539 26%,
        rgba(240, 166, 17, 0) 0,
        rgba(240, 166, 17, 0) 74%,
        #2c3539 0,
        #2c3539 76%,
        #282828 0
      )
      0 0,
    linear-gradient(90deg, #2c3539 2%, #282828 0, #282828 98%, #2c3539 0%) 0 0
      #282828;
  background-size: 40px 60px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 900px;
            width: 30%;
            box-shadow: 0 0 15px rgba(122, 121, 121, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 225px;
            margin-left: 500px;
        }

        .form-container {
            height: 300px;
            width: 100%;
            padding: 40px;
            background-color: rgb(40, 40, 40,.5);
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #e05a2d;
            font-family: "baloo bhai 2";
        }
        .form-container button {
            width: 366px;
            padding: 12px;
            margin-top: 50px;
            margin-bottom: 5px;
            background-color:rgb(217, 102, 64);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #e0482d;
        }



        /* From Uiverse.io by AbanoubMagdy1 */
        .wave-group {
            position: relative;
            margin-top: 2rem;
        }

        .wave-group .input {
            font-size: 16px;
            padding: 10px 10px 10px 5px;
            display: block;
            width: 350px;
            border: none;
            border-bottom: 1px solid #515151;
            background: transparent;
            color: wheat;
        }

        .wave-group .input:focus {
            outline: none;
        }

        .wave-group .label {
            color: #999;
            font-size: 18px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: 5px;
            top: 10px;
            display: flex;
        }

        .wave-group .label-char {
            transition: 0.2s ease all;
            transition-delay: calc(var(--index) * .05s);
        }

        .wave-group .input:focus~label .label-char,
        .wave-group .input:valid~label .label-char {
            transform: translateY(-22px);
            font-size: 14px;
            color: #e05a2d;
        }

        .wave-group .bar {
            position: relative;
            display: block;
            width: 365px;
        }

        .wave-group .bar:before,
        .wave-group .bar:after {
            content: '';
            height: 2px;
            width: 0;
            bottom: 1px;
            position: absolute;
            background: #e05a2d;
            transition: 0.2s ease all;
            -moz-transition: 0.2s ease all;
            -webkit-transition: 0.2s ease all;
        }

        .wave-group .bar:before {
            left: 50%;
        }

        .wave-group .bar:after {
            right: 50%;
        }

        .wave-group .input:focus~.bar:before,
        .wave-group .input:focus~.bar:after {
            width: 50%;
        }
    </style>
</head>

<body class="lgn-bd">

    <!-- login-form-start -->
    <div class="container">
        <!-- Login Form -->
        <div class="form-container login">
            <h2>Admin Login</h2>
            <form action="adminlogin.php" method="POST">
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
                    <button type="submit" name="login">Login</button>
            </form>
        </div>

    </div>
    <!-- login-form-end -->
    <!-- <script src="script.js"></script> -->
</body>

</html>