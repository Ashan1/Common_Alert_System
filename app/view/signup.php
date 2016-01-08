<?php include "../templates/header.php"; ?>
<script src="../../public/js/user/singup.js"></script>
</head>
<body>
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
            <div class="signup-success hidden col-lg-8 col-md-8 col-sm-8 col-lg-offset-2" id="signup-success">
                <h3>Thank You....!</h3>
                <p>You have registered successfully. Please wait for the administration confirmation. You will get a mail with login details.
                <a href="../../public/index.php">CLICK here</a> to log</p>

            </div>
            <div class="col-lg-10 col-md-10 col-sm-10" id="signup-form">
                <form id="signupform" name="signupform" class="form-horizontal" role="form" method="post">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">First Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="Fname" class="form-control" id="Fname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Last Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="Lname" class="form-control" id="Lname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">NIC Number</label>
                        <div class="col-sm-8">
                            <input type="text" name="nic" class="form-control" id="nic" placeholder="NIC">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Job Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Mobile No</label>
                        <div class="col-sm-8">
                            <input type="tel" name="mobile" class="form-control" id="mobile" placeholder="ex:- 0719514235">
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-7 controls">
                        <button type="submit" id="btn-signup" name="btn-signup" class="btn btn-default btn-primary">
                            <i class="fa fa-hand-o-right"></i>&nbsp;SIGN UP
                        </button>

                        <a href="<?php echo SCRIPT_ROOT ?>/public/index.php"><button type="button" name="btn-cancel" class="btn btn-default btn-primary">
                            <i class="fa fa-ban"></i>&nbsp;Cancel
                        </button></a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

