
<footer>
		    <div class="footer-top-area">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-4 col-sm-8">
		                    <div class="footer-left">
		                        <a href="index.html">
		                            <img src="img/logo-2.png" alt="">
		                        </a>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
		                        <ul class="footer-contact">
		                            <li>
		                                <i class="flaticon-location"></i>
		                                450 fifth Avenue, 34th floor. NYC
		                            </li>
		                            <li>
		                                <i class="flaticon-technology"></i>
		                                (+800) 123 4567 890
		                            </li>
		                            <li>
		                                <i class="flaticon-web"></i>
		                                info@bookstore.com
		                            </li>
		                        </ul>
		                    </div>
		                </div>
		                <div class="col-md-4 col-sm-4">
		                    <div class="single-footer">
		                        <h2 class="footer-title">Information</h2>
		                        <ul class="footer-list">
		                            <li><a href="aboutus.php">About Us</a></li>
		                            <li><a href="contactus.php">Contact Us</a></li>
		                         
		                        </ul>
		                    </div>
		                </div>
		                <div class="col-md-4 hidden-sm">
		                    <div class="single-footer">
		                        <h2 class="footer-title">My Account</h2>
		                        <ul class="footer-list">
		                          
		                                <?php if (strlen($_SESSION['booksuid']==0)) {?>
                                    <li><a href="login.php">Login</a></li>
                                <?php } ?>
		                            <li><a href="user-profile.php">My Cart</a></li>
		                            <li><a href="change-password.php">Change Password</a></li>
		                         
		                        </ul>
		                    </div>
		                </div>
		          
		            </div>
		        </div>
		    </div>
		    <div class="footer-bottom">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6">
                            <div class="footer-bottom-left pull-left">
                                <p>Copyright &copy; 2020 . All Right Reserved.</p>
                            </div>
		                </div>
		                <div class="col-md-6">
		                    <div class="footer-bottom-right pull-right">
		                       
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</footer>