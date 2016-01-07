</head>
<body>
<?php include "../templates/header.php"; ?>
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
                <form id="signupform" name="signupform" class="form-horizontal" role="form" method="post">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">First Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="Fname" class="form-control" id="Fname" placeholder="First Name" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Last Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="Lname" class="form-control" id="Lname" placeholder="Last Name" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">NIC Number</label>
                        <div class="col-sm-8">
                            <input type="number" name="nic" class="form-control" id="nic" placeholder="NIC" required="true">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Title</label>
                        <div class="col-sm-8">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Job Title" required="true">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Mobile No</label>
                        <div class="col-sm-8">
                            <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Mobile Number" required="true">
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

                <!--<div class="form-style" id="contact_form">
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
                </div>-->

            </div>

        </div>
    </div>
</div>

