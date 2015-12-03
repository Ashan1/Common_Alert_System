/**
 * Created by Dili on 03/12/2015.
 */
$(document).ready(function() {
    $("#send_message").attr('disabled', 'disabled');
    $("form").keyup(function() {
// To Disable Submit Button
        $("#send_message").attr('disabled', 'disabled');
// Validating Fields
        var to_user = $("#to_user").val();
        var message = $("#message").val();
        var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
        if (!(to_user == "" || message == "")) {

// To Enable Submit Button
                $("#send_message").removeAttr('disabled');
                $("#send_message").css({
                    "cursor": "pointer",
                    "box-shadow": "1px 0px 6px #333"
                });

        }
    });
// On Click Of Submit Button
    $("#send_message").click(function() {
        $("#send_message").css({
            "cursor": "default",
            "box-shadow": "none"
        });
        alert("Message succesfully sent..!!!");

    });
});

