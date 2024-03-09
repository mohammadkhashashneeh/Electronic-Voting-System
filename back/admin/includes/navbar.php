        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-language dropdown d-none d-md-block">
                        <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">

                            <div class="nav-language-text">
                                <p class="mb-1 text-black">Language</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                            <a class="dropdown-item" href="../routers/router.php?l=1">

                                <div class="nav-language-text">
                                    <p class="mb-1 text-black">Arabic</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../routers/router.php?l=2">

                                <div class="nav-language-text">
                                    <p class="mb-1 text-black">English</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                            <i class="mdi mdi-account-outline ml-1"></i>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black"><?php echo $_SESSION['name']; ?></p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                            <div class="p-3 text-center bg-primary">
                            <i class="mdi mdi-account-outline ml-2"></i>
                            </div>
                            <div class="p-2">
                                <h5 class="dropdown-header text-uppercase pl-2 text-dark">admin Options</h5>
                                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="../../front/views/logout.php?id=<?php echo $_SESSION["id"]; ?>">
                                    <span>Log Out</span>
                                    <i class="mdi mdi-logout ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </li>

                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/index.php">
                            <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                            <span class="menu-title">Voting</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic1">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="../admin/voting.php">Build Voting</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../admin/voting_list.php">Voting list</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                            <span class="menu-title">Candedates</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic2">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="../admin/add_candedate.php">Add Candedate</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../admin/view_candedates.php">View Candedates</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
                            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                            <span class="menu-title">Voters</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic3">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="../admin/add_voters.php">Add Voter</a></li>
                                <li class="nav-item"> <a class="nav-link" href="../admin/view_voters.php">View Voters</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item sidebar-user-actions">
                        <div class="sidebar-user-menu">
                            <a href="../../front/views/logout.php?id=<?php echo $_SESSION["id"]; ?>" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Log Out</span></a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->