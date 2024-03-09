<?php
include "../controllers/voting_controller.php";
include "../controllers/users_controller.php";
$users=new Users("back");
$candedates=$users->get_candedates();
$v=new Voting();
$v->build_votings();
?>
<!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> build new voting </h3>
            </div>
            <div cl0ass="row">
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">add new voting modle </h4>
                    <p class="card-description"> here, you can add a new voting modle to publish in EVS main site. </p>
                    <form class="forms-sample" method="POST" action="">
                      <div class="form-group">
                        <label for="exampleInputName1">Voting title</label>
                      <input type="text" name="voting_title" class="form-control"  required
                        >
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Voting description</label>
                        <textarea class="form-control" name="voting_desc"  rows="4"  required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Voting area</label>
                        <input type="text" class="form-control" name="voting_area" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Voting type</label>
                        <select class="form-control" name="voting_type" required>
                          <option>--</option>
                          <option value="a"> parlimentary voting </option>
                          <option value="b"> municipal voting </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Select candedate</label>
                        <select class="form-control" name="select_candedate"   required>
                        <?php foreach($candedates as $candedate):
                          if($candedate["user_type"]=="candedte"):
                          ?>
                          <option value="<?php echo $candedate["id"]; ?>"> <?php echo $candedate["name"]; ?> </option>
                        <?php endif; endforeach; ?>
                        </select>

                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Voting date</label>
                        <input type="date" class="form-control" name="voting_date"  placeholder="mm/dd/yyyy" required>
                      </div>
                      <div class="form-group">
                        <label>Voting cover image</label>
                        <input type="text" name="voting_cover" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input value="upload image" type="file" id="myFile" name="voting_cover" class="form-control file-upload-info"  placeholder="Upload Image">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Voting times</label>
                        <input type="text" class="form-control" name="endtime"  placeholder="00:00:00" required >
                      </div>
                      
                    
                      
                      <button type="submit" name="build_voting" class="btn btn-primary mr-2">save & publish</button>
                      <button class="btn btn-light">Clear</button>
                    </form>
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