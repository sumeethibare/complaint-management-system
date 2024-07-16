<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
   $email=$_POST['emailid'];
   $password=md5($_POST['inputuserpwd']);
$query=mysqli_query($con,"SELECT id,fullName FROM users WHERE userEmail='$email' and password='$password'");
$num=mysqli_fetch_array($query);
//If Login Suceesfull
if($num>0)
{
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['name'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
}
//If Login Failed
else{
    echo "<script>alert('Invalid login details');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
exit();
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>CMS | User login</title>
	<link rel="stylesheet" href="../admin/assets/css/style.css">
	
</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content text-center">
		<h4>Complaint management system <hr /><span style="color:#fff;"> User Login</span></h4>
		<div class="card borderless">
			<div class="row align-items-center ">
				<div class="col-md-12">
					<form method="post">
						
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Signin</h4>
						<hr>
						<div class="form-group mb-3">
							
							<input type="email" name="emailid" id="emailid" class="form-control" onBlur="emailAvailability()" required placeholder="Enter Register Email ID">
						</div>
						<div class="form-group mb-4">
							
							<input type="password" name="inputuserpwd" class="form-control" required placeholder="Enter Password">
						</div>
						
						<button class="btn btn-block btn-primary mb-4"  type="submit" name="submit">Signin</button>
						<hr>
						<p class="mb-2 text-muted">Forgot password? <a href="reset-password.php" class="f-w-400">Reset</a></p>

								<div class="registration">
		                Don't have an account yet?<br/><br/>
		                <a class="badge badge-primary" href="registration.php">
		                    Create an account
		                </a>
		            </div>
		          
					</div></form>
		
		                <i class="fa fa-home" aria-hidden="true"><a class="" href="../index.php">
		                    Back Home
		                </a></i>
		            
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="../admin/assets/js/vendor-all.min.js"></script>
<script src="../admin/assets/js/plugins/bootstrap.min.js"></script>





</body>

</html>
