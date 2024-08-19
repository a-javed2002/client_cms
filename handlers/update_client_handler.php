<?php
include '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $status = $_POST['status'];

    $stmt = $mysqli->prepare("UPDATE clients SET name = ?, email = ?, phone = ?, status = ? WHERE id = ?");
    $stmt->bind_param('ssssi', $name, $email, $phone, $status, $id);

    if ($stmt->execute()) {
        header('Location: ../admin/manage_clients.php?success=client_updated');
    } else {
        header('Location: ../admin/update_client.php?id=' . $id . '&error=failed');
    }
}
?>
