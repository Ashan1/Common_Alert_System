<?php include('head.php');?>

<div >
    <aside class="left-side">
        <?php include('../app/views/home/side.php');?>
    </aside>
    <aside class="right-side rgt">
        <div class="col-lg-12">
            <div class="row recent-activity">
                <h3>Recent Activity</h3>
                <div>
                    <ul>
                        <li> <i class="dis-hurricane" style="font-size: 40px"></i></li>
                        <li><h4>Pacific Ocean</h4>09.51 a.m <a href="#">more</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row sub-menu">
            <ul class="nav nav-tabls">
                <li role="presentation" class=""><a href="#summary" aria-controls="summary" role="tab" data-toggle="tab">SUMMARY</a></li>
                <li role="presentation" class=""><a href="#notifications" aria-controls="worldmap" role="tab" data-toggle="tab">NOTIFICATIONS</a></li>
                <li role="presentation" class=""><a href="#activities" aria-controls="worldmap" role="tab" data-toggle="tab">ACTIVITIES</a></li>
                <li role="presentation" class=""><a href="#advicerboard" aria-controls="worldmap" role="tab" data-toggle="tab">ADVICER BOARD</a></li>
            </ul>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="summary">
                <p>Notification extended</p>
            </div>
            <div role="tabpanel" class="tab-pane fade in active" id="notifications">

                <p>Notification extended</p>
            </div>
            //start activities here
            <div role="tabpanel" class=" tab-pane fade in active" id="activities">
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
            //end Activities
            <div role="tabpanel" class=" tab-pane fade in active" id="advicerboard">
                <p>Notification extended</p>

            </div>
    </div>

</div>

    </body>

    </html>