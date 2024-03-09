<?php
if(isset($_POST["update_voting"])){
include "../controllers/voting_controller.php";
$v=new Voting();
$v->update_voting();
}else if(isset($_GET["id"])){
    include "../controllers/voting_controller.php";
    $v=new Voting();
    $v->delete_voting($_GET["id"]);
}else if(isset($_POST["update_candedate"])){
    include "../controllers/users_controller.php";
    $v=new Users();
    $v->update_candedate();
}else if(isset($_GET["cdelete"])){
    include "../controllers/users_controller.php";
    $v=new Users();
    $v->delete_candedate($_GET["cid"]);
}else if(isset($_POST["update_voter"])){
    include "../controllers/users_controller.php";
    $v=new Users();
    $v->update_voter();
}else if(isset($_GET["vdelete"])){
    include "../controllers/users_controller.php";
    $v=new Users();
    $v->delete_voter($_GET["vid"]);
}else if(isset($_GET["l"])){
    include "../controllers/users_controller.php";
    $v=new Users();
    $v->update_setting("language", $_GET["l"]);
    header("location: http://localhost/evs/back/admin/");
}
?>