<?php
include "../templates/header.php";
?>


</head>
<body>

<div id="#test">
</div>

</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({cache: false});
        setInterval(function(){

        },1000);
 });
/*    $(document).ready(function(){
        var TIME = 5000;
        keep_on_asking_the_db_for_data();

        function keep_on_asking_the_db_for_data(){
            setTimeout(function(){
                ask_for_data();
                keep_on_asking_the_db_for_data();
            },TIME);
        }

        function ask_for_data(){
            $('#my_div').empty();
            var number = 0;

            $.getJSON("../controllers/new_user.php?query_name=new_users", function(json){
                $.each(json.todo_result,function(){
                    number++;
                    var line = '<li>'+number+ ' ' + this['some_text'] + ' ' + this['some_ID'] + ' ' + this['some_userid'] + '</li>';
                    $('#test').append(line);
                });
            });
        };
    });*/
</script>