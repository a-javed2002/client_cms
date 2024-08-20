<?php
include '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $issue_title = $_POST['issue_title'];
    $issue_description = $_POST['issue_description'];

    $stmt = $mysqli->prepare("INSERT INTO issues (subject, description, status) VALUES (?, ?, 'open')");
    $stmt->bind_param('ss', $issue_title, $issue_description);

    if ($stmt->execute()) {
        header('Location: ../employee/view_issues.php?success=issue_raised');
    } else {
        header('Location: ../employee/raise_issue.php?error=failed');
    }
}
?>
