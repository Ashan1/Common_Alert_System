
<?php

    //$url = "http://www.irrigation.gov.lk/index.php?option=com_gmapfp&view=gmapfp&layout=categorie&catid=125&id_perso=0&Itemid=223&lang=en";
    $url = "http://www.irrigation.gov.lk/index.php?option=com_gmapfp&view=gmapfp&layout=categorie&catid=124&id_perso=0&Itemid=221&lang=en";
    $html = file_get_contents($url);
    //$reg = '/\([0-9]+(.)[0-9]+,[0-9]+(.)[0-9]+\);\s+(createMarker)\([0-9]+,\s+(point),\s+\"(<div)\s+(class=)\'[a-z]+(_)[a-z]+\'\s+(style=)\'[a-z]+(:)[0-9]+(px)\'(><span>)(.*)(<)\/(span>)(<br)\s+\/(><br)\s+\/(><table><table><tr><td><)\/(td><)\/(tr><)\/(table><tr><td><table)\s+(class=)\\\"(mtable)\\\"\s+(style=)\\\"(width:)\s+[0-9]+(%;)\\\"\s+(border=)\\\"[0-9]\\\"(><tbody><tr)\s+(class=)\\\"[a-z][0-9]\\\"(><td>)[A-z]+(<)\/(td><td>)(.*)(((<)\/(td><)\/(tr><tr)\s+(class=)\\\"[a-z][0-9]\\\"(><td>)(.*)(<)\/(td><td>)[A-z]+\s+(-)\s+[0-9](.)[0-9]+(<br)\s+\/(>)[A-z]+\s+(-)\s+[0-9]+(.)[0-9]+(<)\/(td>))|(<)\/(td><)\/(tr><tr)\s+(class=)\\\"[a-z][0-9]\\\"(><td>)(Nearest City<)\/(td><td>)(.*)(<)\/(td><)\/(tr><tr)\s+(class=)\\\"[a-z][0-9]\\\"(><td>Major Basin))/';
    $reg = '/\(([0-9]+(.)[0-9]+),([0-9]+(.)[0-9]+)\);\s+(createMarker)\([0-9]+,\s+(point),\s+\"(<div)\s+(class=)\'[a-z]+(_)[a-z]+\'\s+(style=)\'[a-z]+(:)[0-9]+(px)\'(><span>)(.*)(<)\/(span>)(<br)\s+\/(><br)\s+\/(><table><table><tr><td><)\/(td><)\/(tr><)\/(table><tr><td><table)\s+(class=)\\\"(mtable)\\\"\s+(style=)\\\"(width:)\s+[0-9]+(%;)\\\"\s+(border=)\\\"[0-9]\\\"(><tbody><tr)\s+(class=)\\\"[a-z][0-9]\\\"(><td>)[A-z]+(<)\/(td><td>)(.*)(((<)\/(td><)\/(tr><tr)\s+(class=)\\\"[a-z][0-9]\\\"(><td>)(.*)(<)\/(td><td>)[A-z]+\s+(-)\s+[0-9](.)[0-9]+(<br)\s+\/(>)[A-z]+\s+(-)\s+[0-9]+(.)[0-9]+(<)\/(td>))|(<)\/(td><)\/(tr><tr)\s+(class=)\\\"[a-z][0-9]\\\"(><td>)(Nearest City<)\/(td><td>)(.*)(<)\/(td>))(<)\/(tr><tr)\s+(class=)\\\"[a-z][0-9]\\\"(><td>(.*)<)\/(td>)(<td>)(.*)(<)\/(td><)\/(tr><tr)\s+(class=)\\\"[a-z][0-9]\\\"(><td>)(Catchment Area \(ha\))(<br)\s+\/(><)\/(td>)(<td>)(.*)(<)\/(td>)(<)\/(tr><tr)\s+(class=)\\\"[a-z][0-9]\\\"\s+(valign=)\\\"(top)\\\"(><td>)(Capacity @ F.S.L \(MCM\))(<br)\s+\/(><)\/(td>)(<td>)(.*)(<)\/(td>)(<)\/(tr><tr)\s+(class=)\\\"[a-z][0-9]\\\"(><td>)(Specified Acerage \(ha\))(<br)\s+\/(><)\/(td>)(<td>)(.*)(<)\/(td>)(<)\/(tr><tr)\s+(class=)\\\"[a-z][0-9]\\\"(><td>)(Maximum Bund Height \(m\))(<br)\s+\/(><)\/(td>)(<td>)(.*)(<)\/(td>)(<)\/(tr>)/';
    //$reg = '/\([0-9]+(.)[0-9]+,[0-9]+(.)[0-9]+\);\s+(createMarker)\([0-9]+,\s+(point),\s+\"(<div)\s+(class=)\'[a-z]+(_)[a-z]+\'\s+(style=)\'[a-z]+(:)[0-9]+(px)\'(><span>)(.*)(<)\/(span>)(<br)\s+\/(><br)\s+\/(><table><table><tr><td><)\/(td><)\/(tr><)\/(table><tr><td><table)\s+(class=)\\\"(mtable)\\\"\s+(style=)\\\"(width:)\s+[0-9]+(%;)\\\"\s+(border=)\\\"[0-9]\\\"(><tbody><tr)\s+(class=)\\\"[a-z][0-9]\\\"(><td>)[A-z]+/';
    preg_match_all($reg, $html, $posts, PREG_SET_ORDER);

    //var_dump($posts);

    $arrlat = array();
    $arrlong = array();
    foreach ($posts as $post) {
        $arrlat[] = $post[1];
        $arrlong[] = $post[3];
        echo "<table style='border: thin solid #000'>
                <th>$post[14]</th>
                <tr>
                <td><p>District</p></td>
                <td>$post[34]</td>
                </tr>

                <tr>
                <td>$post[42]</td>
                <td>$post[1]</br>
                    $post[3]</td>
                </tr>

                <tr>
                <td>$post[90]</td>
                <td>$post[95]</td>
                </tr>

                <tr>
                <td>$post[67]</td>
                <td>$post[70]</td>
                </tr>

                <tr>
                <td>$post[102]</td>
                <td>$post[107]</td>
                </tr>
</table>";

        //echo $post[1]; //Latitude
        //echo $post[3]; //Longitude
        //echo $post[14];//Resovire name
        //echo " ";
        //echo $post[34];//District name
        //echo "<br />";
        //echo $post[42];//Co-ordinates
        //echo $post[67];//Major Basin
        //echo $post[70];//Basin River
        //echo $post[76];//Catchment area
        //echo $post[81];//Catchment area value
        //echo $post[90];//Capacity
        //echo $post[95];//Capacity value
        //echo $post[102];//Specified area
        //echo $post[107];//Specified area value
        //echo $post[114];//Bund Height
        //echo $post[119];//Bund height value


    }



    //echo "<p>" . count($posts) . " posts found</p>";


    /*$html = file_get_contents("http://www.programminghelp.com/");

    preg_match_all(
        '/<h2><a href="(.*?)" rel="bookmark" title=".*?">(.*?)<\/a><\/h2>/s',
        $html,
        $posts, // will contain the article data
        PREG_SET_ORDER // formats data into an array of posts
    );



   */


?>