<?php
include '../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $mysqli->prepare("DELETE FROM clients WHERE id = ?");
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        header('Location: ../admin/manage_clients.php?success=client_deleted');
    } else {
        header('Location: ../admin/manage_clients.php?error=failed');
    }
}
?>
