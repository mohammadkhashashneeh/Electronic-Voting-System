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
                  <th class="text-center">Actions</th>

								</tr>
							</thead>
              <tbody>
                <?php foreach($votings as $vote): ?>
              <tr>
									<td class="text-center"><?php echo $vote["title"]; ?></td>
                  <td class="text-center"><?php echo $vote["description"]; ?></td>
                  <td class="text-center"><?php echo $vote["date"]; ?></td>
                  <td class="text-center"><?php echo $vote["number_votes"]; ?></td>
									<td class="text-center">
										<a href="<?php echo "edit_voting.php?edit=edit&id=".$vote['id']; ?>" class="btn btn-sm btn-primary edit_voting"  >Edit</a>
										<a href="<?php $id=$vote["id"]; echo "../routers/router.php?delete=delete&id=".$vote['id']; ?>" class="btn btn-sm btn-danger delete_voting"  data-toggle="modal" data-target="#exampleModal" data-id="">Delete</a>
									</td>
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
        <a href="<?php  echo "../routers/router.php?delete=delete&id=".$id; ?>"  class="btn btn-primary">delete</a>
      </div>
    </div>
  </div>
</div>
