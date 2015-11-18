<div>
    <div>
        <div class="login_div">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 login_div">
            <h3 class="login_h text-center">WELCOME TO <span class="span_cas">CAS</span></h3>
            <h2 class="login_h text-center">USER LOGIN</h2>
            <form class="login-form" action="../app/models/Auth.php" id="login_form" method="post" role="form">

                <div class="input-group col-sm-offset-1 col-sm-11">
                    <input type="email" name = "User_Name" class="form-control" id="username" placeholder="Username" required>
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                </div>

                <div>
                    <br>
                </div>

                <div class="input-group col-sm-offset-1 col-sm-11">
                    <input type="password" name ="Password" class="form-control" id="pwd" placeholder="Password" required>
                            <span class="input-group-addon">
                                <i class="glyphicon glyphicon-lock"></i>
                            </span>
                </div>

                <div class="col-sm-12">
                    <br>
                    <div class="col-sm-offset-1 col-sm-11">
                        <a href="#" ><span class="span_white">Forgot password?</span></a>
                    </div>
                </div>

                <div class="col-sm-9">
                    <button type="submit" class="btn btn-sign pull-right">Sign in </button>
                </div>

                <div class="col-sm-3">
                    <button id="signup" class="btn btn-sign pull-right"><a href="../app/views/home/signup.php">Sign up</a></button>

                </div>
            </form>
        </div>
    </div>
</div>
