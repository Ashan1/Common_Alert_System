$(document).ready(function(){
    $("input.mobile").mask("9999999999");
    /*$("input.name").mask("[a-z][A-Z]");*/
    var objRegExp  = /^[a-z\u00C0-\u00ff]+$/;
    if(!objRegExp.test('formName'){
        true ()
    }

});
/*$(document).onblur(function () {
        var email = document.getElementById('formEmail');
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if (!filter.test(email.value)) {
            alert('Please provide a valid email address');
            email.focus;
            return false;
    }
}
);*/
$(document).ready(function() {
    $.mockjax({
        url: "emails.action",
        response: function (settings) {
            var email = settings.data.email,
                emails = ["glen@marketo.com", "george@bush.gov", "me@god.com", "aboutface@cooper.com", "steam@valve.com", "bill@gates.com"];
            this.responseText = "true";
            if ($.inArray(email, emails) !== -1) {
                this.responseText = "false";
            }
        },
        responseTime: 500
    });
    var validator = $("#signup").validate({
        rules: {
            email: {
                required: true,
                email: true,
                remote: "emails.action"
            },
            messages: {
                email: {
                    required: "Please enter a valid email address",
                    minlength: "Please enter a valid email address",
                    remote: jQuery.validator.format("{0} is already in use")
                }
            }
        }
    })
})
