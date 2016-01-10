/**
 * Created by PM on 1/9/2016.
 */


$().ready(function(){
    $('#accept_btn').click(function(){
        var m_data = new FormData();
        m_data.append( 'Fname',  document.getElementById("Fname").value);
        $.ajax({
            url: '../../app/controllers/user_signup.php',
            data: m_data,
            processData: false,
            contentType: false,
            type: 'POST',
            dataType:'json',
            success: function(response){
                //load json data from server and output message
                if (response.type == "text"){
                    //$("#signup-success-text").html(response.text);
                    $("#signup-form").slideUp("slow",function(){
                        $("#signup-success").removeClass("hidden",function(){
                            $("#signup-success").fadeIn(600);
                        });
                    });


                }else{
                    $("#signup-success").html(response.text);
                }


            }
        });
    });
});
