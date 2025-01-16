<?php
session_start();
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $gender = htmlspecialchars($_POST['gender']);
    $city = htmlspecialchars($_POST['city']);
    $email = $_SESSION['email'];
    $image = $_SESSION['profile_img'];

    $stmt = $conn->prepare("UPDATE users SET name = ?, mobile = ?, gender = ?, city = ?, profile_img = ? WHERE email = ?");
    $stmt->bind_param("sssss", $name, $mobile, $gender, $city, $email,$image);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    header("Location: index.php");
    exit();
}
?>
