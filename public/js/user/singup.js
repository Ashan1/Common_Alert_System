/**
CAS Team
**/

$().ready(function(){
   $('#signupform').validate({
       rules:{
           Fname:{
               required:true,
               TestOnly: true
           },
           Lname:{
               required:true,
               TestOnly: true
           },
           email:{
               required: true
           },
           nic:{
               required: true,
               NIC:true
           },
           title:{
               required:true
           },
           mobile:{
               required: true,
               Mobile: true
           }
       },
       messages:{
           Fname:{
               required: "Please enter your first name"
           },
           Lname:{
               required: "Please enter your last name"
           },
           email:{
               required: "Please enter valid email"
           },
           nic:{
               required:"Please enter valid NIC number"
           },
           title: {
               required: "Your Job Title"
           },
           mobile:{
               required:"Please enter valid mobile number"
           }
       }
   });
});

jQuery.validator.addMethod("Mobile",function(value,element){
    return this.optional(element) || /^[0-9]{10}$/.test(value);
},"Not a valid mobile number");

jQuery.validator.addMethod("NIC",function(value,element){
    return this.optional(element) || /^[0-9]{9}[V||X||v||x]{1}$/.test(value) ||/^[0-9]{12}$/.test(value);
},"Not a valid NIC number");

jQuery.validator.addMethod("TestOnly",function(value,element){
    return this.optional(element) || /^[A-Z||a-z]+$/.test(value);
},"Only alphabetical characters");
