<?php
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['id'])==0)
	{	
header('location:index.php');
}
else{
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Complaint Management System || Dashboard</title>
    <link rel="stylesheet" href="../admin/assets/css/style.css">
</head>
<body class="">
	<!-- [ Pre-loader ] start -->
<?php include('include/sidebar.php');?>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<?php include('include/header.php');?>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
           
        
              <div class="col-md-12 col-xl-6">
                
                <!-- widget-success-card start -->
                <div class="card flat-card widget-primary-card">
                    <div class="row-table">
                        <div class="col-sm-4 card-body">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="col-sm-9">
                           <?php 
$uid=$_SESSION['id'];
$query5=mysqli_query($con,"select complaintNumber from tblcomplaints where userId='$uid'");
$totcom=mysqli_num_rows($query5);
?>
                            <h4><?php echo $totcom;?></h4>
                            <h6>Total Complaints</h6>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
              <div class="col-md-12 col-xl-6">
                
                <!-- widget-success-card start -->
                <div class="card flat-card bg-danger">
                    <div class="row-table">
                        <div class="col-sm-4 card-body">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="col-sm-9">
<?php 
$query5=mysqli_query($con,"select complaintNumber from tblcomplaints where userId='$uid' and status is null");
$newcom=mysqli_num_rows($query5);
?>
                            <h4><?php echo $newcom;?></h4>
                            <h6>Pending Complaints</h6>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
              <div class="col-md-12 col-xl-6">
                
                <!-- widget-success-card start -->
                <div class="card flat-card bg-warning">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="col-sm-9">
<?php 
$query5=mysqli_query($con,"select complaintNumber from tblcomplaints where userId='$uid' and status='in process'");
$inprocesscom=mysqli_num_rows($query5);
?>
                            <h4><?php echo $inprocesscom;?></h4>
                            <h6>Inprocess Complaints</h6>
                        </div>
                    </div>
                </div>

                <!-- widget-success-card end -->
            </div>
              <div class="col-md-12 col-xl-6">
                
                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="col-sm-9">
<?php 
$query5=mysqli_query($con,"select complaintNumber from tblcomplaints where userId='$uid' and status='closed'");
$closedcom=mysqli_num_rows($query5);
?>
                            <h4><?php echo $closedcom;?></h4>
                            <h6>Closed Complaints</h6>
                        </div>
                    </div>
                </div>
                
                <!-- widget-success-card end -->
            </div>
     
            </div>
        
        
            <!-- Latest Customers end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
    <script src="../admin/assets/js/vendor-all.min.js"></script>
    <script src="../admin/assets/js/plugins/bootstrap.min.js"></script>


</body>

</html>
<?php } ?>