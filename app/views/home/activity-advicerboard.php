<div class="container-fluid">
<div>
<?php
                include "connect.php";

                //execute the SQL query and return records
                $result = mysql_query("SELECT A_date, A_time, A_description, A_status FROM activities ");
                ?>

                <table class="table table-striped th" >
                    <col width="100">
                    <col width="100">
                    <col width="500">
                    <col width="100">
                    <thead>
                    <tr CLASS="thcolor">
                        <th>DATE</th>
                        <th>TIME</th>
                        <th style="width:100px;">DESCRIPTION</th>
                        <th>STATUS</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    while( $row = mysql_fetch_assoc( $result ) ){
                        echo
                        "<tr>
              <td>{$row['A_date']}</td>
              <td>{$row['A_time']}</td>
              <td >{$row['A_description']}</td>
              <td>{$row['A_status']}</td>
		  </tr>\n";
                    }
                    ?>
                    </tbody>
                </table>
                <?php mysql_close($connector); ?>
            </div>
            <div role="tabpanel" class="tab-pane fade in active" id="advicerboard">
                <div class="container-fluid col-lg-12">
                        <?php
                        include "connect.php";
                        $result2 = mysql_query("SELECT * FROM `employee` WHERE role='Executive User' ");

                        while ($row = mysql_fetch_assoc( $result2)){
                            include 'advpanel.php';
                        }
                        ?>
                        <?php mysql_close($connector); ?>
                </div>
            </div>

</div>