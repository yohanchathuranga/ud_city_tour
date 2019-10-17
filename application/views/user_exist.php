<html lang="en">
	<head>
			<title>Home</title>
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
				
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
						
								<ul class="sf-menu">

									<li><a href="<?php echo base_url('/index.php/insert_ctrl/insert1'); ?>">About</a></li>
									<li><a href="<?php echo base_url('/index.php/insert_ctrl/insert1'); ?>">Contacts</a></li>
									<li><a href="<?=base_url();?>index.php/welcome"><i class="fa fa-sign-out fa-fw"></i> Back to Login page</a></li>
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
			<body>
			<center>
	<div class="alert alert-success" role="alert">
  		<h4 class="alert-heading">Error</h4>
  		<p>That email address is already registered with <strong>UD Tours</strong></p>
  		<hr>
  		<p class="mb-0">check your email or Try <a href="<?php echo base_url()?>">Sign in</a></p>
	</div>
				</center>
			</body>