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
        </tr>
    </thead>
    <tbody>
        <?php while ($issue = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $issue['subject']; ?></td>
                <td><?php echo $issue['description']; ?></td>
                <td><?php echo $issue['status']; ?></td>
                
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>
