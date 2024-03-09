<?php
class voting {
    private $id;
    private $title;
    private $description;
    private $area;
    private $type;
    private $user_id;
    private $date;
    private $imge;
    private $end_time;
    private $votes_number;
    private $Model;
    public function __construct($src="back"){
        if($src=="back"){
            include "../models/voting_model.php";
        $this->Model=new ModelVoting("back");
        }elseif($src=="front"){
            include "../../back/models/voting_model.php";
            $this->Model=new ModelVoting("front");

        }
        
    }

    public function get_voting(){
        

       
         return $this->Model->get_voting();
    }

    public function get_voting_by_id(){
        if(isset($_GET['edit'])){
      
        $id = $_GET['id'];
      
         return $this->Model->get_voting_by_id($id);
        }
    }

    public function get_voting_numbers_by_id($id){
      return $this->Model->get_voting_numbers_by_id($id);
    }

    public function build_votings(){
        if(isset($_POST["build_voting"])){
           
            $this->title=$_POST["voting_title"];
            $this->description=$_POST["voting_desc"];
            $this->area=$_POST["voting_area"];
            $this->type=$_POST["voting_type"];
            $this->user_id=$_POST["select_candedate"];
            $this->date=$_POST["voting_date"];
            $this->imge=$_POST["voting_cover"];
            $this->end_time=$_POST["endtime"];
            $this->votes_number=0;
            
            $this->Model->bulid_voting($this->title , $this->description , $this->area , $this->type, $this->user_id , $this->date , $this->imge , $this->end_time , $this->votes_number);
        }
    }

    public function update_voting(){
        if(isset($_POST["update_voting"])){
           
            $this->id=$_POST["id"];
            $this->title=$_POST["voting_title"];
            $this->description=$_POST["voting_desc"];
            $this->area=$_POST["voting_area"];
            $this->type=$_POST["voting_type"];
            $this->user_id=$_POST["select_candedate"];
            $this->date=$_POST["voting_date"];
            $this->imge=$_POST["voting_cover"];
            $this->end_time=$_POST["endtime"];
            $this->votes_number=0;
            $this->Model->update_voting($this->id, $this->title , $this->description , $this->area , $this->type, $this->user_id , $this->date , $this->imge , $this->end_time , $this->votes_number);
            header("location: http://localhost/evs/back/admin/voting_list.php");
        }
    }

    public function delete_voting($id){
            $this->Model->delete_voting($id);
            header("location: http://localhost/evs/back/admin/voting_list.php");
        
    }

    public function update_vote($id){
        return $this->Model->update_vote($id);    }
    public function total_votes(){
        return $this->Model->total_votes();
    }


}
?>