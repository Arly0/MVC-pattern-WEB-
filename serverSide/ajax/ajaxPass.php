<?php
$mail = $_REQUEST['email'];
$pass = $_REQUEST['pass'];

include_once '../../db.php';
include_once '../../serverSide/lib.php';
$db = db::getConnect();

if(checkPass($mail, $db, $pass)){
    echo '1';
}
else{
    echo '0';
}
?>