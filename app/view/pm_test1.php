<?php
/**
 * Created by PhpStorm.
 * User: PM
 * Date: 1/9/2016
 * Time: 4:43 PM
 */

require_once '../core/init.php';
require_once '../models/dbConfig.php';

$db = DB::getInstance();

$q = "SELECT * FROM employee ORDER BY Emp_ID DESC LIMIT 1";
$d = $db->query($q);
$r = $d->result();

//echo $r[0]->E_Time;

$t = time();

if($r[0]->E_Time < $t && $r[0]->Admin_auth == 0){
    echo json_encode(array('success' => 'gg'));
    exit();
}
/*$d = 1;
if($d==1){
    echo json_encode(array('success' => 'gg'));
}else if($d==0){
    echo json_encode(array('success' => 'hello'));
    exit();
}*/

