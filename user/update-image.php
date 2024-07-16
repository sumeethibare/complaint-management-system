
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['id'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
	$imgfile=$_FILES["image"]["name"];

// get the image extension
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");

// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$imgnewfile=md5($imgfile).$extension;
// Code for move image into directory
move_uploaded_file($_FILES["image"]["tmp_name"],"userimages/".$imgnewfile);
$id=$_SESSION["id"];
$sql=mysqli_query($con,"update users set userImage='$imgnewfile' where id='$id'");
if($query)
{

echo "<script>alert('Profile photo Updated successfully');</script>";
}
else
{
$errormsg="Profile photo not updated !!";
echo "<script>alert('Profile photo not updated');</script>";
}
}
}

	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CMS||User Profile</title>
   

    <!-- vendor css -->
    <link rel="stylesheet" href="../admin/assets/css/style.css">
    
    

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
                            <h5 class="m-b-10">User Profile</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="profile.php">User Profile</a></li>
                            
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
                        <h5>User Profile</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                            	<?php
$id=intval($_SESSION["id"]);
$query=mysqli_query($con,"select * from users where id='$id'");
while($row=mysqli_fetch_array($query))
{
?>	
                                <form method="post" enctype="multipart/form-data">
                                	
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">User Photo</label>
                                        <?php $userphoto=$row['userImage'];
if($userphoto==""):
?>
<img src="userimages/noimage.png" width="256" height="256" >
<?php else:?>
    <img src="userimages/<?php echo htmlentities($userphoto);?>" width="256" height="256">

<?php endif;?>
                                        
                                    </div>
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Upload New Photo</label>
                                        <input type="file" name="image"  required />
                                        
                                    </div>
                                      <?php } ?>
                                
                                    <button type="submit" class="btn  btn-primary" name="submit">Update</button>
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
    <script src="../admin/assets/js/vendor-all.min.js"></script>
    <script src="../admin/assets/js/plugins/bootstrap.min.js"></script>
    <script src="../admin/assets/js/pcoded.min.js"></script>




</body>

</html>
<?php } ?>