<?php
include "../controllers/users_controller.php";
$user =new Users();
$voters=$user->get_candedates();
$id=0;
?>
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> voters list </h3>
              
            </div>
            <div class="row">
              <?php foreach($voters as $voter):
                if($voter["user_type"]=="voter"):
                  
                ?>
               <div class="col-lg-4">
                <div class="card">
                    <img src="../../assets/images/avatar.jpg" class="logo">
                    <h2 class="cname"><?php echo $voter["name"] ?></h2>
                    <p class="lead"> <?php echo $voter["description"] ?></p>
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