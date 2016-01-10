/**
 * Created by PM on 1/10/2016.
 */
$().ready(function(){
    $('#ex_auth').validate({
        rules:{
            auth_name:{
                required:true,
                TestOnly:true
            },
            auth_tel:{
                required:true,
                Mobile:true
            },
            auth_address:{
                required:true
            },
            auth_email:{
                required:true,
                HEmail:true
            }

        }
    });

    $('#ex_update').validate({
        rules:{
            auth_nameup:{
                required:true,
                TestOnly:true
            },
            auth_telup:{
                required:true,
                Mobile:true
            },
            auth_addressup:{
                required:true
            },
            auth_emailup:{
                required:true,
                HEmail:true
            }

        }
    });

});

jQuery.validator.addMethod("TestOnly",function(value,element){
    return this.optional(element) || /^[A-Z||a-z]+$/.test(value);
},"Only alphabetical characters");

jQuery.validator.addMethod("HEmail",function(value,element){
    return this.optional(element) || /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(value);
},"Please enter valid email");

jQuery.validator.addMethod("Mobile",function(value,element){
    return this.optional(element) || /^[0-9]{10}$/.test(value);
},"Not a valid mobile number");