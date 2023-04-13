<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
    <div class="bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav d-xl-none">
            <li class="nav-item"><a class="nav-link menu-toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu ficon"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a></li>
          </ul>
          <ul class="nav navbar-nav bookmark-icons">
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="home.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Home" aria-label="Home">Home</a></li>

            
          </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
          
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a>
            </li>
            <?php 
        if(isset($_SESSION['username'])){
          
      ?>
            <li class="nav-item nav-search">
                <a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
                <div class="search-input">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                        data-search="search" />
                    <div class="search-input-close"><i data-feather="x"></i></div>
                    <ul class="search-list search-list-main"></ul>
                </div>
            </li>

            <?php
        }
      ?>
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name fw-bolder"><?php 
              if(isset($_SESSION['username'])){
                echo $_SESSION['username'];
              }else{
                ?>
                <a type="button" class="btn btn-primary waves-effect waves-float waves-light mx-1"
                    href="login.php">Join Us</a>

                            <?php
              }
              ?></span>
                        <span class="user-status">
                            <?php
                if(isset($_SESSION['role'])){
                  echo $_SESSION['role'];
                }
                ?>
                        </span>
                    </div>
                    <?php 
              if(!isset($_SESSION['username'])){
               
              }else{
                ?>
                    <span class="avatar">
                        <img class="round" src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                            height="40" width="40" />
                        <span class="avatar-status-online"></span>
                    </span>
                    <?php
              }
          ?>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">

                    <a class="dropdown-item" href="<?php 
                  echo $_SESSION['role'] == 'doctor' ? 'doctor_profile.php': 'patient_profile.php'?>"><i class="me-50"
                            data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href="logout.php"><i class="me-50" data-feather="power"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>