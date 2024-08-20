<?php
include '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);

    $stmt = $mysqli->prepare("INSERT INTO users (username, email, phone, password, role) VALUES (?, ?, ?, ?, 'client')");
    $stmt->bind_param('ssss', $name, $email, $phone, $password);

    if ($stmt->execute()) {
        header('Location: ../views/login.php?success=registered');
    } else {
        header('Location: ../views/register.php?error=failed');
    }
}
?>
