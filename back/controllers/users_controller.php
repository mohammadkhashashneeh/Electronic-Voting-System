<?php
class users {
    private $user_type;
    private $id;
    private $restricted_id_no;
    private $restricted_place;
    private $name;
    private $description;
    private $photo;
    private $ssn;
    private $birth_date;
    private $birth_place;
    private $mother_name;
    private $area;
    private $area1;
    private $vision;
    private $phone_number;
    private $user;
    public function __construct($src="back"){
        if($src=="back"){
            include "../models/users_model.php";
        $this->user=new ModelUsers("back");
        }elseif($src=="front"){
            include "../evs/back/models/users_model.php";
        $this->user=new ModelUsers("front");
        }elseif($src=="router"){
            include "../../back/models/users_model.php";
        $this->user=new ModelUsers("router");
        }elseif($src=="home"){
            include "back/models/users_model.php";
        $this->user=new ModelUsers("home");
        }
        
    }
   
    public function add_candedate(){
        if(isset($_POST["submit"])){
            $this->name=$_POST["uname"];
            $this->user_type=$_POST["user_type"];
            $this->birth_place=$_POST["birth_place"];
            $this->mother_name=$_POST["mother_name"];
            $this->restricted_id_no=$_POST["restricted_id_no"];
            $this->restricted_place=$_POST["restricted_place"];
            $this->description=$_POST["candedate_desc"];
            $this->photo=$_POST["photo"];
            $this->ssn=$_POST["ssn"];
            $this->birth_date=$_POST["birth_date"];
            $this->area=$_POST["voting_area"];
            $this->vision=$_POST["candedate_vision"];
            $this->phone_number=$_POST["candedate_phone"];
            $this->user->add_candedate(  $this->user_type,$this->name, $this->ssn,$this->birth_date ,  $this->photo , $this->birth_place , $this->mother_name,$this->area, $this->restricted_id_no, $this->restricted_place ,$this->description,$this->vision,$this->phone_number);
            
        }
    }

    public function add_voter(){
        if(isset($_POST["voter"])){
            $this->name=$_POST["uname"];
            $this->user_type=$_POST["user_type"];
            $this->birth_place=$_POST["birth_place"];
            $this->mother_name=$_POST["mother_name"];
            $this->restricted_id_no=$_POST["restricted_id_no"];
            $this->restricted_place=$_POST["restricted_place"];
            $this->photo=$_POST["photo"];
            $this->ssn=$_POST["ssn"];
            $this->birth_date=$_POST["birth_date"];
            $this->area1=$_POST["v_area"];
            $this->user->add_candedate(  $this->user_type,$this->name, $this->ssn,$this->birth_date ,  $this->photo , $this->birth_place , $this->mother_name,$this->area1, $this->restricted_id_no, $this->restricted_place );
            
        }
    }

    public function get_candedates(){
        return $this->user->get_candedates();
    }

    public function get_candedates_by_id(){
        if(isset($_GET['edit'])){
      
            $id = $_GET['id'];
        return $this->user->get_candedates_by_id($id);
    }
}
public function update_candedate(){
    if(isset($_POST["update_candedate"])){
        $this->name=$_POST["uname"];
        $this->id=$_POST["user_id"];
        $this->user_type=$_POST["user_type"];
        $this->birth_place=$_POST["birth_place"];
        $this->mother_name=$_POST["mother_name"];
        $this->restricted_id_no=$_POST["restricted_id_no"];
        $this->restricted_place=$_POST["restricted_place"];
        $this->description=$_POST["candedate_desc"];
        $this->photo=$_POST["photo"];
        $this->ssn=$_POST["ssn"];
        $this->birth_date=$_POST["birth_date"];
        $this->area=$_POST["voting_area"];
        $this->vision=$_POST["candedate_vision"];
        $this->phone_number=$_POST["candedate_phone"];
        $this->user->update_candedate($this->id,  $this->user_type,$this->name, $this->ssn,$this->birth_date ,  $this->photo , $this->birth_place , $this->mother_name,$this->area, $this->restricted_id_no, $this->restricted_place ,$this->description,$this->vision,$this->phone_number);
        header("location: http://localhost/evs/back/admin/view_candedates.php");
    }
}

public function delete_candedate($id){
    $this->user->delete_candedate($id);
    header("location: http://localhost/evs/back/admin/view_candedates.php");

}

public function update_voter(){
    if(isset($_POST["update_voter"])){
        $this->name=$_POST["uname"];
        $this->id=$_POST["user_id"];
        $this->user_type=$_POST["user_type"];
        $this->birth_place=$_POST["birth_place"];
        $this->mother_name=$_POST["mother_name"];
        $this->restricted_id_no=$_POST["restricted_id_no"];
        $this->restricted_place=$_POST["restricted_place"];
        $this->photo=$_POST["photo"];
        $this->ssn=$_POST["ssn"];
        $this->birth_date=$_POST["birth_date"];
        $this->area=$_POST["voting_area"];
        $this->user->update_voter($this->id,  $this->user_type,$this->name, $this->ssn,$this->birth_date ,  $this->photo , $this->birth_place , $this->mother_name,$this->area, $this->restricted_id_no, $this->restricted_place );
        header("location: http://localhost/evs/back/admin/view_voters.php");
    }
}

public function delete_voter($id){
    $this->user->delete_voter($id);
    header("location: http://localhost/evs/back/admin/view_voters.php");

}
public function total_voters(){
    return $this->user->total_voters();
}
public function total_candedates(){
    return $this->user->total_candedates();
}
public function login(){
    $ssn = $_POST['ssn'];
    $rid = $_POST['rid'];
    return $this->user->login($ssn, $rid);
}
public function logout($id){
     $this->user->logout($id);
}
public function update_setting($key,$value){
    $this->user->update_setting($key,$value);
}
public function get_settings(){
    return $this->user->get_settings();
}
}
?>