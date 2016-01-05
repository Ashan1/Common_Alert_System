</head>
<body>
<?php include "../templates/header.php"; ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#submit_btn").click(function() {

            var proceed = true;
            //simple validation at client's end
            //loop through each field and we simply change border color to red for invalid fields
            $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
                $(this).css('border-color','');
                if(!$.trim($(this).val())){ //if this field is empty
                    $(this).css('border-color','red'); //change border color to red
                    proceed = false; //set do not proceed flag
                }
                //check invalid email
                var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                    $(this).css('border-color','red'); //change border color to red
                    proceed = false; //set do not proceed flag
                }
            });

            if(proceed) //everything looks good! proceed...
            {
                //get input field values data to be sent to server
                post_data = {
                    'user_name'		: $('input[name=name]').val(),
                    'user_email'	: $('input[name=email]').val(),
                    'country_code'	: $('input[name=phone1]').val(),
                    'phone_number'	: $('input[name=phone2]').val(),
                    'subject'		: $('select[name=subject]').val(),
                    'msg'			: $('textarea[name=message]').val()
                };

                //Ajax post data to server
                $.post('../controller/contact_me.php', post_data, function(response){
                    if(response.type == 'error'){ //load json data from server and output message
                        output = '<div class="error">'+response.text+'</div>';
                    }else{
                        output = '<div class="success">'+response.text+'</div>';
                        //reset values in all input fields
                        $("#contact_form  input[required=true], #contact_form textarea[required=true]").val('');
                        $("#contact_form #contact_body").slideUp(); //hide form after success
                    }
                    $("#contact_form #contact_results").hide().html(output).slideDown();
                }, 'json');
            }
        });

        //reset previously set border colors and hide all message on .keyup()
        $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() {
            $(this).css('border-color','');
            $("#result").slideUp();
        });
    });
</script>

<div class="container-fluid">
    <div class="row login">
        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs lefts">
            <img src="../../public/images/login_left.png" class="img-responsive" alt="CAS Loging"/>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 rights">
            <div class=""></div>
            <div class="head-text"><h4>WELCOME TO <strong>CAS</strong></h4>
                <span><p>Note :- All fields are required</p></span>
                <div id="contact_results"></div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-10">
                <!--<form id="signupform" name="signupform" class="form-horizontal" role="form" method="post">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" class="form-control" id="inputPassword3" placeholder="Name" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="inputPassword3" placeholder="Email" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">NIC Number</label>
                        <div class="col-sm-8">
                            <input type="number" name="nic" class="form-control" id="inputPassword3" placeholder="NIC" required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" class="form-control" id="inputPassword3" placeholder="Job Title" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Mobile No</label>
                        <div class="col-sm-8">
                            <input type="number" name="mobile" class="form-control" id="inputPassword3" placeholder="Mobile Number" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Address</label>
                        <div class="col-sm-8">
                            <input type="text" name="address" class="form-control" id="inputPassword3" placeholder="Address" required="true">
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-7 controls">
                        <button type="submit" id="btn-signup" name="btn-signup" class="btn btn-default btn-primary">
                            <i class="fa fa-hand-o-right"></i>&nbsp;SIGN UP
                        </button>

                        <button type="submit" name="btn-cancel" class="btn btn-default btn-primary">
                            <i class="fa fa-ban"></i>&nbsp;Cancel
                        </button>
                    </div>
                </form>-->

                <div class="form-style" id="contact_form">
                    <div id="contact_results"></div>
                    <div id="contact_body">
                        <label><span>Name <span class="required">*</span></span>
                            <input type="text" name="name" id="name" required="true" class="input-field"/>
                        </label>
                        <label><span>Email <span class="required">*</span></span>
                            <input type="email" name="email" required="true" class="input-field"/>
                        </label>
                        <label><span>Phone</span>
                            <input type="text" name="phone1" maxlength="4" placeholder="+91"  required="true" class="tel-number-field"/>&mdash;<input type="text" name="phone2" maxlength="15"  required="true" class="tel-number-field long" />
                        </label>
                        <label for="subject"><span>Regarding</span>
                            <select name="subject" class="select-field">
                                <option value="General Question">General Question</option>
                                <option value="Advertise">Advertisement</option>
                                <option value="Partnership">Partnership Oppertunity</option>
                            </select>
                        </label>
                        <label for="field5"><span>Message <span class="required">*</span></span>
                            <textarea name="message" id="message" class="textarea-field" required="true"></textarea>
                        </label>
                        <label>
                            <span>&nbsp;</span><input type="submit" id="submit_btn" value="Submit" />
                        </label>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

