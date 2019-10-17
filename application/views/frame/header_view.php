<html lang="en">
	<head>
			<title>Admin Dashboard</title>
			<meta charset="utf-8">
			<link href='http:/fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assert/css/insert.css" />
			<link rel="icon" href="<?php echo base_url(); ?>./assert/images/favicon.ico">
			<link rel="shortcut icon" href="<?php echo base_url(); ?>./assert/images/favicon.ico" />
			<link rel="stylesheet" href="<?php echo base_url(); ?>./assert/booking/css/booking.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>./assert/css/camera.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>./assert/css/font-awesome.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>./assert/css/owl.carousel.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>./assert/css/style.css">
			<script src="<?php echo base_url(); ?>./assert/js/jquery.js"></script>
			<script src="<?php echo base_url(); ?>./assert/js/jquery-migrate-1.2.1.js"></script>
			<script src="<?php echo base_url(); ?>./assert/js/script.js"></script>
			<script src="<?php echo base_url(); ?>./assert/js/superfish.js"></script>
			<script src="<?php echo base_url(); ?>./assert/js/jquery.ui.totop.js"></script>
			<script src="<?php echo base_url(); ?>./assert/js/jquery.equalheights.js"></script>
			<script src="<?php echo base_url(); ?>./assert/js/jquery.mobilemenu.js"></script>
			<script src="<?php echo base_url(); ?>./assert/js/jquery.easing.1.3.js"></script>
			<script src="<?php echo base_url(); ?>./assert/js/owl.carousel.js"></script>
            <script src="<?php echo base_url(); ?>./assert/js/camera.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
			<!--[if (gt IE 9)|!(IE)]><!-->
			<script src="<?php echo base_url(); ?>./assert/js/jquery.mobile.customized.min.js"></script>
			<!--<![endif]-->
			<script src="<?php echo base_url(); ?>./assert/booking/js/booking.js"></script>
			<script>
				$(document).ready(function(){
					jQuery('#camera_wrap').camera({
						loader: false,
						pagination: false ,
						minHeight: '444',
						thumbnails: false,
						height: '28.28125%',
						caption: true,
						navigation: true,
						fx: 'mosaic'
					});
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			
		</head>
		<body>


			<header>
				<div class="menu_block ">
			
					<div class="container_12">
				
						<div class="grid_12">
                            <h3 align="center">Admin Panel</h3>
				
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
						
								<ul class="sf-menu">
                                <li><a href="<?=base_url();?>index.php/Controller_Admin"><i class="glyphicon glyphicon-eye-open"></i> View As</a></li>
                                    <li><a href="<?=base_url();?>index.php/welcome/nav_admin"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
									<li><a href="<?=base_url();?>index.php/welcome/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
									<!-- <li><a href="#"></div><h6 class="modal-title" id="myModalLabel">(<?=$this->session->userdata('email')?>)</h6></a></li> -->
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					
				</div>
				<div class="container_12">
					<div class="grid_12">
						<h1>
										<!-- <a href="index.html"> -->
							<img src="<?php echo base_url(); ?>./assert/images/logo1.png" >
							</a>
						</h1>
					</div>
				</div>
				<div class="clear"></div>
			</header>