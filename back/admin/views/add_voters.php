<?php
include "../controllers/users_controller.php";
$users=new Users();
$users->add_voter();
?>
<!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Add voters </h3>
              <nav aria-label="breadcrumb">
              </nav>
            </div>
            <div cl0ass="row">
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add voters form 1 </h4>
                    <form class="forms-sample" method="POST" action="#">
                      <div class="form-group">
                        <label>import exil file</label>
                        <input type="file" name="voter_files" class="form-control">
                      </div>
                      <button class="file-upload-browse btn btn-primary" type="submit" name="exil" >save</button>
                            <button class="btn btn-light">Clear</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>

            <div cl0ass="row">
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add voters form 2</h4>
                    <form class="forms-sample" method="POST" action="#">
                      <div class="form-group">
                        <label for="exampleInputName1">voter name</label>
                        <input type="text" name="uname" class="form-control"   required>
                      </div>
                      <div class="form-group">
                        <label>voter photo</label>
                        <input type="file" name="photo" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">ssn voter</label>
                        <input type="number" name="ssn" class="form-control"   required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">birth of date</label>
                        <input type="date" class="form-control" name="birth_date"  placeholder="dd/mm/yyyy" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">birth place</label>
                        <input type="text" name="birth_place" class="form-control"   required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">mother name</label>
                        <input type="text" name="mother_name" class="form-control"   required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">voting area </label>
                        <input type="text" name="v_area" class="form-control"   required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1"> restricted id no </label>
                        <input type="text" name=" restricted_id_no" class="form-control"   required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1"> restricted place  </label>
                        <input type="text" name=" restricted_place" class="form-control"   required>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">user type</label>
                        <select class="form-control" name="user_type" required>
                          <option value="voter"> voter </option>
                        </select>
                      </div>
                    
                      <button type="submit" name="voter" class="btn btn-primary mr-2">save</button>
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
          <!-- partial -->
        </div>
        <!-- main-panel ends -->