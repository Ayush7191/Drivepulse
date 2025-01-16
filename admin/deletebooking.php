<?php
require_once 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete from database
    $sql = "DELETE FROM bookingdata WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("location:manage-bookings.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>