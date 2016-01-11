/**
 * Created by PM on 1/11/2016.
 */
function printnotification(json){
    if(json[0].DisasterType == "earthquake"){
        var DisasterType = "Earthquake";
        var Mag = json[0].Mag;
        var Place = json[0].Place;
        $('#alert_data').append($('<div class="disaster-alert-eq" id="disaster-alert"> <div class="bulb col-lg-2"><span><i class="dis-cracked2" style="font-size: 70px"></i></span></div><div class="description col-lg-10" style="float: right;"><div><button type="button" class="close" data-dismiss="modal" aria-label="Close" id="alert-close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button></div><div><h1 style="margin: 0;">'+ DisasterType + '</h1><p style="font-size: 18px;margin: 0;">Magnitude:- '+ Mag
        +'</p><p style="margin: 0;">Location:-'+ Place + '</p></div></div></div>.'));
    }
    else if(json[0].DisasterType == "reservoir"){
        var DisasterType = "Reservoir Open";
        var GateOpen = json[0].GateOpen;
        var Distric = json[0].Distric;
        var reservoir_name = json[0].reservoir_name;
        $('#alert_data').append($('<div class="disaster-alert-rs" id="disaster-alert"> <div class="bulb col-lg-2"><span><i class="dis-cracked2" style="font-size: 70px"></i></span></div><div class="description col-lg-10" style="float: right;"><div><button type="button" class="close" data-dismiss="modal" aria-label="Close" id="alert-close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button></div><div><h1 style="margin: 0;">'+ DisasterType + '</h1><p style="font-size: 18px;margin: 0;">Distric:- '+ Distric  +'</p><p style="margin: 0;">reservoir_name:-'+ reservoir_name + '</p></div></div></div>.'));

    }
    else if(json[0].DisasterType == "tsunami"){
        var DisasterType = "Tsunami Alert";
        var Mag = json[0].Mag;
        var Place = json[0].Place;
        $('#alert_data').append($('<div class="disaster-alert-ts" id="disaster-alert"> <div class="bulb col-lg-2"><span><i class="dis-cracked2" style="font-size: 70px"></i></span></div><div class="description col-lg-10" style="float: right;"><div><button type="button" class="close" data-dismiss="modal" aria-label="Close" id="alert-close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button></div><div><h1 style="margin: 0;">'+ DisasterType + '</h1><p style="font-size: 18px;margin: 0;">Magnitude:- '+ Mag +'</p><p style="margin: 0;">Location:-'+ Place + '</p></div></div></div>.'));

    }
    else if(json[0].DisasterType == "flood"){
        var DisasterType = "Flood Alert";
        var flood_type = json[0].flood_type;
        var Place = json[0].Place;
        $('#alert_data').append($('<div class="disaster-alert-fl" id="disaster-alert"> <div class="bulb col-lg-2"><span><i class="dis-cracked2" style="font-size: 70px"></i></span></div><div class="description col-lg-10" style="float: right;"><div><button type="button" class="close" data-dismiss="modal" aria-label="Close" id="alert-close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button></div><div><h1 style="margin: 0;">'+ DisasterType + '</h1><p style="font-size: 18px;margin: 0;">flood_type:- '+ flood_type +'</p><p style="margin: 0;">Location:-'+ Place + '</p></div></div></div>.'));
    }


}

$(document).ready(function(){
    $.ajaxSetup({cache: false});
    setInterval(function(){
        $.ajax({
            type: "POST",
            url: 'http://localhost/Common_Alert_System/app/view/pm_test1.php',
            data: 'data_string',
            dataType: "JSON", //tell jQuery to expect JSON encoded response
            timeout: 1000,
            success: function (response) {
                if (response.success != 'No'){
                    var json = response;
                    printnotification(json);
                } else {
                    console.log('else');
                }
                /*                    var response = JSON.parse(out);
                 var tt = response[i].Tname;
                 alert(tt);*/

            }
        });
    },2000);
    jQuery('#alert-close').on('click', function(event) {
        jQuery('#disaster-alert').toggle('slow');
    });

});