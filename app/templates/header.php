<?php define( 'SCRIPT_ROOT', 'http://localhost/Common_Alert_System' );

?>
<html>
<meta charset="UTF-8">
<title>CAS</title>
<head>
<!--Jquery-->
    <script rel="script" type="text/javascript" src="<?php echo SCRIPT_ROOT ?>/public/js/jquery-1.11.3.js"></script>
    <script src="<?php echo SCRIPT_ROOT ?>/public/js/jquery.min.js"></script>
   <!-- <script src="js/menu.js" rel="script" type="text/javascript"></script>-->
    <script src="<?php echo SCRIPT_ROOT ?>/public/js/cas.js" rel="script" type="text/javascript"></script>
    <script src="<?php echo SCRIPT_ROOT ?>/public/js/circle-progress.js" rel="script" type="text/javascript"></script>
    <script src="<?php echo SCRIPT_ROOT ?>/public/js/circle-progress.js" rel="script" type="text/javascript" ></script>
    <script src="<?php echo SCRIPT_ROOT ?>/public/js/jquery.ba-resize.min.js" rel="script" type="text/javascript"></script>
<!--Bootstrap-->
    <link href="<?php echo SCRIPT_ROOT ?>/public/css/bootstrap.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo SCRIPT_ROOT ?>/public/css/bootstrap-theme.css" type="text/css" rel="stylesheet"/>
    <script rel="script" type="text/javascript" src="<?php echo SCRIPT_ROOT ?>/public/js/bootstrap.js"></script>
<!--End Bootstrap-->

<!--CAS Custome -->
    <link href= "<?php echo SCRIPT_ROOT ?>/public/css/cas.css" type="text/css" rel="stylesheet"/>
    <!--<link href="css/menuf.css" type="text/css" rel="stylesheet"/>-->
    <link href="<?php echo SCRIPT_ROOT ?>/public/css/font-awesome.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo SCRIPT_ROOT ?>/public/css/disasterfonts.css" type="text/css" rel="stylesheet"/>
<!--End CAS -->

<?php require_once '/../models/dbConfig.php'; ?>

