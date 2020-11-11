<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['booksaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {

$aid=$_SESSION['booksaid'];
$bname=$_POST['bookname'];
$isbn=$_POST['isbn'];
$aname=$_POST['authorname'];
$price=$_POST['price'];

$ubook=$_FILES["uploadbook"]["name"];
$extension = substr($ubook,strlen($ubook)-4,strlen($ubook));
$cimage=$_FILES["coverimage"]["name"];
$extension1 = substr($cimage,strlen($cimage)-4,strlen($cimage));
$allowed_extensions = array(".pdf");
$allowed_extensions1 = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Book File has Invalid format. Only PDF format allowed');</script>";
}
if(!in_array($extension1,$allowed_extensions1))
{
echo "<script>alert('Book Cover Image has Invalid format. Only jpg,jpeg,png format allowed');</script>";
}
else
{
$ubook=md5($ubook).time().$extension;
 move_uploaded_file($_FILES["uploadbook"]["tmp_name"],"images/".$ubook);
 $cimage=md5($cimage).time().$extension1;
 move_uploaded_file($_FILES["coverimage"]["tmp_name"],"images/".$cimage);
$sql="insert into tblbooks(BookName,ISBN,AuthorName,Price,UploadBook,CoverImage)values(:bname,:isbn,:aname,:price,:ubook,:cimage)";
$query=$dbh->prepare($sql);
$query->bindParam(':bname',$bname,PDO::PARAM_STR);
$query->bindParam(':isbn',$isbn,PDO::PARAM_STR);
$query->bindParam(':aname',$aname,PDO::PARAM_STR);
$query->bindParam(':price',$price,PDO::PARAM_STR);
$query->bindParam(':ubook',$ubook,PDO::PARAM_STR);
$query->bindParam(':cimage',$cimage,PDO::PARAM_STR);

 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {

echo '<script>alert("Book Detail has been added successfully.")</script>';
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
}

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   

    <title>Add Book !!</title>

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
      <h5 class="am-title">Add Book</h5>

    </div><!-- am-pagetitle -->

    <div class="am-mainpanel">
      <div class="am-pagebody">

      

        <div class="row row-sm mg-t-20">
          <div class="col-xl-12">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Add Book</h6>
               <form id="basic-form" method="post" enctype="multipart/form-data">
              
              <div class="row">
                <label class="col-sm-4 form-control-label">Name of Book: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="bookname" value="" class="form-control" required='true'>
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">ISBN: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="isbn" value="" class="form-control" required='true' maxlength="12">
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Author Name: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="authorname" value=""  class="form-control" required='true'>
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Price: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" name="price" value="" class="form-control" required='true'>
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Cover Image: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                 <input type="file" name="coverimage" value="" required="true" class="form-control">
                </div>
              </div>
               <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Upload Book(PDF Format): <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                 <input type="file" name="uploadbook" value="" required="true" class="form-control">
                </div>
              </div>
             <div class="form-layout-footer mg-t-30">
             <p style="text-align: center;"><button class="btn btn-info mg-r-5"  name="submit" id="submit">ADD</button></p>
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