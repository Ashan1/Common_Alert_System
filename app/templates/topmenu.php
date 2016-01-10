<?php
$user_nic = $_SESSION['user_session'];
$u = $user->user_details($user_nic);
$msg = $user->unread_messages($user_nic);
?>
<nav class="navbar navbar-default topnav">
    <div><a href="index.php" class="logo"></a></div>
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed navc" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left hidden-xs">
                <li class="sidetoglle"><a href="#" id="toggleside" class="sidebar-toggle" data-toggle="offcanvas"><i class="fa fa-reorder"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown visible-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-code-fork"></i>
                        <span>Main Menu</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">
                                <i class="fa fa-home fa-fw pull-right"></i>
                                Home</a></li>
                        <li><a href="#">
                                <i class="fa fa-globe fa-fw pull-right"></i>
                                Disasters</a></li>
                        <li><a href="#">
                                <a href="#"><i class="fa fa-dashboard fa-fw pull-right"></i>
                                    Admin Panel</a></li>
                    </ul>
                </li>




                <li role="separator" class="divider"></li>
                <li class="hidden-xs"><a href="<?php echo SCRIPT_ROOT ?>/app/view/msg_inbox.php">
                        <i class="fa fa-envelope"></i>
                        <span class="label label-warning"><?php echo $msg ?></span>
                    </a></li>
                <li class="hidden-xs"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="label label-success">4</span>
                    </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i>
                        <span><?php echo $u['F_Name']; ?></span> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo SCRIPT_ROOT ?>/app/view/profile.php">
                                <i class="fa fa-user fa-fw pull-right"></i>
                                Profile</a></li>
<!--                        <li><a href="#">
                                <i class="fa fa-cog fa-fw pull-right"></i>
                                Settings</a></li>-->
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo SCRIPT_ROOT ?>/app/controllers/logout.php">
                                <i class="fa fa-power-off fa-fw pull-right"></i>
                                Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!--Toggle Side menu-->
<script>
    $('#toggleside').click(function() {
        $('#sidemenu').animate({width:'toggle'},350);
        $('.left-side').toggleClass("collapse-left");
        $(".right-side").toggleClass("strech");
    });
</script>

<!--End toggle side menu-->