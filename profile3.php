<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        .profile-container {
            text-align: center;
            margin-top: 50px;
        }
        .button {
            padding: 10px 20px;
            background-color: #009688;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px;
        }
        .button:hover {
            background-color: #00796b;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <?php if (isset($_SESSION['login']) && $_SESSION['login'] === true): ?>
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h1>
            <p>Email: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
            <a href="logout.php" class="button">Logout</a>
        <?php else: ?>
            <h1>Welcome to Our Website!</h1>
            <a href="google_login.php" class="button">Sign Up with Google</a>
        <?php endif; ?>
    </div>
</body>
</html>
