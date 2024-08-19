<?php
include '../config/config.php';
include '../includes/header.php';

// Fetch total clients, active, and inactive clients count
$total_clients = $mysqli->query("SELECT COUNT(*) as count FROM clients")->fetch_assoc()['count'];
$active_clients = $mysqli->query("SELECT COUNT(*) as count FROM clients WHERE status = 'active'")->fetch_assoc()['count'];
$inactive_clients = $mysqli->query("SELECT COUNT(*) as count FROM clients WHERE status = 'inactive'")->fetch_assoc()['count'];
?>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Total Clients</h5>
                <p class="card-text"><?php echo $total_clients; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Active Clients</h5>
                <p class="card-text"><?php echo $active_clients; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Inactive Clients</h5>
                <p class="card-text"><?php echo $inactive_clients; ?></p>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
