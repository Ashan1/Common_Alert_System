<?php
    $user_nic = $_SESSION['user_session'];
    $u = $user->user_details($user_nic);
?>
<div class="sidemenu hidden-xs" id="sidemenu">
    <div class="sidemenu-content" id="sidemenu-content">
        <div class="profile">
<!--            <div class="image">
                <img src="" alter=""/>
            </div>-->
            <div class="details">
                <div class="name"><h4><?php echo $u['F_Name'] ." ". $u['L_Name']; ?></h4></div>
                <div class="title"><strong><?php echo $u['E_jobrole']; ?></strong></div>
            </div>
        </div>

        <div class="menu">
            <ul class="nav">
                <li><a href="<?php echo SCRIPT_ROOT ?>/public/home.php">
                        <i class="fa fa-home fa-fw pull-left"></i>
                        Home</a></li>
                <li><a href="<?php echo SCRIPT_ROOT ?>/app/view/alerts.php">
                        <i class="fa fa-exclamation-triangle fa-fw pull-left"></i>
                        Alerts</a></li>
                <li><a href="<?php echo SCRIPT_ROOT ?>/app/view/report-home.php">
                        <i class="fa fa-globe fa-fw pull-left"></i>
                        Disasters</a></li>
                <li><a href="<?php echo SCRIPT_ROOT ?>/app/view/message_inbox.php">
                        <i class="fa fa-envelope fa-fw pull-left"></i>
                        Message</a></li>
                <?php if($u['E_jobrole'] == 'Administrator') { ?>
                <li data-toggle="collapse" data-target="#admin" class="collapsed active"><a href="#">
                        <i class="fa fa-dashboard fa-fw pull-left"></i>
                            Admin Panel</a></li>
                <?php } ?>
                <ul class="nav admin collapse" id="admin">
                    <li id="adminli"><a href="<?php echo SCRIPT_ROOT ?>/app/view/ExternalAuthority_update.php"><i class="fa fa-lock fa-fw pull-left"></i>Ex-Authorities</a></li>
                    <li role="separator" class="divider"></li>
                    <li id="adminli"><a href="<?php echo SCRIPT_ROOT ?>/app/view/usermanage.php"><i class="fa fa-user fa-fw pull-left"></i>Users</a></li>
                </ul>
            </ul>
        </div>
    </div>
</div>