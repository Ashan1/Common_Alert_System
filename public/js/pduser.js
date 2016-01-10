/**
 * Created by PM on 1/10/2016.
 */
var uNIC =0;

$(document).on("click", "#pduview", function () {
    var userNIC = $(this).data('id');
    $.ajax({
        type:"POST",
        dataType: "json",
        url:'../controllers/user_temp.php',
        data:{userNIC : userNIC},
        success:function(response){
        document.getElementById('pduname').innerHTML=response[0].Tname;
        document.getElementById('pduemail').innerHTML=response[0].EEmail;
        document.getElementById('pdumobile').innerHTML=response[0].ETel;
        document.getElementById('pdunic').innerHTML=response[0].Enic;
        document.getElementById('pdujb').innerHTML=response[0].EJb;
            uNIC = userNIC;
            $('#viewModal').modal('show');

        }
    });
});


/*$('#accept_btn').click(function(){
    var jb = document.getElementById('#job-role');
    alert(jb);
*//*    $.ajax({
        type:"POST",
        dataType: "json",
        url:'admin_accept_user.php',
        data:{userNIC : uNIC, jobrole : jb},
        success:function(response){
            if(response.type == 'text'){
                alert('aksfh');
            }
        }
    });*/

/*});*/

