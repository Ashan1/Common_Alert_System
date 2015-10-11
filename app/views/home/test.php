<?php
    $url = "http://www.irrigation.gov.lk/index.php?option=com_gmapfp&view=gmapfp&layout=categorie&catid=125&id_perso=0&Itemid=223&lang=en";
    $output = file_get_contents($url);
    echo $output;
?>