<?php
class ModelUsers{
private $con;
    public function __construct($src="back"){
        if($src=="back"){
            include "../../config/config.php";
        $this->con=$con;
        }elseif($src=="front"){
            include "../evs/config/config.php";
        $this->con=$con;
        }elseif($src=="router"){
            include "../../config/config.php";
        $this->con=$con;
        }elseif($src=="home"){
            include "config/config.php";
        $this->con=$con;
        }
        
    }

    public function add_candedate($user_type="",$name="", $ssn="",$birth_date="" ,  $photo="" , $birth_place="" , $mother_name="",$area="", $restricted_id_no="", $restricted_place="" ,$description="",$vision="",$phone_number=""){
        
       $ins = "INSERT INTO users VALUES(null,'$user_type','1234','$name','$photo','$ssn','$birth_date','$birth_place', '$mother_name','$area',' $restricted_id_no', '$restricted_place','$description','$vision','$phone_number',0)";
        $this->con->query($ins);
    }

    public function get_candedates(){
        
        $stmt = "SELECT * FROM users";
        $result = $this->con->query($stmt);

        return $result;
    }
    public function get_candedates_by_id($id){
        
        $stmt = "SELECT * FROM users WHERE id = $id";
        $result = $this->con->query($stmt);

        return $result;
    }

    public function update_candedate($id,$user_type="",$name="", $ssn="",$birth_date="" ,  $photo="" , $birth_place="" , $mother_name="",$area="", $restricted_id_no="", $restricted_place="" ,$description="",$vision="",$phone_number=""){
        
       $ins = "UPDATE users SET `user_type`='$user_type',`password`='1234',`name`='$name',`photo`='$photo',`ssn`='$ssn',`birth_date`='$birth_date',`birth_place`='$birth_place', `mother_name`='$mother_name',`area`='$area',`restricted_id_no`=' $restricted_id_no', `restricted_place`='$restricted_place',`description`='$description',`vision`='$vision',`phone_number`='$phone_number' WHERE id = $id ";
        $this->con->query($ins);
    }

    public function delete_candedate($id){
        
       $ins = "DELETE FROM users WHERE id = $id";
        $this->con->query($ins);
    }
    public function update_voter($id,$user_type="",$name="", $ssn="",$birth_date="" ,  $photo="" , $birth_place="" , $mother_name="",$area="", $restricted_id_no="", $restricted_place="" ){
        
       $ins = "UPDATE users SET `user_type`='$user_type',`password`='1234',`name`='$name',`photo`='$photo',`ssn`='$ssn',`birth_date`='$birth_date',`birth_place`='$birth_place', `mother_name`='$mother_name',`area`='$area',`restricted_id_no`=' $restricted_id_no', `restricted_place`='$restricted_place' WHERE id = $id ";
        $this->con->query($ins);
    }

    public function update_login($id,$login){
        
        $ins = "UPDATE users SET `login`=$login WHERE id = $id ";
         $this->con->query($ins);
     }

    public function delete_voter($id){
        
       $ins = "DELETE FROM users WHERE id = $id";
        $this->con->query($ins);
    }
    public function total_voters(){
        $results = $this->get_candedates();
        $sum = 0;
        foreach($results as $result){
            if ($result ['user_type'] == 'voter')
            $sum += 1;
        }
        return $sum;
    }
    public function total_candedates(){
        $results = $this->get_candedates();
        $sum = 0;
        foreach($results as $result){
            if ($result ['user_type'] == 'candedte')
            $sum += 1;
        }
        return $sum;
    }

    public function check_login($ssn, $rid){
        $stmt = "SELECT * FROM users WHERE `ssn` = $ssn AND `restricted_id_no` = $rid";
        $result = $this->con->query($stmt);
        $uname = array();;
        foreach($result as $r){
            if(!($r["ssn"] == $ssn && $r["restricted_id_no"] == $rid)){
                return false;
            }else{
                $uname["name"] = $r["name"];
                $uname["id"] = $r["id"];
                $uname["login"] = $r["login"];
                $uname["type"] = $r["user_type"];
                $uname["area"] = $r["area"];
            }
        }
        return $uname;
    }
    public function login($ssn = "", $rid = ""){
        $res = array();
        if(! empty($ssn) && !empty($rid)){
            $res = $this->check_login($ssn, $rid);
            if(!$res == false){
            session_start();
            $this->update_login($res['id'],1);

            $_SESSION["name"] = $res['name'];
            $_SESSION["id"] = $res['id'];
            $_SESSION["login"] = $res['login'];
            $_SESSION["type"] = $res['type'];
            $_SESSION["area"] = $res['area'];

            }else{
                $response = array(
                    "erorr" => "invalid ID or RESTRICTED NUMBER, PLEASE CHECK YOUR CREDINTALS!"
                );
            }
        }else{
            $response = array(
                "erorr" => "you should fill all your credientals!"
            );
        }
        return $res;
    }

    public function logout($id){
        
            session_start();      
            session_destroy();

            unset($_SESSION["name"]);
            unset($_SESSION["id"]);
            unset($_SESSION['login']);
            unset($_SESSION['type']);
            unset($_SESSION['area']);

              session_start();
              $this->update_login($id,0);
            session_destroy();
            echo $id;
        
  }
  public function update_setting($key,$value){
    $ins = "UPDATE st SET `language`= $value WHERE id = 1 ";
    $this->con->query($ins);
  }
  public function get_settings(){
        
    $stmt = "SELECT * FROM st";
    $result = $this->con->query($stmt);

    return $result;
}

}
?>