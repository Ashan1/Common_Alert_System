<?php include "app/templates/header.php"; ?>
<script src="public/js/user/login.js" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"></script>
</head>
<body>
<?php
   
?>

<div class="container-fluid">
    <div class="row login">
        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs lefts">
            <img src="public/images/login_left.png" class="img-responsive" alt="CAS Loging"/>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 rights">
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2 hidden" id="forgotpassword-show">
                <div class="head-text"><h4>PASSWORD <strong>FORGOT</strong></h4></div>
                <div id="password-reset-show">
                    <span><p>Please enter your email and click below button to send password reset request to Administrator.</p></span>
                    <form method="post" id="forgotpassword-admin" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="resetemail" class="form-control" id="resetemail" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="col-sm-12">
                               <input type="submit" value="Send Password Rest Request" id="password-reset">
                           </div>
                        </div>
                    </form>
                </div>
                <div id="password-reset-msg" class="hidden">
                    <p>Your request sent to Administrator, once password is reset you will receive a email.</p>
                </div>

            </div>
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2" id="login-show">
                <div class="head-text"><h4>WELCOME TO <strong>CAS</strong></h4></div>
                <div class="login-error hidden" id="login-error"><p>Username or Password is invalid please try again.</p></div>
                <form id="loginform" class="form-horizontal" role="form" method="post">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>

                    <div class="input-group">
                            <input type="button" value="Forgot Password" id="forgotpassword">
                            </input>
                    </div>

                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <button type="submit" name="btn-login" class="btn btn-default btn-primary" id="btn-login">
                                <i class="fa fa-sign-in"></i>&nbsp;SIGN IN
                            </button>
                            <a href="app/view/signup.php"><button type="button" name="btn-login" class="btn btn-default btn-primary">
                                <i class="fa fa-hand-o-right"></i>&nbsp;SIGN UP
                            </button></a>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>

