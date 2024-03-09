<?php
include "../controllers/users_controller.php";
include "../controllers/voting_controller.php";
$votings=new Voting();
$user =new Users();
$candedates=$user->get_candedates();
$id=0;
?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> candidates list </h3>
              
            </div>
            <div class="row">
              <?php foreach($candedates as $candedate):
                if($candedate["user_type"]=="candedte"):
                  
                ?>
               <div class="col-lg-4">
                <div class="card">
                    <img src="../../assets/images/avatar.jpg" class="logo">
                    <h2 class="cname"><?php echo $candedate["name"] ?></h2>
                    <p class="lead"> <?php echo $candedate["description"] ?></p>
                    <?php $votes=$votings->get_voting_numbers_by_id($candedate["id"]);
                    foreach($votes as $vote): ?>
                      <h3><?php echo $vote["number_votes"]; ?></h3>
                      <?php endforeach; ?>
                    <a href="<?php $id=$candedate["id"]; echo "edit_candedate.php?edit=edit&id=".$candedate['id']; ?>" class="btn btn-primary"  >edit</a>
                    <button class="btn btn-danger" name="delete" data-toggle="modal" data-target="#exampleModal">delete</button>
                </div>
             </div>
              <?php endif; endforeach; ?>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © evs.com 2021</span>
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h2 class="text-center" >Do you want to delete this form?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
        <a href="<?php  echo "../routers/router.php?cdelete=cdelete&cid=".$id; ?>"  class="btn btn-primary">delete</a>
      </div>
    </div>
  </div>
</div>
