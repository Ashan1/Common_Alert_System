<?php include 'header.php'; ?>
<!--<link href="../../../public/stylesheets/new.css" rel="stylesheet">-->
<div>
    <aside class="left-side">
        <?php include 'side2.php'; ?>
    </aside>
    <aside class="right-side rgt">
        <!-- Page Content -->

        <div class="col-lg-12">
            <div id="layout">

                <div style="background-color:green;">
                    <div id="recent">

                        <h2 style="color:#000000; float:left;">EXTERNAL AUTHORITY DETAILS</h2>
                    </div>
                </div> <!--recent ends-->


                <div id="content" scrolling="yes">
                    <?php
                    include "../../../public/php/connect.php";

                    //execute the SQL query and return records
                    $result = mysql_query("SELECT Auth_name, Auth_tel, Auth_address, Auth_email FROM external_authority ");
                    ?>

                    <table class="table" >
                        <thead>
                        <tr>
                            <th>Authority-Name</th>
                            <th>Authority-Telephonr No.</th>
                            <th>Authority-Address</th>
                            <th>Authority-Email</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        while( $row = mysql_fetch_assoc( $result ) ){
                            echo
                            "<tr>
              <td>{$row['Auth_name']}</td>
              <td>{$row['Auth_tel']}</td>
              <td>{$row['Auth_address']}</td>
              <td>{$row['Auth_email']}</td>
		    </tr>\n";
                        }
                        ?>

                        </tbody>
                    </table>
                    <?php mysql_close($connector); ?>
                </div>



            </div><!--layout ends-->
        </div>
    </aside>

</div>

</body>
</html>