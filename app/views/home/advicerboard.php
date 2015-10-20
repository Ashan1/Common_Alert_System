<div class="container-fluid col-lg-12">
    <?php
    $result2 = mysql_query("SELECT * FROM `employee` WHERE role='Executive User' ");
         while ($row = mysql_fetch_assoc( $result2)){
             include '../app/views/home/advpanel.php';
         }
    ?>
    <?php mysql_close($connector); ?>
</div>
