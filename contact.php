<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Database connection (update with your database details)
    require_once 'connection.php';

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO contact_form (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Thank you for your message! We will get back to you soon.');</script>";
        echo "<script>window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again later.');</script>";
        echo "<script>window.location.href='contact.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DrivePulse</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/dp.css">
    <style>
        /* Page-specific styling */
        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            line-height: 50px;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 30px;
            color: white;
        }

        .contact-details,
        .feedback-form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 30px;
            color: white;
        }

        .contact-details div {
            flex: 1 1 45%;
            margin: 10px;
            display: flex;
            flex-direction: column;
        }

        .contact-details h3,
        h2 {
            margin-bottom: 10px;
            color: white;
        }

        .feedback-form {
            flex-direction: column;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        form input,
        form textarea,
        form button {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 1rem;
        }

        form input,
        form textarea {
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #0056b3;
        }

        iframe {
            width: 100%;
            height: 300px;
            border: none;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="contact-container">
        <!-- Contact Header -->
        <div class="contact-header">
            <h1>Contact Us</h1>
            <p>We’re here to help! Get in touch with us via the details below or send us a message using the form.</p>
        </div>

        <!-- Contact Details -->
        <div class="contact-details">
            <div>
                <h3>Address</h3>
                <p>525 Saibaba Chowkdi<br>Sector 27, Gandhinagar,<br>India, 382028</p>
            </div>
            <div>
                <h3>Phone</h3>
                <a href="tel:9909581373">Customer Support: +91 99095 81373</a>
                <a href="tel:9909581373">Office: +91 99988 80099</a>
            </div>
            <div>
                <h3>Email</h3>
                <a href="mailto:ayushchhodavadiya9900@gmail.com">support@drivepulse.com</a>
                <a href="mailto:ayushchhodavadiya9900@gmail.com">info@drivepulse.com</a>
            </div>
            <div>
                <h3>Business Hours</h3>
                <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                <p>Saturday: 10:00 AM - 4:00 PM</p>
                <p>Sunday: Closed</p>
            </div>
        </div>

        <!-- Feedback Form -->
        <div class="feedback-form">
            <h2>Send Us a Message</h2>
            <form action="contact.php" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>

        <!-- Google Maps Embed -->
        <h2>Our Location</h2>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d860.387524969177!2d72.64653690733964!3d23.246898500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2b8ef77be5b1%3A0xa1b726c52c1def23!2s525%2C%20Gayatrinagar%20Society%2C%20Sector%2027%2C%20Gandhinagar%2C%20Gujarat%20382028!5e1!3m2!1sen!2sin!4v1736944590673!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

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
     <script src="script.js"></script>
</body>

</html>