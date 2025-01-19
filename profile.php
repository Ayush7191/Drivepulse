<?php
session_start();
require_once 'connection.php';

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header("Location:profile.php");
    exit();
}

// Fetch user details
$user_id = $_SESSION['id'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            margin: 20px auto;
            width: 80%;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .sidebar {
            width: 30%;
            padding: 20px;
            border-right: 1px solid #ddd;
            /* display: flex;
            align-items: center;
            flex-direction: column; */
        }

        .main-content {
            width: 70%;
            padding: 20px;
        }

        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ddd;
            display: block;
            margin: 0 auto 10px;
        }

        .sidebar h2 {
            text-align: center;
            margin: 10px 0;
        }

        .status {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .status span {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-update {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        .image-upload>input {
            display: none;
        }
        .image-upload{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            gap: 40px;
        }
        .ri-upload-2-line{
            font-size: 20px;
            transition: all 300ms;
            border-radius: 5px;
            cursor: pointer;
            padding: 2px;
            position: fixed;
        }
        .ri-upload-2-line:hover{
            border: 1px solid black;
            border-radius: 5px;
        }
        .ri-eraser-fill{
            font-size: 20px;
            transition: all 300ms;
            border-radius: 5px;
            cursor: pointer;
            padding: 2px;
            position: fixed;
        }
        .ri-eraser-fill:hover{
            border: 1px solid black;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="profile-picture">
            <canvas id= "canv1" ></canvas>
            </div>
            <div class="image-upload">
                <label for="file-input">
                <img src=""><i class="ri-upload-2-line"></i>
                </label>
                <label for="file-input">
                <img src=""><i class="ri-eraser-fill"></i></i>
                </label>

                <input id="file-input" type="file" />
            </div>
            <h2><?php echo htmlspecialchars($user['name']); ?></h2>
            <p><?php echo htmlspecialchars($user['email']); ?></p>
            <div class="status">
                <span>Profile Document</span>
                <span><?php echo $profile_document ? "✅" : "❌"; ?></span>
            </div>
            <div class="status">
                <span>Mobile Number</span>
                <span><?php echo $mobile_verified ? "✅" : "❌"; ?></span>
            </div>

        </div>

        <!-- Main Content -->
        <div class="main-content">
            <h2>My Account</h2>
            <form method="POST" action="update_profile.php">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" id="mobile" name="mobile" value="<?php echo htmlspecialchars($mobile); ?>"
                        required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="Male" <?php echo $gender == "Male" ? "selected" : ""; ?>>Male</option>
                        <option value="Female" <?php echo $gender == "Female" ? "selected" : ""; ?>>Female</option>
                        <option value="Other" <?php echo $gender == "Other" ? "selected" : ""; ?>>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($city); ?>" required>
                </div>
                <button type="submit" class="btn-update">Update</button>
            </form>
        </div>
    </div>
    <script>
        function upload(){
  var imgcanvas = document.getElementById("canv1");
  var fileinput = document.getElementById("file-input");
  var image = new SimpleImage(fileinput);
  image.drawTo(imgcanvas);
}
    </script>
</body>

</html>