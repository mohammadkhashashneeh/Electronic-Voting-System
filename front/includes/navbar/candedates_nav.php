<nav class="navbar navbar-expand-lg navbar-light bg-light">
<title>voting</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mdi-pan-left">
    <li class="nav-item sidebar-user-actions">
                        <div class="sidebar-user-menu">
                            <h2><?php echo $_SESSION["name"]; ?></h2>
                        <a href="front/views/logout.php?id=<?php echo $_SESSION['id']; ?>" class="nav-link"><i class="fas fa-sign-out-alt"></i>
                  <span class="menu-title">Log Out</span></a>
                        </div>
                    </li>
    </ul>
  </div>
  
</nav>