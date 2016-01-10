/**
 * Created by PM on 1/10/2016.
 */

$(document).on("click", "#pduview", function () {
    var userNIC = $(this).data('id');
    $.ajax({
        type:"POST",
        dataType: "json",
        url:'user_temp.php',
        data:{userNIC : userNIC},
        success:function(response){
        //$('#namett').html(response[0].Tname);
        //$("#pduname").append('<span>'+Fname+'</span>');
        document.getElementById('pduname').innerHTML=response[0].Tname;
        document.getElementById('pduemail').innerHTML=response[0].EEmail;
        document.getElementById('pdumobile').innerHTML=response[0].ETel;
        document.getElementById('pdunic').innerHTML=response[0].Enic;
        document.getElementById('pdujb').innerHTML=response[0].EJb;
        //$("#pduemail").append('<span>'+response[0].DID+'</span>');
        //console.log(response[0].Tname);
        }
    });
});

$('#pdu_accept').click(function(){

});

