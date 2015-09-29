<html>
    <head>
        <title>SignUp</title>
        <link href="../../../public/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../../../public/stylesheets/main.css" rel="stylesheet" type="text/css">
        <link href="../../../public/stylesheets/style.css" rel="stylesheet" type="text/css">
        <script src="../../../public/javascripts/api.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="signup-image col-sm-6">
                <img src="../../../public/images/signup.png" style="width:550px; height:550px" alt="abc">
            </div>
            <div class=" signup-form col-sm-6">
                <div class="main">

                    <div  class="wrap">
                        <div class="Regisration">
                            <div class="Regisration-head">
                                <h2 class="Regisration-letter"> WELCOME TO <span style="color: #ff6500">CAS</span>
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
                                <div class="Remember-me">
                                    <!--div class="p-container">
                                        <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>I agree to the Terms and Conditions</label>
                                        <div class ="clear"></div>
                                    </div>-->
                                    <div class="g-recaptcha" style="margin-left: 60px" data-sitekey="6LcSYQwTAAAAALOQNn_wyIOL7KJ7JtFnpqBJT4lQ"></div>

                                    <div class="g-recaptcha-response" method="post" data-sitekey="6LcSYQwTAAAAAO5MLGIQ1D6zZOUUjShenSkSpIr5"></div>
                                    <form method="post" action="file-upload-1.htm" name="submit" enctype="multipart/form-data">
                                        <input type="file" style="margin-left: 60px" name="fileField"></form>
                                    <div class="submit" style="margin-left:40%">
                                        <input type="submit" onclick="myFunction()" value="Sign Up" >
                                    </div>
                                     <div class="clear"> </div>
                                </div>

                            </form>
                        </div>
                       <!--<div class="Login">
                            <div class="Login-head">
                                <h3>LOGIN</h3>
                            </div>

                            <form>
                                <div class="ticker">
                                    <h4>Username</h4>
                                    <input type="text" value="John Smith" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'John Smith';}" ><span> </span>
                                    <div class="clear"> </div>
                                </div>
                                <div>
                                    <h4>Username</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" >
                                    <div class="clear"> </div>
                                </div>
                                <div class="checkbox-grid">
                                    <div class="inline-group green">
                                        <label class="radio"><input type="radio" name="radio-inline"><i> </i>Remember me</label>
                                        <div class="clear"> </div>
                                    </div>

                                </div>

                                <div class="submit-button">
                                    <input type="submit" onclick="myFunction()" value="LOGIN  >" >
                                </div>
                                <div class="clear"> </div>
                        </div>

                        </form>-->
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>