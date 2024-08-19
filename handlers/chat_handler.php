<?php
include '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message = $_POST['message'];
    $sender = $_SESSION['username']; // Assuming username is stored in the session

    $stmt = $mysqli->prepare("INSERT INTO chat_messages (sender, message) VALUES (?, ?)");
    $stmt->bind_param('ss', $sender, $message);

    if ($stmt->execute()) {
        header('Location: ../admin/chat.php?success=message_sent');
    } else {
        header('Location: ../admin/chat.php?error=failed');
    }
}
?>
