<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['booksaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
$eid=$_GET['editid'];
$bname=$_POST['bookname'];
$isbn=$_POST['isbn'];
$aname=$_POST['authorname'];
$price=$_POST['price'];
$sql="update tblbooks set BookName=:bname, ISBN=:isbn, AuthorName=:aname, Price=:price where ID=:eid";

$query=$dbh->prepare($sql);
$query->bindParam(':bname',$bname,PDO::PARAM_STR);
$query->bindParam(':isbn',$isbn,PDO::PARAM_STR);
$query->bindParam(':aname',$aname,PDO::PARAM_STR);
$query->bindParam(':price',$price,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);

 $query->execute();

  echo '<script>alert("Books detail has been updated")</script>';
  

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
   

    <title>Edit Book Details !!</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="lib/highlightjs/github.css" rel="stylesheet">
    <link href="lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Amanda CSS -->
    <link rel="stylesheet" href="css/amanda.css">
  </head>

  <body>
 <?php include_once('includes/header.php');
include_once('includes/sidebar.php');

 ?>

 

    <div class="am-pagetitle">
      <h5 class="am-title">Edit Book</h5>

    </div><!-- am-pagetitle -->

    <div class="am-mainpanel">
      <div class="am-pagebody">

      

        <div class="row row-sm mg-t-20">
          <div class="col-xl-12">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Edit Book</h6>
               <form id="basic-form" method="post" enctype="multipart/form-data">
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
              <div class="row">
                <label class="col-sm-4 form-control-label">Name of Book: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="bookname" value="<?php  echo htmlentities($row->BookName);?>" class="form-control" required='true'>
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">ISBN: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="isbn" value="<?php  echo htmlentities($row->ISBN);?>" class="form-control" required='true' maxlength="12">
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Author Name: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="authorname" value="<?php  echo htmlentities($row->AuthorName);?>"  class="form-control" required='true'>
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Price: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="price" value="<?php  echo htmlentities($row->Price);?>" class="form-control" required='true'>
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Cover Image: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <img src="images/<?php  echo htmlentities($row->CoverImage);?>" width="200" height="150"><a href="change-cover-image.php?editid=<?php echo $row->ID;?>"> &nbsp; Edit</a>
                </div>
              </div>
               <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Upload Book(PDF Format): <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                 <a href="images/<?php  echo htmlentities($row->UploadBook);?>" target="_blank">View File </a><a href="change-upload-file.php?editid=<?php  echo htmlentities($row->ID);?>" >|| &nbsp; Edit</a>
                </div>
              </div>
              <?php $cnt=$cnt+1;}} ?> 
             <div class="form-layout-footer mg-t-30">
             <p style="text-align: center;"><button class="btn btn-info mg-r-5"  name="submit" id="submit">Update</button></p>
                </form>
              </div><!-- form-layout-footer -->
            </div><!-- card -->
          </div><!-- col-6 -->
        
        </div><!-- row -->


      </div><!-- am-pagebody -->
     <?php include_once('includes/footer.php');?>
    </div><!-- am-mainpanel -->

    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
    <script src="lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="lib/jquery-toggles/toggles.min.js"></script>
    <script src="lib/highlightjs/highlight.pack.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>

    <script src="js/amanda.js"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      })
    </script>
  </body>
</html>
<?php }  ?>