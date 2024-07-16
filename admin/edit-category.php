
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
    $description=$_POST['description'];
    $id=intval($_GET['id']);
$sql=mysqli_query($con,"update category set categoryName='$category',categoryDescription='$description' where id='$id'");
$_SESSION['msg']="Category Updated !!";

}

	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS||Update Category</title>
   

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
                            <h5 class="m-b-10">Update Category</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="category.php">Update Category</a></li>
                            
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
                        <h5>Update Category</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <?php if(isset($_POST['submit']))
{?>
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                                    </div>
<?php } ?>
                                
                            	<?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select * from category where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>
                                <form method="post">
                                	
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input type="text" value="<?php echo  htmlentities($row['categoryName']);?>"  name="category" class="form-control" required>
                                        
                                    </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <textarea class="form-control" name="description" rows="5"><?php echo  htmlentities($row['categoryDescription']);?></textarea>
                                        
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