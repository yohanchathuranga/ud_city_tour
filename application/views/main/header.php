<html lang="en">
	<head>
			<title>Home</title>
			<meta charset="utf-8">
			<link href='http:/fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assert/css/insert.css" />
			<link rel="icon" href="<?php echo base_url(); ?>./assert/images/favicon.ico">
			<link rel="shortcut icon" href="<?php echo base_url(); ?>./assert/images/favicon.ico" />
			<link rel="stylesheet" href="<?php echo base_url(); ?>./assert/booking/css/booking.css">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assert/css/update.css" ?>">
			<link rel="stylesheet" href="<?php echo base_url()?>./assert/css/delete.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>./assert/css/camera.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>./assert/css/font-awesome.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>./assert/css/owl.carousel.css">
			<link rel="stylesheet" href="<?php echo base_url(); ?>./assert/css/style.css">
			<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assert/css/modalPopup.css' ?>">
			<script src="<?php echo base_url() . 'assert/js/modalPopup.js'; ?>"></script>
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

			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
							<nav class="horizontal-nav full-width horizontalNav-notprocessed fixed-top">
								<ul class="sf-menu">
									<li class="current"><a href="<?php echo base_url('/index.php/insert_ctrl_y/index'); ?>">Home</a></li>
									<li><a href="<?php echo base_url('/index.php/Controller_Admin/viewTab2'); ?>">Packages</a></li>
									<li><a href="<?php echo base_url('/index.php/insert_ctrl_y/insert1'); ?>">Booking</a></li>
									<li><a href="<?php echo base_url('/index.php/insert_ctrl_y/gallary'); ?>">Destinations</a></li>
									<li><a href="<?php echo base_url('/index.php/driver_Controller/driver'); ?>">Driver</a></li>
									<li><a href="<?php echo base_url('/index.php/FaqController/faq'); ?>">FAQs</a></li>
									
									
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
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