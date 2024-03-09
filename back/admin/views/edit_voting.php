<?php
include "../controllers/voting_controller.php";
$v=new Voting();
$rows = $v->get_voting_by_id();
//$v->update_voting();
?>
<!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Edit voting </h3>
            </div>
            <div cl0ass="row">
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit voting modle </h4>
                    <p class="card-description"> here, you can edit voting modle. </p>
                    <?php foreach($rows as $row): ?>
                    <form class="forms-sample" method="POST" action="../routers/router.php">
                      <div class="form-group">
                        <label for="exampleInputName1">Voting title</label>
                      <input type="text" name="voting_title" class="form-control" value="<?php echo $row['title']; ?>"  required>
                      <input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>"  required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Voting description</label>
                        <textarea class="form-control" name="voting_desc"  rows="4"  required><?php echo $row['description']; ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Voting area</label>
                        <input type="text" class="form-control" name="voting_area" value="<?php echo $row['area']; ?>"  required>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Voting type</label>
                        <select class="form-control" name="voting_type" value="<?php echo $row['type']; ?>" required>
                          <option>--</option>
                          <?php if($row['type'] == "a"): ?>
                          <option value="a" selected> parlimentary voting </option>
                          <option value="b"> municipal voting </option>
                          <?php else: ?>
                            <option value="a" > parlimentary voting </option>
                          <option value="b" selected> municipal voting </option>
                          <?php endif; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Select candedate</label>
                        <select class="form-control" name="select_candedate" value="<?php echo $row['user_id']; ?>"  required>
                          <option value="1"> candedate 1</option>
                          <option value="2"> candedate 2 </option>
                          <option value="3"> candedate 3 </option>
                          <option value="4"> candedate 4 </option>
                          <option value="5"> candedate 5 </option>
                          <option value="6"> candedate 6 </option>
                          <option value="7"> candedate 7 </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Voting date</label>
                        <input type="date" class="form-control" name="voting_date" value="<?php echo $row['date']; ?>" placeholder="mm/dd/yyyy" required>
                      </div>
                      <div class="form-group">
                        <label>Voting cover image</label>
                        <input type="file" name="voting_cover" value="<?php echo $row['cover_image']; ?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Voting times</label>
                        <input type="text" class="form-control" name="endtime" value="<?php echo $row['end_time']; ?>"  placeholder="00:00:00" required>
                      </div>
                      
                    
                      
                      <button type="submit" name="update_voting" class="btn btn-primary mr-2" >save</button>
                      <button class="btn btn-light">Clear</button>
                    </form>
                    <?php endforeach; ?>
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
        </div>
        <!-- main-panel ends -->
        <!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel36" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Done</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h2 class="text-center" >voting updated successfuly!</h2>
      </div>
      <div class="modal-footer">
        
        <a href="http://localhost/evs/back/admin/voting_list.php" type="button" class="btn btn-primary">ok</a>
      </div>
    </div>
  </div>
</div>
