/**
 * Created by CAS Team.
 */

$().ready(function(){
    $('#btn-login').click(function(){
        $("#loginform").validate({
            rules:{
                username:{
                    required: true

                },
                password: {
                    required: true
                }
            },
            submitHandler: function(form) {
                var m_data = new FormData();
                m_data.append( 'username',  document.getElementById("login-username").value);
                m_data.append( 'password', document.getElementById("login-password").value);
                // Ajax post data to server
                $.ajax({
                    url: 'app/controllers/login.php',
                    data: m_data,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    dataType:'json',
                    success: function(response){
                        //load json data from server and output message
                        if (response.type == "text"){
                            //alert('dd');
                            window.location.replace("public/home.php");
                        }else{
                            $("#login-error").removeClass('hidden');
                        }
                    }
                });

            }
        });
            //get input field values data to be sent to server

    });
    $('#forgotpassword').click(function(){
        $('#login-show').slideUp('slow',function(){
            $('#forgotpassword-show').removeClass('hidden').slideDown(600);
        });
    });

    $('#password-reset').click(function(){
        $('#forgotpassword-admin').validate({
            rules:{
                resetemail:{
                    required:true
                }
            },
            submitHandler: function(form) {

                $('#password-reset-show').fadeOut('slow',function(){
                    $('#password-reset-msg').removeClass('hidden').fadeIn();
                });
            }

        });
    });
});

