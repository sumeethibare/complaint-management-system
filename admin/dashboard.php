<?php session_start();
//error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Complaint Management System || Dashboard</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
            <!-- table card-1 start -->
            <div class="col-md-12 col-xl-4">
         
                <!-- widget primary card start -->
                <div class="card flat-card widget-primary-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="feather icon-users"></i>
                        </div>
                        <div class="col-sm-9">
                            <?php $query1=mysqli_query($con,"select id from users");
$totusers=mysqli_num_rows($query1);
?>
                            <h4><?php echo $totusers;?></h4>
                            <a href="manage-users.php"><h6>Total Users</h6></a>
                        </div>
                    </div>
                </div>
                <!-- widget primary card end -->
            </div>
            <!-- table card-1 end -->
            <!-- table card-2 start -->
            <div class="col-md-12 col-xl-4">
                
                <!-- widget-success-card start -->
                <div class="card flat-card bg-warning">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="col-sm-9">
                            <?php $query2=mysqli_query($con,"select id from category");
$totcategory=mysqli_num_rows($query2);
?>
                            <h4><?php echo $totcategory;?></h4>
                            <a href="category.php"><h6>Total Category</h6></a>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
              <div class="col-md-12 col-xl-4">
                
                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="col-sm-9">
                           <?php $query3=mysqli_query($con,"select id from subcategory");
$totsubcategory=mysqli_num_rows($query3);
?>
                            <h4><?php echo $totsubcategory;?></h4>
                            <a href="subcategory.php"><h6>Total Subcategory</h6></a>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
            <!-- table card-2 end -->
            <div class="col-md-12 col-xl-4">
                
                <!-- widget-success-card start -->
                <div class="card flat-card bg-primary">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="col-sm-9">
                           <?php $query4=mysqli_query($con,"select id from state");
$totstate=mysqli_num_rows($query4);
?>
                            <h4><?php echo $totstate;?></h4>
                            <a href="state.php"><h6>Total State</h6></a>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
              <div class="col-md-12 col-xl-4">
                
                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="col-sm-9">
                           <?php $query5=mysqli_query($con,"select complaintNumber from tblcomplaints");
$totcom=mysqli_num_rows($query5);
?>
                            <h4><?php echo $totcom;?></h4>
                            <a href="all-complaint.php"><h6>Total Complaints</h6></a>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
              <div class="col-md-12 col-xl-4">
                
                <!-- widget-success-card start -->
                <div class="card flat-card bg-danger">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="col-sm-9">
                          <?php $query5=mysqli_query($con,"select complaintNumber from tblcomplaints where status is null");
$newcom=mysqli_num_rows($query5);
?>
                            <h4><?php echo $newcom;?></h4>
                            <a href="notprocess-complaint.php"><h6>Pending Complaints</h6></a>
                        </div>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
              <div class="col-md-12 col-xl-4">
                
                <!-- widget-success-card start -->
                <div class="card flat-card bg-warning">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="col-sm-9">
                           <?php $query5=mysqli_query($con,"select complaintNumber from tblcomplaints where status='in process'");
$inprocesscom=mysqli_num_rows($query5);
?>
                            <h4><?php echo $inprocesscom;?></h4>
                            <a href="inprocess-complaint.php"><h6>Inprocess Complaints</h6></a>
                        </div>
                    </div>
                </div>

                <!-- widget-success-card end -->
            </div>
              <div class="col-md-12 col-xl-4">
                
                <!-- widget-success-card start -->
                <div class="card flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="fas fa-file"></i>
                        </div>
                        <div class="col-sm-9">
                           <?php $query5=mysqli_query($con,"select complaintNumber from tblcomplaints where status='closed'");
$closedcom=mysqli_num_rows($query5);
?>
                            <h4><?php echo $closedcom;?></h4>
                            <a href="closed-complaint.php"><h6>Closed Complaints</h6></a>
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
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="assets/js/pages/dashboard-main.js"></script>
</body>

</html>
<?php } ?>