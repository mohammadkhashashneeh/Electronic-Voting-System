<?php
if(isset($_GET["update_vote"])){
include "../../back/controllers/voting_controller.php";
$v=new Voting("front");
$v->update_vote($_GET["vid"]);
header("location: http://localhost/evs/candedate.php");
}elseif(isset($_POST['ssn']) && isset($_POST['rid'])){
    include "../../back/controllers/users_controller.php";
$v=new Users("router");
$res = $v->login($_POST['ssn'], $_POST['rid']);
if($res['type'] == "admin"){
    header("location: http://localhost/evs/back/admin/");
}elseif($res['type'] == "vofficer"){
    header("location: http://localhost/evs/back/vofficer/");
}else{
    header("location: http://localhost/evs/candedate.php");
}
} 

?>