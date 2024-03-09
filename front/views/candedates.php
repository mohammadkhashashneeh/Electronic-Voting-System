<?php
include "back/controllers/users_controller.php";
$user =new Users("front");
$candedates=$user->get_candedates();
$id=0;
?>
<section>
    <div class="container-lg">
    <br> <br>    
    <h1 class="text-center">
            candidates list
        </h1> <br>
        <hr> <br>
        <div class="row">
        <?php foreach($candedates as $candedate):
        
        if($_SESSION['id'] == $candedate['id'] && $candedate['login'] != 1){
          
         header("location: http://localhost/evs/login.php"); 
        }
        
                if($candedate["user_type"]=="candedte" && $candedate['area'] == $_SESSION["area"]): ?>
               <div class="col-lg-4">
                <div class="card">
                    <img src="../evs/assets/images/avatar.jpg" class="logo">
                    <h2 class="cname"><?php echo $candedate["name"] ?></h2>
                    <p class="lead"> <?php echo $candedate["description"] ?></p>
                    <?php $id=$candedate["id"]; ?>
                    <button  class="btn btn-primary"  name="vote" data-toggle="modal" data-target="#exampleModal<?php echo $id; ?>">Vote</button>
                </div>
             </div>
             
             <!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel<?php echo $id; ?>" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel<?php echo $id; ?>">confirm form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row text-center">
            <div class="cal-lg-12">
                <div class="card">
                    <img src="assets/images/avatar.jpg" class="logo">
                    <h2 class="cname"><?php echo $candedate["name"] ?></h2>
                    <p class="lead"><?php echo $candedate["description"] ?></p>  
                </div>
            </div>
      </div>
      <h2 class="text-center" >Are you sure you want to Choose this candidate?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
        <a href="<?php  echo "../evs/front/routers/router.php?update_vote=update_vote&vid=".$id; ?>"  class="btn btn-primary">confirm vote</a>
      </div>
    </div>
  </div>
</div>


              <?php endif; endforeach; ?>
        </div>
        <br> <br> 
    </div>
</section>
