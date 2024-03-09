<?php
include "../controllers/voting_controller.php";
$Voting=new Voting();
$votings = $Voting->get_voting();
$id = 0 ;
?>
<!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> voting list </h3>
              <nav aria-label="breadcrumb">
    
              </nav>
            </div>
            <div class="row">
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">view voting list </h4>
                    <table class="table table-bordered table-hover">
                    <thead>
								<tr>
									<th class="text-center">Title</th>
									<th class="text-center">description</th>
									<th class="text-center">Voting date</th>
									<th class="text-center">Number of votes</th>

								</tr>
							</thead>
              <tbody>
                <?php foreach($votings as $vote): ?>
              <tr>
									<td class="text-center"><?php echo $vote["title"]; ?></td>
                  <td class="text-center"><?php echo $vote["description"]; ?></td>
                  <td class="text-center"><?php echo $vote["date"]; ?></td>
                  <td class="text-center"><?php echo $vote["number_votes"]; ?></td>
								</tr>
                <?php endforeach; ?>
              </tbody>
                    </table>
                  </div>
                </div>
              </div>
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