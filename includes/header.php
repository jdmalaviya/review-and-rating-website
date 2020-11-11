 <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <div class="header-logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                                        
                    <div class="col-md-9 col-sm-12 hidden-xs">
                        <div class="mainmenu text-right">
                            <nav>
                                <ul id="nav">
                                    <li><a href="index.php">HOME</a></li>
                                    <li><a href="all-books.php">Books</a></li>
                                    <?php if (strlen($_SESSION['booksuid']!=0)) {?>
                                    <li><a href="#">My Account</a>
                                        <ul class="sub-menu">
                                            <li><a href="user-profile.php">Profile</a></li>
                                            <li><a href="change-password.php">Change Password</a></li>
                                            <li><a href="logout.php">Logout</a></li>
                                           
                                        </ul>
                                    </li>
                                    <?php } ?>
                                         <?php if (strlen($_SESSION['booksuid']==0)) {?>
                                    <li><a href="login.php">Login</a></li>
                                <?php } ?>
                                    <li><a href="aboutus.php">About</a></li>
                                    <li><a href="contactus.php">Contact</a></li>
                                    <li><a href="admin/login.php">Admin</a></li>

                                </ul>

                            </nav>

                        </div>                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!--Header Area End-->
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="mobile-menu">
              <nav id="dropdown">
                <ul id="nav">
                                    <li><a href="index.php">HOME</a></li>
                                    <li><a href="all-books.php">Books</a></li>
                                    <li><a href="#">My Account</a>
                                        <ul class="sub-menu">
                                            <li><a href="user-profile">Profile</a></li>
                                            <li><a href="change-password.php">Change Password</a></li>
                                            <li><a href="logout.php">Logout</a></li>
                                           
                                            <li><a href="login.php">Login</a></li>
                                           
                                        </ul>
                                    </li>
                                    <li><a href="admin/login.php">Admin</a></li>

                                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>    
    <!-- Mobile Menu End -->