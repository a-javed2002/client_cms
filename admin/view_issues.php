<?php
include '../config/config.php';
include '../includes/header.php';

// Fetch all issues
$result = $mysqli->query("SELECT * FROM issues");
?>

<h2>View Issues</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($issue = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $issue['title']; ?></td>
                <td><?php echo $issue['description']; ?></td>
                <td><?php echo $issue['status']; ?></td>
                <td>
                    <?php if ($issue['status'] == 'open'): ?>
                        <a href="../handlers/close_issue_handler.php?id=<?php echo $issue['id']; ?>" class="btn btn-success btn-sm">Close Issue</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>
