<?php
include '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $stmt = $mysqli->prepare("INSERT INTO clients (name, email, phone) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $name, $email, $phone);

    if ($stmt->execute()) {
        header('Location: ../admin/manage_clients.php?success=client_added');
    } else {
        header('Location: ../admin/add_client.php?error=failed');
    }
}
?>
