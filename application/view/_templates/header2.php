<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ELS | Drivers World&trade;</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo URL;?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo URL;?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="<?php echo URL;?>dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo URL;?>dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo URL;?>css/font-awesome.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		
		<header class="main-header">
			<a href="<?php echo URL;?>driversworld/index" class="logo">
				<span class="logo-mini"><b>ELS</b></span>
				<span class="logo-lg"><b>ELS</b> Drivers World&trade;</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i><?php if($rank>3){ if($user_details->vtmlive_id==0){ ?><span class="label label-warning">1</span><?php }}?>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have <?php if($rank>3){ if($user_details->vtmlive_id==0){?>1<?php }else{?>0<?php }}else{?>0<?php }?> notification(s)</li>
								<li>
									<ul class="menu">
										<?php if($rank>3){ if($user_details->vtmlive_id==0){?>
										<li><a href="<?php echo URL;?>driversworld/joblog"><i class="fa fa-warning text-yellow"></i> Connect your VTM account</a></li>
										<?php }}?>
									</ul>
								</li>
							</ul>
						</li>
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="<?php echo $avatar;?>" class="user-image" alt="User Image">
								<span class="hidden-xs"><?php echo $user_details->steam_name;?></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-header">
									<img src="<?php echo $avatar;?>" class="img-circle" alt="User Image">
									<p><?php echo $user_details->steam_name . ' - ' . $role;?>
										<small>Member since <?php echo date("F j, Y",$user_details->register_time);?></small></p>
								</li>
								<!--
								<li class="user-body">
									<div class="row">
										<div class="col-xs-4 text-center">
											<a href="#">Followers</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Sales</a>
										</div>
										<div class="col-xs-4 text-center">
											<a href="#">Friends</a>
										</div>
									</div>
								</li>-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="<?php echo URL . 'driversworld/profile/' . $_SESSION['user_id'];?>" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right">
										<a href="<?php echo URL;?>driversworld/logout" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		
		<aside class="main-sidebar">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php echo $avatar;?>" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p><?php echo $user_details->steam_name;?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>
					
					<li<?php if($page==1){?> class="active"<?php }?>>
						<a href="<?php echo URL;?>driversworld/index">
							<i class="fa fa-dashboard"></i> <span>Dashboard</span>
						</a>
					</li>
					<?php if($rank<2){?>
					<li<?php if($page==5){?> class="active"<?php }?>>
						<a href="<?php echo URL;?>driversworld/join">
							<i class="fa fa-id-card-o"></i> <span>Join ELS</span>
						</a>
					</li>
					<?php }?>
					<li<?php if($page==3){?> class="active"<?php }?>>
						<a href="<?php echo URL;?>driversworld/upevents">
							<i class="fa fa-calendar"></i> <span>Upcoming Events</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-blue"><?php echo $this->model->countFutureEvents(time());?></small>
							</span>
						</a>
					</li>
					
					<?php if($rank>3){?>
					<li<?php if($page==10){?> class="active"<?php }?>>
						<a href="<?php echo URL;?>driversworld/joblog">
							<i class="fa fa-book"></i> <span>Job Logger</span>
								<?php if($rank>1){?>
								<span class="pull-right-container">
									<small class="label pull-right bg-yellow">New</small>
								</span>
								<?php }?>
						</a>
					</li>
					<?php }?>
					
					<li<?php if($page==7){?> class="active"<?php }?>>
						<a href="<?php echo URL;?>driversworld/profiles">
							<i class="fa fa-users"></i> <span>Members</span>
						</a>
					</li>
					
					<li<?php if($page==8){?> class="active"<?php }?>>
						<a href="<?php echo URL;?>driversworld/report">
							<i class="fa fa-exclamation-triangle"></i> <span>Report Bug/Error & Feedback</span>
						</a>
					</li>
					
					<?php if($rank==8 || $rank==9 || $rank>12){?>
					<li<?php if($page==2){?> class="active"<?php }?>>
						<a href="<?php echo URL;?>driversworld/crevent">
							<i class="fa fa-calendar-plus-o"></i> <span>Create Event</span>
						</a>
					</li>
					<?php }?>
					
					<?php if($rank>10){?>
					<li<?php if($page==6){?> class="active"<?php }?>>
						<a href="<?php echo URL;?>driversworld/apps">
							<i class="fa fa-file-text-o"></i> <span>Applications</span>
							<?php if($rank>4){?>
							<span class="pull-right-container">
								<small class="label pull-right bg-blue"><?php echo $app_pending;?></small>
								<small class="label pull-right bg-yellow"><?php echo $app_new;?></small>
								<small class="label pull-right bg-aqua"><?php echo $app_dec_pending;?></small>
							</span>
							<?php }?>
						</a>
					</li>
					<?php }?>
					
					<?php if($rank==10|| $rank>12){?>
					<li<?php if($page==9){?> class="active"<?php }?>>
						<a href="<?php echo URL;?>driversworld/bugs">
							<i class="fa fa-bug"></i> <span>Bugs Reported</span>
							<span class="pull-right-container">
								<small class="label pull-right bg-red"><?php echo $unsolved_bugs;?></small>
								<small class="label pull-right bg-yellow"><?php echo $new_bugs;?></small>
							</span>
						</a>
					</li>
					<?php }?>
			</section>
		</aside>