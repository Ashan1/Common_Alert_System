<html>
    <head>
        <title>SignUp</title>
        <link href="../../../public/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../../../public/stylesheets/main.css" rel="stylesheet" type="text/css">
        <link href="../../../public/stylesheets/style.css" rel="stylesheet" type="text/css">
        <script src="../../../public/javascripts/api.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
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
                    <form  action="submit.php" method="POST">
                        <input class="Regisration-form-text" type="name" name="formName" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}">
                        <input class="Regisration-form-text" type="email" name="formEmail" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}" required>
                        <input class="Regisration-form-text" type="nic" name="formNIC"value="NIC Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'nic';}">
                        <input class="Regisration-form-text" type="title" name="formTitle" value="Title" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'title';}">
                        <input class="Regisration-form-text" type="mobile" name="formMobile" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mobile';}">
                        <input class="Regisration-form-text" type="address" name="formAddress" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'address';}" >
                        <!--<input type="password" value=" Confirm Password" onfocus="this.value = '';" <!--onblur="if (this.value == '') {this.value = ' Confirm Password';}" >-->
                            <div class="recaptcha">
                                <div class="g-recaptcha" data-sitekey="6LcSYQwTAAAAALOQNn_wyIOL7KJ7JtFnpqBJT4lQ"></div>
                            </div>
                            <div class="submit" style="margin-left:40%">
                                <input type="submit" onclick="myFunction()" value="Sign Up" ><input type="submit" onclick="myFunction()" value="cancle" >
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </body>
</html>