// You can add custom JavaScript/jQuery functions here
$(document).ready(function () {
    // Success modal auto-dismiss after 3 seconds
    $('#successModal').modal('show');
    setTimeout(function () {
        $('#successModal').modal('hide');
    }, 3000);

    // Error modal auto-dismiss after 3 seconds
    $('#errorModal').modal('show');
    setTimeout(function () {
        $('#errorModal').modal('hide');
    }, 3000);
});
