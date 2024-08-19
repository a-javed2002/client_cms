<?php
include '../config/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $mysqli->prepare("UPDATE issues SET status = 'closed' WHERE id = ?");
    $stmt->bind_param('i', $id);

    if ($stmt->execute()) {
        header('Location: ../employee/view_issues.php?success=issue_closed');
    } else {
        header('Location: ../employee/view_issues.php?error=failed');
    }
}
?>
