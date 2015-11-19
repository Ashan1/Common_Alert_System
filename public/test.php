<?php

require_once '../app/core/init.php';

$one = DB::getInstance()->query("SELECT * FROM employee");
