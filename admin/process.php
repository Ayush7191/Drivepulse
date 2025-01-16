<!-- PHP Start -->

<?php
session_start();
// Database connection
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize it
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Validate input
    if (empty($phone) || empty($password)) {
        echo "Please fill in all fields!";
    } else {
        // Prepare and execute the SQL query
        $stmt = $conn->prepare("SELECT * FROM registration WHERE phone = $phone");
        $stmt->bind_param("s", $phone);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the user exists
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Start the session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['phone'] = $user['phone'];

                // Redirect to the dashboard or a protected page
                header("Location: index.php");
                exit();
            } else {
                echo "Invalid password!";
            }
        } else {
            echo "No user found with that phone number!";
        }
    }
}
?>


<!-- PHP End -->