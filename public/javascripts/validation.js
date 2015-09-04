$(document).ready(function() {
    $.validator.setDefaults({
        errorClass: 'help-block',
        highlight: function(element){
            $(element)
                .closest('.input-group')
                .addClass('has-error');
        },

        unhighlight: function(element){
            $(element)
                .closest('.input-group')
                .removeClass('has-error');
        },

        errorPlacement: function(error,element){
            if (element.prop('type') === 'input-group'){
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });

    $("#login_form").validate({
        rules:{
            User_Name:{
                required: true

            },
            Password: {
                required: true
            }
        }
    })
});