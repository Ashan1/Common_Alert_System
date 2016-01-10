<?php
include "../templates/header.php";

require_once '../models/dbConfig.php';
    if($user->is_loggedin()==""){
        $user->redirect('index.php');
    }
?>
</head>

<body>
<div>
    <div><?php include "../templates/topmenu.php"; ?></div>
    <div>
        <aside class="left-side"><?php include "../templates/sidemenu.php"; ?></aside>
        <div class="right-side">

            <div class="container-fluid">
                <div  style="text-align: center;display:none" class="head1"><h1 > DISASTER MANAGEMENT CENTER</h1>
                    <h2 > Today Alerts Report</h2>
                    <h4> Date:<?php echo $rd=date("Y-m-d"); ?><br>
                    </h4>
                </div>
                <div style="text-align: right;"><form name="myForm" action="" onsubmit="return Printpage()" method="post">
                        Print Report <button class="btn1" value="print">print</button>
                    </form></div>
                <?php include'../controllers/show_alert.php';?>
            </div>
        </div>
    </div>
</div>
<script>
    function Printpage() {
        var alphaExp = /^[a-zA-Z]+$/;
        if(document.myForm.name.match(alphaExp)){
            print();
            document.myForm.name.focus();
            return false;
        }
    };
    $(document).ready(function() {
        $(".btn1").click(function () {
            $('#sidemenu').animate({width: 'toggle'}, 350);
            $('.left-side').toggleClass("collapse-left");
            $(".right-side").toggleClass("strech");
            $(".btn1").hide();
            $(".head1").show();
        });
    })
</script>
