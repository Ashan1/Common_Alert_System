/**
 * Created by Thush on 11/15/2015.
 */
$(".optionName").hide();

$("document").ready(function() {   /// have to wait till after the document loads to run these things

    $('select[name=type]').change(function(){
        var thisValue = $(this).val();
        if (thisValue == "D") {
            $("." + thisValue).show();
        }else{
            $(".D").hide();
        }
        if (thisValue == "M") {
            $("." + thisValue).show();
        }else{
            $(".M").hide();
        }
        if (thisValue == "Yearly") {
            $("." + thisValue).show();
        }else{
            $(".Yearly").hide();
        }
        if (thisValue == "O") {
            $("." + thisValue).show();
        }else{
            $(".O").hide();
        }
    });
});
function Printpage() {
    var alphaExp = /^[a-zA-Z]+$/;
    if(document.myForm.name.match(alphaExp)){
        print();
        document.myForm.name.focus();
        return false;
    }
};
$(document).ready(function(){
    $(".btn1").click(function(){
        $(".btn1").hide();
    });
});
