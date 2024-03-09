<?php

session_start();
if(!$_SESSION['login'] == 1){
    header("location: http://localhost/evs/login.php"); 
}else{
require_once "front/includes/vheader.php";
include "front/views/candedates.php";
require_once "front/includes/footer.php";
}
?>