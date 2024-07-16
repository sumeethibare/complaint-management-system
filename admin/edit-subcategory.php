
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['aid'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
    $category=$_POST['category'];
    $subcat=$_POST['subcategory'];
    $id=intval($_GET['id']);
$sql=mysqli_query($con,"update subcategory set categoryid='$category',subcategory='$subcat' where id='$id'");
$_SESSION['msg']="Category Updated !!";

}

	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS||Edit SubCategory</title>
   

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    

</head>
<body class="">
	<?php include('include/sidebar.php');?>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<?php include('include/header.php');?>

<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Edit SubCategory</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="subcategory.php">Edit SubCategory</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
          
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Edit SubCategory</h5>
                    </div>
                    <div class="card-body">
                        <h5>View and Edit SubCategory</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            	<?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select category.id,category.categoryName,subcategory.subcategory from subcategory join category on category.id=subcategory.categoryid where subcategory.id='$id'");
while($row=mysqli_fetch_array($query))
{
?>
                                <form method="post">
                                	<?php if(isset($_POST['submit']))
{?>
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                                    </div>
<?php } ?>


                                    <br />
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>
                                        
                                        <select name="category" class="form-control" required>
<option value="<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($catname=$row['categoryName']);?></option>
<?php $ret=mysqli_query($con,"select * from category");
while($result=mysqli_fetch_array($ret))
{
    $cat=$result['categoryName'];
if($catname=$cat)
{
    continue;
}
else{
?>
<option value="<?php echo $result['id'];?>"><?php echo $result['categoryName'];?></option>
<?php } }?>
</select>
                                        
                                    </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">SubCategory Name</label>
                                   
<input type="text" placeholder="Enter category Name"  name="subcategory" value="<?php echo  htmlentities($row['subcategory']);?>" class="form-control" required>

                                        
                                    </div>
                                       
                                
                                    <button type="submit" class="btn  btn-primary" name="submit">Submit</button>
                                </form><?php } ?>
                            </div>
                           
                        </div>
                     
                   
                    </div>
                </div>
          
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>


    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>




</body>

</html>
<?php } ?>