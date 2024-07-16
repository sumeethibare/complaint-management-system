
<?php session_start();
include_once('include/config.php');
if(strlen($_SESSION["aid"])==0)
{   
header('location:logout.php');
} else {

if(isset($_POST['update']))
{
$adminid=$_SESSION["aid"];
$currentpassword=md5($_POST['cpass']);
$newpassword=md5($_POST['newpass']);
$ret=mysqli_query($con,"SELECT id FROM admin WHERE id='$adminid' and password='$currentpassword'");
$num=mysqli_num_rows($ret);
if($num>0)
{
$query=mysqli_query($con,"update admin set password='$newpassword' WHERE id='$adminid'");

echo "<script>alert('Password changed successfully.');</script>";
echo "<script type='text/javascript'> document.location ='setting.php'; </script>";
}else{
echo "<script>alert('Current Password is wrong.');</script>";
echo "<script type='text/javascript'> document.location ='setting.php'; </script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS||Change Password</title>
   

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <script type="text/javascript">
function valid()
{
if(document.chngpwd.newpass.value!= document.chngpwd.cnfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cnfpass.focus();
return false;
}
return true;
}
</script> 

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
                            <h5 class="m-b-10">Change Password</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="setting.php">Change Password</a></li>
                            
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
                        <h5>Change Password</h5>
                    </div>
                    <div class="card-body">
                        <h5>Reset Your Password</h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                            	
                                <form method="post" name="chngpwd" onSubmit="return valid();">
                                	
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Current Password</label>
                                        <input type="password" class="form-control" id="cpass" name="cpass" required="required">
                                        
                                    </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">New Password</label>
                                        <input type="password" class="form-control" id="newpass" name="newpass" required>
                                        
                                    </div>
                                       <div class="form-group">
                                        <label for="exampleInputEmail1">Confirm Password</label>
                                        <input type="password" class="form-control" id="cnfpass" name="cnfpass" required="required">
                                        
                                    </div>
                                   
                                
                                    <button type="submit" class="btn  btn-primary" name="update" id="update">Submit</button>
                                </form>
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