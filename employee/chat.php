<?php include '../includes/header.php'; ?>
<div class="row">
    <div class="col-md-12">
        <h2>Chat with Clients/Employees</h2>
        <div class="chat-box">
            <!-- Chat messages will be displayed here -->
        </div>
        <form action="../handlers/chat_handler.php" method="POST">
            <div class="input-group">
                <input type="text" class="form-control" name="message" placeholder="Type your message here..." required>
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>
</div>
<?php include '../includes/footer.php'; ?>
