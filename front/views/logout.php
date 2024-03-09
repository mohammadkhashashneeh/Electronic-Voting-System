<?php
include "../../back/controllers/users_controller.php";
$user =new Users("router");
$id = $_GET['id'];
$user->logout($id);
    header("location: http://localhost/evs/index.php"); 

?>