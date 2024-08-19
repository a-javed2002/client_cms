<?php include '../includes/header.php'; ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2>Raise an Issue</h2>
        <form action="../handlers/raise_issue_handler.php" method="POST">
            <div class="mb-3">
                <label for="issue_title" class="form-label">Issue Title</label>
                <input type="text" class="form-control" id="issue_title" name="issue_title" required>
            </div>
            <div class="mb-3">
                <label for="issue_description" class="form-label">Issue Description</label>
                <textarea class="form-control" id="issue_description" name="issue_description" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit Issue</button>
        </form>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
