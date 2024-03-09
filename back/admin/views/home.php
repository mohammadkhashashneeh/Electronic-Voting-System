<?php
include "../controllers/voting_controller.php";
$Voting=new Voting();
$votings = $Voting->total_votes();
include "../controllers/users_controller.php";
$user =new Users();
$voters=$user->total_voters();
$candedates=$user->total_candedates();
?>
<div class="main-panel">
                <div class="content-wrapper">
                    <div class="row" id="proBanner">

                        <div class="d-xl-flex justify-content-between align-items-start">
                            <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
                        </div>
                    </div>

                    <div class="tab-content tab-transparent-content">
                        <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <h5 class="mb-2 text-dark font-weight-normal">number of votes</h5>
                                            <h2 class="mb-4 text-dark font-weight-bold"><?php echo $votings; ?></h2>
                                            <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                                            <p class="mt-4 mb-0">total number of voting</p>
                                            <h3 class="mb-0 font-weight-bold mt-2 text-dark"><?php echo $voters; ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                        <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                                            <h5 class="mb-2 text-dark font-weight-normal">number of candidates</h5>
                                            <h2 class="mb-4 text-dark font-weight-bold"><?php echo $candedates; ?></h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                        <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                                            <h5 class="mb-2 text-dark font-weight-normal">number of voters</h5>
                                            <h2 class="mb-4 text-dark font-weight-bold"><?php echo $voters; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>