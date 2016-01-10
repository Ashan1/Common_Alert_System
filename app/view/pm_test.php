<?php
include "../templates/header.php";
?>
</head>
<script>
    function printnotification(json){
        //$("#nn").text("<table>");
/*        $.each(json, function(i, item) {
            $('#nn').text(JSON.stringify(json));
        });*/
        //$("#nn").append("</table>");


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
                    if (response.success != 'No'){
                        var json = response;
                        printnotification(json);
                    } else {
                        console.log('else');
                    }
/*                    var response = JSON.parse(out);
                    var tt = response[i].Tname;
                    alert(tt);*/

                }
            },10000);
        });
    });

</script>

<body>
    <div class="container col-md-4" style="background-color: red;height: 100%; color:#000;" id="nn">
    </div>
</body>
</html>



