<?php
include "back/controllers/users_controller.php";
$user = new Users("home");
$lng = $user->get_settings();
$ln = "";
foreach($lng as $l){
   $ln = $l['language'];
}
include  "language/$ln.php";
require_once "front/includes/header.php";
include "front/views/legislation.php";
require_once "front/includes/footer.php";

?>