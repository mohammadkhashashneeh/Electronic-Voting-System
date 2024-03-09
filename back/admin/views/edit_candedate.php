<?php
include "../controllers/users_controller.php";
$users=new Users();
$candedates=$users->get_candedates_by_id();
?>
 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Edit candedates </h3>
              <nav aria-label="breadcrumb">
              </nav>
            </div>
            <div cl0ass="row">
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit candedates form </h4>
                    <?php foreach($candedates as $candedate): ?>
                    <form class="forms-sample" method="POST" action="../routers/router.php">
                      <div class="form-group">
                        <label for="exampleInputName1">candedate name</label>
                        <input type="text" name="uname" class="form-control" value="<?php echo $candedate['name']; ?>" required>
                        <input type="hidden" name="user_id" class="form-control" value="<?php echo $candedate['id']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">candedate description</label>
                        <textarea class="form-control" name="candedate_desc"  rows="4"  required ><?php echo $candedate['description']; ?></textarea>
                      </div>
                      <div class="form-group">
                        <label>candedate photo</label>
                        <input type="file" name="photo" value="<?php echo $candedate['photo']; ?>" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">user type</label>
                        <select class="form-control" name="user_type" required>
                          <option value="candedte" selected> candedate </option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">ssn candedate</label>
                        <input type="number" name="ssn" class="form-control" value="<?php echo $candedate['ssn']; ?>"  required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">birth place</label>
                        <input type="text" name="birth_place" class="form-control" value="<?php echo $candedate['birth_place']; ?>"  required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">birth of date</label>
                        <input type="date" class="form-control" name="birth_date"  placeholder="dd/mm/yyyy" value="<?php echo $candedate['birth_date']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">mother name</label>
                        <input type="text" name="mother_name" class="form-control" value="<?php echo $candedate['mother_name']; ?>"  required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Voting area</label>
                        <input type="text" class="form-control" name="voting_area" value="<?php echo $candedate['area']; ?>"  required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1"> restricted id no </label>
                        <input type="text" name=" restricted_id_no" class="form-control" value="<?php echo $candedate['restricted_id_no']; ?>"  required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1"> restricted place  </label>
                        <input type="text" name=" restricted_place" class="form-control"  value="<?php echo $candedate['restricted_place']; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">candedate vision</label>
                        <textarea class="form-control" name="candedate_vision"  rows="4"  required><?php echo $candedate['vision']; ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">candedate phone number</label>
                        <input type="number" name="candedate_phone" class="form-control"  placeholder="+962" value="<?php echo $candedate['phone_number']; ?>" required>
                      </div>
                     
                      
                    
                      <button type="submit" name="update_candedate" class="btn btn-primary mr-2">save</button>
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
          <!-- partial -->
        </div>
        <!-- main-panel ends -->