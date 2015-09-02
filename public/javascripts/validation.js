$(document).ready(function() {
    $("#login_form").validate({
        rules: {
            Username: {
                required: true,
            },
            password: {
                required: true,
            }
        }
    });
});
