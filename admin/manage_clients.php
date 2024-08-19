<?php
include '../config/config.php';
include '../includes/header.php';

// Fetch all clients
$result = $mysqli->query("SELECT * FROM clients");
?>

<h2>Manage Clients</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($client = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $client['name']; ?></td>
                <td><?php echo $client['email']; ?></td>
                <td><?php echo $client['phone']; ?></td>
                <td><?php echo $client['status']; ?></td>
                <td>
                    <a href="update_client.php?id=<?php echo $client['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete_client.php?id=<?php echo $client['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php include '../includes/footer.php'; ?>
