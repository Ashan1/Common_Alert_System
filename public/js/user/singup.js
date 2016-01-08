/**
CAS Team
**/

$().ready(function(){
  $('#btn-signup').click(function(){
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
          },

          submitHandler: function(form) {
              //get input field values data to be sent to server
              var m_data = new FormData();
              m_data.append( 'Fname',  document.getElementById("Fname").value);
              m_data.append( 'Lname', document.getElementById("Lname").value);
              m_data.append( 'email',  document.getElementById("email").value);
              m_data.append( 'nic', document.getElementById("nic").value);
              m_data.append( 'title',  document.getElementById("title").value);
              m_data.append( 'mobile', document.getElementById("mobile").value);
              // Ajax post data to server
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


          }
      });
  });

    $('#admin-adduser').validate({
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
