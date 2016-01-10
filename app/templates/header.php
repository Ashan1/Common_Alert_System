<?php define( 'SCRIPT_ROOT', 'http://localhost/Common_Alert_System' );

?>
<html>
<meta charset="UTF-8">
<title>CAS</title>
<head>
<!--Jquery-->
    <script rel="script" type="text/javascript" src="<?php echo SCRIPT_ROOT ?>/public/js/jquery-1.11.3.js"></script>
    <script src="<?php echo SCRIPT_ROOT ?>/public/js/jquery.min.js"></script>
    <script src="<?php echo SCRIPT_ROOT ?>/public/js/jquery.validate.js"></script>
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
    <link href="<?php echo SCRIPT_ROOT ?>/public/css/disfont/disasters.css" type="text/css" rel="stylesheet"/>
<!--End CAS -->
<!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/manifest.json">
    <link rel="mask-icon" href="<?php echo SCRIPT_ROOT ?>/public/images/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">

<!-- Fav Icon -->

<?php require_once '/../models/dbConfig.php'; ?>

