<?php include "../app/templates/header.php"; ?>
</head>
<body>
<?php require_once '../app/models/dbConfig.php';
    if($user->is_loggedin()!=""){
        $user->redirect('home.php');
    }

    if(isset($_POST['btn-login'])){
        $uname = $_POST['username'];
        $upass = $_POST['password'];

        if($user->login($uname,$upass)){
            $user->redirect('home.php');
        }
        else{
            $user->redirect('index.php');
        }
    }
?>

<div class="container-fluid">
    <div class="row login">
        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs lefts">
            <img src="images/login_left.png" class="img-responsive" alt="CAS Loging"/>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 rights">
            <div class=""></div>
            <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                <div class="head-text"><h4>WELCOME TO <strong>CAS</strong></h4></div>
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
                            <label>
                               <a href="#">Forgot Password</a>
                            </label>
                    </div>

                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <button type="submit" name="btn-login" class="btn btn-default btn-primary">
                                <i class="fa fa-sign-in"></i>&nbsp;SIGN IN
                            </button>
                            <button type="submit" name="btn-login" class="btn btn-default btn-primary">
                                <i class="fa fa-hand-o-right"></i>&nbsp;SIGN UP
                            </button>
                        </div>
                    </div>
                    <div class="login-error"><p>Username or Password is invalid please try again. After 5 attempts your account will block.</p></div>
                </form>

            </div>

        </div>
    </div>
</div>

