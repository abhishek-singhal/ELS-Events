<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Enterprise Logistic Services</title>
    <link href="<?php echo URL;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL;?>css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo URL;?>css/main.css" rel="stylesheet">
	<link href="<?php echo URL;?>css/animate.css" rel="stylesheet">
	<link href="<?php echo URL;?>css/responsive.css" rel="stylesheet">
	       
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo URL;?>images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo URL;?>images/logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo URL;?>images/logo.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo URL;?>images/logo.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo URL;?>images/logo.png">
</head><!--/head-->

<body>
<header id="header" role="banner">		
	<div class="main-nav fixed-menu">
		<div class="container">
			<div class="row">
				
					<a class="navbar-brand" href="<?php echo URL;?>home/index">
						<img class="img-responsive" src="<?php echo URL;?>images/logo.png" alt="logo">
					</a>
					<ul class="nav navbar-nav navbar-right">                 
		                    <li><a href="<?php echo URL;?>home/index">Home</a></li>
		                    <?php if($page == 2){?><li class="active"><?php }else{?><li><?php }?><a href="<?php echo URL;?>home/events">Events</a></li>                         
		                    <li><a href="<?php echo URL;?>home/index/#event">Team</a></li>
		                    <li class="scroll"><a href="<?php echo URL;?>home/index/#sponsor">Gallery</a></li>
		                    <li><a href="<?php echo URL;?>home/index/#about">About</a></li>
		                    <li><a href="<?php echo URL;?>home/index/#contact">Contact</a></li>                     
		                    <?php if($page == 4){?><li class="active"><?php }else{?><li><?php }?><a href="<?php echo URL;?>home/driversworld">Drivers World &trade;</a></li>
<!-- 		                    <li><a class="no-scroll" href="#" target="_blank">PURCHASE TICKETS</a></li> -->
		                    
		            </ul>
		         
		     </div>
		</div>
	</div>
	
</header>