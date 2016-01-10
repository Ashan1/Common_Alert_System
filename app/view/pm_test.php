<?php
include "../templates/header.php";
?>
</head>
<script>
    function notification(){
        $('#nn').removeClass('hidden');
    }
    $(document).ready(function(){

        $.ajaxSetup({cache: false});
        setInterval(function(){
            $.ajax({
                type: "POST",
                url: 'pm_test1.php',
                data: 'data_string',
                dataType: "JSON", //tell jQuery to expect JSON encoded response
                timeout: 1000,
                success: function (response) {
                    if (response.success === 'gg'){
                        notification();
                    } else {
                        console.log('else');
                    }
                }
            });
        },3000);
    });

</script>

<body>
    <div class="hidden container col-md-4" style="background-color: red;height: 40px" id="nn">
    </div>
</body>
</html>



