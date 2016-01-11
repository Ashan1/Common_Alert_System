
<?php

$def_pass= "cas@123";
$new_pass = password_hash($def_pass, PASSWORD_DEFAULT);
$dd = "cas@123";
if(password_verify($new_pass,$dd) == true){
    echo "jkagsj";
}

?>