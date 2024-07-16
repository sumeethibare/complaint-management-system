
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
    $state=$_POST['state'];
    $description=$_POST['description'];
    $id=intval($_GET['id']);
$sql=mysqli_query($con,"update state set stateName='$state',stateDescription='$description' where id='$id'");
$_SESSION['msg']="State info Updated !!";

}

	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS||Edit State</title>
   

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
                            <h5 class="m-b-10">Edit State</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="edit-state.php">Edit State</a></li>
                            
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
                        <h5>Edit State</h5>
                    </div>
                    <div class="card-body">
                        <h5>View and Edit State</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            	<?php if(isset($_POST['submit']))
{?>
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Well done!</strong> <?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
                                    </div>
<?php } ?>
                                <form method="post">
                                	
<?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select * from state where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>

                                    <br />
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">State Name</label>
                                        
                                        <input type="text" placeholder="Enter category Name"  name="state" value="<?php echo  htmlentities($row['stateName']);?>" class="form-control" required>
                                        
                                    </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                   
<textarea class="form-control" name="description" rows="5"><?php echo  htmlentities($row['stateDescription']);?></textarea>

                                        
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