<?php
include '../config/config.php';
include '../includes/header.php';

$id = $_GET['id'];
$result = $mysqli->query("SELECT * FROM clients WHERE id = $id");
$client = $result->fetch_assoc();
?>

<h2>Update Client</h2>
<form action="../handlers/update_client_handler.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $client['id']; ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $client['name']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $client['email']; ?>" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $client['phone']; ?>">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-control" id="status" name="status">
            <option value="active" <?php if($client['status'] == 'active') echo 'selected'; ?>>Active</option>
            <option value="inactive" <?php if($client['status'] == 'inactive') echo 'selected'; ?>>Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update Client</button>
</form>

<?php include '../includes/footer.php'; ?>
