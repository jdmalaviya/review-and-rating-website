<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');


?>
<!doctype html>
<html class="no-js" lang="">
    <head>
      
        <title>Single Book Details || Books</title>
     
        <!-- Place favicon.ico in the root directory -->
        <!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- Font-Awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- pe-icon-7-stroke css -->
        <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
		<!-- Flaticon css -->
        <link rel="stylesheet" href="css/flaticon.css">
		<!-- venobox css -->
        <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen" />
		<!-- nivo slider css -->
		<link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <!--Header Area Start-->
       <?php include_once('includes/header.php');?>  
        <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					    <div class="breadcrumbs">
					       <h2>BOOK DETAILS</h2> 
					       <ul class="breadcrumbs-list">
						        <li>
						            <a title="Return to Home" href="index.php">Home</a>
						        </li>
						        <li>PBOOK DETAILS</li>
						    </ul>
					    </div>
					</div>
				</div>
			</div>
		</div> 
		<!-- Breadcrumbs Area Start --> 
        <!-- Single Product Area Start -->
        <div class="single-product-area section-padding">
            <?php
                   $eid=$_GET['editid'];
$sql="SELECT * from tblbooks where ID=$eid";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="single-product-image-inner">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="one">
                                    <a class="venobox" href="admin/images/<?php  echo htmlentities($row->CoverImage);?>" data-gall="gallery" title="">
                                        <img src="admin/images/<?php  echo htmlentities($row->CoverImage);?>" alt="">
                                    </a>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="two">
                                    <a class="venobox" href="admin/images/<?php  echo htmlentities($row->CoverImage);?>" data-gall="gallery" title="">
                                        <img src="admin/images/<?php  echo htmlentities($row->CoverImage);?>" alt="">
                                    </a>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="three">
                                    <a class="venobox" href="admin/images/<?php  echo htmlentities($row->CoverImage);?>" data-gall="gallery" title="">
                                        <img src="admin/images/<?php  echo htmlentities($row->CoverImage);?>" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Nav tabs -->
                         
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-5">
                        <div class="single-product-details">
                            <div class="list-pro-rating">
                                <i class="fa fa-star icolor"></i>
                                <i class="fa fa-star icolor"></i>
                                <i class="fa fa-star icolor"></i>
                                <i class="fa fa-star icolor"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <h3><?php  echo htmlentities($row->BookName);?></h3>
                         
                            <h5>Author Name: <?php  echo htmlentities($row->AuthorName);?>. </h5>
                           
                                <h2>$<?php  echo htmlentities($row->Price);?></h2>
                            
                         
                           
                            <div id="product-comments-block-extra">
                               
								<ul class="comments-advices">

									<li>
                                         <?php if($_SESSION['booksuid']==""){?>
										<a href="login.php" class="open-comment-form">Write a review</a>
                                        <?php } else {?>
                                            <a href="review.php?bookid=<?php echo htmlentities ($row->ID);?>" class="open-comment-form">Write a review</a>
                                            <?php }?>

									</li>
								</ul>
							</div>
                        </div>
                    </div>
                </div>
                <div class="row">
					<div class="col-md-9">
                        <div class="p-details-tab-content">
                            <div class="p-details-tab">
                                
                                    <p style="font-size: 20px;color: red">Review</p>
                                    
                                
                               
                            </div>
                            <div class="clearfix"></div>
                            <div class="tab-content review">
                                <div role="tabpanel" class="tab-pane active">
                                    <?php
                  $eid=$_GET['editid'];

$sql="SELECT tbluser.FullName,tbluser.ID,tblreview.Review,tblreview.UserID from tblreview join tbluser on tblreview.UserID=tbluser.ID  where tblreview.BookID=:eid";
$query = $dbh -> prepare($sql);
$query-> bindParam(':eid', $eid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?><p style="color: red;font-size: 30px">*****</p>
                                    <p><?php  echo htmlentities($row->Review);?>(<?php  echo htmlentities($row->FullName);?>)</p>
                                    
                                    <?php $cnt=$cnt+1;}} ?>
                                </div>
                               
                              
                            </div>
                        </div>
					</div>
				</div>  
            </div>
            <?php $cnt=$cnt+1;}} ?> 
        </div>
        <!-- Single Product Area End -->
		<?php include_once('includes/footer.php');?>
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- jquery Counterup js -->
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>	
		<!-- jquery countdown js -->
        <script src="js/jquery.countdown.min.js"></script>
		<!-- jquery countdown js -->
        <script type="text/javascript" src="venobox/venobox.min.js"></script>
		<!-- jquery Meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>	
		<script>
			new WOW().init();
		</script>
		<!-- scrollUp JS -->		
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- Nivo slider js -->
		<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/home.js" type="text/javascript"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
    </body>
</html>