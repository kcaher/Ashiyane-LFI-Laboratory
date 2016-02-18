<?php

function checklogin(){
ob_start();
session_start();
if(!isset($_SESSION[$_SERVER['HTTP_HOST']])) {
header("Location: ../../../index.php");
}
}

?>