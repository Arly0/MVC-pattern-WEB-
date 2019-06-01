<?php
$mail = $_REQUEST['email'];
include_once '../../db.php';
include_once '../../serverSide/lib.php';

$db = db::getConnect();

if(findMail($mail, $db)) {
    echo '1';
}
else{
    echo '0';
}
?>