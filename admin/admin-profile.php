
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
	$fullname=$_POST['fullname'];
	$contactno=$_POST['mobilenumber'];
$email=$_POST['email'];
$id=$_SESSION["aid"];
$sql=mysqli_query($con,"update admin set fullname='$fullname', mobilenumber='$contactno', email='$email' where id='$id'");
echo "<script>alert('Profile Updated successfully');</script>";
echo "<script>window.location.href='admin-profile.php'</script>";
}

	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS||Admin Profile</title>
   

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
                            <h5 class="m-b-10">Admin Profile</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="admin-profile.php">Admin Profile</a></li>
                            
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
                        <h5>Admin Profile</h5>
                    </div>
                    <div class="card-body">
                        <h5>View and Update Your Profile</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            	<?php
$id=intval($_SESSION["aid"]);
$query=mysqli_query($con,"select * from admin where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>	
                                <form method="post">
                                	
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admin userName(used for login)</label>
                                        <input type="text" value="<?php echo  htmlentities($row['username']);?>"  name="username" class="form-control" readonly>
                                        
                                    </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="text" value="<?php echo  htmlentities($row['fullname']);?>"  name="fullname" class="form-control" >
                                        
                                    </div>
                                       <div class="form-group">
                                        <label for="exampleInputEmail1">Contact Number</label>
                                        <input type="text" value="<?php echo  htmlentities($row['mobilenumber']);?>"  name="mobilenumber" class="form-control" >
                                        
                                    </div>
                                       <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" value="<?php echo  htmlentities($row['email']);?>"  name="email" class="form-control" >
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Reg. Date</label>
                                        <input type="text" value="<?php echo  htmlentities($row['creationDate']);?>"  name="regdate" class="form-control" readonly>
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputPassword1">Profile Last Updation Date</label>
                                        <input type="text" value="<?php echo  htmlentities($row['updationDate']);?>"  name="updatedate" class="form-control" readonly>
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