<html>
    <head>
        <title>SignUp</title>
        <link href="../../../public/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!--link href="../../../public/stylesheets/main.css" rel="stylesheet" type="text/css"-->
        <link href="../../../public/stylesheets/style.css" rel="stylesheet" type="text/css">
        <script src="../../../public/javascripts/api.js"></script>
        <script src="../../../public/javascripts/jquery-1.9.0.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src="../../../public/javascripts/sign_up.js"></script>
        <!--script src="../../../public/javascripts/gen_validatorv4.js" type="text/javascript"></script>
        <script--  type="text/javascript">
            $(document).ready(function(){
                var frmvalidator = new Validator('signup');
                frmvalidator.addValidation("formName","req","Please enter your  Name");
                frmvalidator.addValidation("formName","maxlen=50",
                    "Max length for Name is 50");
                frmvalidator.addValidation("formEmail","maxlen=50");
                frmvalidator.addValidation("formEmail","req");
                frmvalidator.addValidation("formEmail","email");

                frmvalidator.addValidation("formNIC","req");
                frmvalidator.addValidation("formNIC","minlen=10");
                frmvalidator.addValidation("formNIC","maxlen=10");

                frmvalidator.addValidation("formTitle","req");

                frmvalidator.addValidation("formMobile","minlen=10","10 numbers required");
                frmvalidator.addValidation("formMobile","maxlen=10","10 numbers required");
                frmvalidator.addValidation("formMobile","numeric","Numbers only");


            });


        </script-->
    </head>
    <body>
        <div class="container">
            <div class="signup-image col-sm-6 col-lg-6 img-responsive">
                <img src="../../../public/images/signup.png"  alt="abc">

            </div>
            <div class=" signup-form col-sm-6 col-lg-6">
                <div class="Regisration">
                    <div class="Regisration-head" ><h2 class="Regisration-letter"> WELCOME TO <span style="color: #ff6500">CAS</span>
                            <br><span style="font-size: 20px"> USER REGISTRATION</span></h2>

                    </div>
                    <form id='signup' name="signup" action="submit.php"  method="POST">

                        <input class="Regisration-form-text" type="text" id="formName"name="formName" value="Name" onfocus="this.value = '';" required>
                        <input class="Regisration-form-text" type="email" id="formEmail"name="formEmail" value="Email" onfocus="this.value = '';"
                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                        <input class="Regisration-form-text" type="text" id="formNIC"name="formNIC"value="NIC Number" onfocus="this.value = '';"
                               pattern="[0-9A-Za-z]{10}" title="Format: XXXXXXXXXV" required maxlength="10">
                        <input class="Regisration-form-text" type="text" id="formTitle"name="formTitle" value="Title" onfocus="this.value = '';"
                               required>
                        <input class="Regisration-form-text" type="text" id="formMobile"name="formMobile" value="Mobile Number" onfocus="this.value = '';"
                               pattern="^\d{10}$" title="Required 10 numbers" required maxlength="10">
                        <input class="Regisration-form-text" type="text" id="formAddress"name="formAddress" value="Address" onfocus="this.value = '';">
                        <!--<input type="password" value=" Confirm Password" onfocus="this.value = '';" <!--onblur="if (this.value == '') {this.value = ' Confirm Password';}" >-->
                            <div class="recaptcha">
                                <div class="g-recaptcha" data-sitekey="6LcSYQwTAAAAALOQNn_wyIOL7KJ7JtFnpqBJT4lQ" aria-required="true"></div>
                            </div>
                            <div class="submit" style="margin-left:40%">
                                <input type="submit"  name="submit" value="Sign Up" ><input type="submit" onclick="window.location='login.php';" value="cancle" >
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </body>
</html>