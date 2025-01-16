<?php
require_once 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete from database
    $sql = "DELETE FROM inventory WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("location:manage-cars.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>