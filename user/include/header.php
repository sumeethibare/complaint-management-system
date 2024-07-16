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
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="../admin/assets/images/user/user.png" class="img-radius" alt="User-Profile-Image">
										<?php

$ret=mysqli_query($con,"select fullname from users");
$row=mysqli_fetch_array($ret);
$name=$row['fullname'];

?>
										<span> <?php echo $name; ?></span>
										<a href="logout.php" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="profile.php" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="setting.php" class="dropdown-item"><i class="feather icon-mail"></i> Settings</a></li>
										<li><a href="logout.php" class="dropdown-item"><i class="feather icon-lock"></i> Logout</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>