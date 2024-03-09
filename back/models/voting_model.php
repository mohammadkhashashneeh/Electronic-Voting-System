<?php
class ModelVoting{
private $con;
    public function __construct($src="back"){
        if($src=="back"){
            include "../../config/config.php";
        $this->con=$con;
        }elseif($src=="front"){
            include "../../config/config.php";
        $this->con=$con;
        }
    }

    public function bulid_voting($title="",$description="",$area="",$type="", $user_id=0,$date="",$imge="",$endtime="",$votes_number=0){
        
       $ins = "INSERT INTO voting VALUES(null,'$title', '$description', '$area','$type',$user_id,'$date','$imge','$endtime','$votes_number')";
        if($this->con->query($ins)){
            echo 'done';
        }else{
            echo 'failed';
        }
    }

    public function update_voting($id=0,$title="",$description="",$area="",$type="", $user_id=0,$date="",$imge="",$endtime="",$votes_number=0){
       
       $ins = "UPDATE voting SET `title`='$title', `description`='$description', `area`='$area',`type`='$type',`user_id`=$user_id , `date`='$date', `cover_image`='$imge', `end_time`='$endtime' WHERE id = $id ";
        if($this->con->query($ins)){
            echo 'done';
        }else{
            echo 'failed';
        }
    }

    public function delete_voting($id){
       
       $ins = "DELETE FROM voting WHERE id = $id";
        if($this->con->query($ins)){
            echo 'done';
        }else{
            echo 'failed';
        }
    }
    public function get_voting(){
        
        $stmt = "SELECT * FROM voting";
        $result = $this->con->query($stmt);

        return $result;
    }

    public function get_voting_by_id($id){
        
        $stmt = "SELECT * FROM voting WHERE id = $id";
        $result = $this->con->query($stmt);

        return $result;
    }
    public function get_voting_by_user_id($id){
        
        $stmt = "SELECT * FROM voting WHERE `user_id` = $id";
        $result = $this->con->query($stmt);

        return $result;
    }



    public function get_voting_numbers_by_id($id){
        
        $stmt = "SELECT * FROM voting WHERE `user_id` = $id ";
        $result = $this->con->query($stmt);

        return $result;
    }

    public function update_vote($id ){
        $vote=$this->get_voting_by_user_id($id);
        $num=0;
        foreach($vote as $v){
         $num=$v["number_votes"];
        }
        $num++;
        $ins = "UPDATE voting SET `number_votes`=$num WHERE `user_id` = $id ";
         $this->con->query($ins);
         return $num;
     }

     public function total_votes(){
         $results = $this->get_voting();
         $sum = 0;
         foreach($results as $result){
             $sum += $result['number_votes'];
         }
         return $sum;
     }
     
}
?>