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

                        <input class="Regisration-form-text" type="text" id="formName"name="formName"  placeholder="Name" onfocus="this.value = '';" required>
                        <input class="Regisration-form-text" type="email" id="formEmail"name="formEmail"  placeholder="Email" onfocus="this.value = '';"
                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                        <input class="Regisration-form-text" type="text" id="formNIC"name="formNIC" placeholder="NIC Number" onfocus="this.value = '';"
                               pattern="[0-9]{9}+[V]$" title="Format: XXXXXXXXXV" required maxlength="10">
                        <input class="Regisration-form-text" type="text" id="formTitle"name="formTitle"  placeholder="Title" onfocus="this.value = '';"
                               required>
                        <input class="Regisration-form-text" type="text" id="formMobile"name="formMobile" placeholder="Mobile Number" onfocus="this.value = '';"
                               pattern="^\d{10}$" title="Required 10 numbers" required maxlength="10">
                        <input class="Regisration-form-text" type="text" id="formAddress"name="formAddress"  placeholder="Address" onfocus="this.value = '';" required>
                        <!--<input type="password" value=" Confirm Password" onfocus="this.value = '';" <!--onblur="if (this.value == '') {this.value = ' Confirm Password';}" >-->
                            <div class="recaptcha">
                                <div class="g-recaptcha" data-sitekey="6LcSYQwTAAAAALOQNn_wyIOL7KJ7JtFnpqBJT4lQ" aria-required="true"></div>
                            </div>
                            <div class="submit" style="margin-left:40%">
                                <input type="submit"  name="submit" value="Sign Up" ><input type="submit" onclick="window.location='../../../public/index.php';" value="cancle" >
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </body>
</html>