<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="dashboard.php" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<strong>Complaint Management</strong>
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
				
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown">
									<i class="icon feather icon-bell"></i>
									<?php
$rt = mysqli_query($con,"select tblcomplaints.*,users.fullName as name from tblcomplaints join users on users.id=tblcomplaints.userId where tblcomplaints.status is null");
$num1 = mysqli_num_rows($rt);
?>
									<span class="badge badge-pill badge-danger"><?php echo htmlentities($num1)?></span>
								</a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										
									</div>
									<ul class="noti-body">
										
										<li class="notification">
											<?php
											$cnt=1;
													while($row=mysqli_fetch_array($rt))
{
?>
											<div class="media">

												<img class="img-radius" src="assets/images/user/user.png" alt="Generic placeholder image">
												<div class="media-body">

													<p><strong><?php echo htmlentities($row['name']);?></strong><span class="n-time text-muted"></p>
													<p>Complaint No.<a href="complaint-details.php?cid=<?php echo htmlentities($row['complaintNumber']);?>"><?php echo htmlentities($row['complaintNumber']);?> at <small><?php echo htmlentities($row['regDate']);?></small> </a></p>
												</div>
											</div>
											<br><?php $cnt=$cnt+1; } ?>
										</li>
									
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="assets/images/user/user-gear.png" class="img-radius" alt="User-Profile-Image">
										<?php

$ret=mysqli_query($con,"select fullname from admin");
$row=mysqli_fetch_array($ret);
$name=$row['fullname'];

?>
										<span> <?php echo $name; ?></span>
										<a href="logout.php" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="admin-profile.php" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="setting.php" class="dropdown-item"><i class="feather icon-mail"></i> Settings</a></li>
										<li><a href="logout.php" class="dropdown-item"><i class="feather icon-lock"></i> Logout</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>