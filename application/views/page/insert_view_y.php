<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<center>
								<ul class="sf-menu">
								<li class="current"><a href="<?php echo base_url('/index.php/insert_ctrl_y/insert1'); ?>">Insert</a></li>
									<li><a href="<?php echo base_url('/index.php/insert_ctrl_y/trip_id'); ?>">Update</a></li>
									<li><a href="<?php echo base_url('/index.php/insert_ctrl_y/trip_id2'); ?>">Delete</a></li>
									<li><a href="<?php echo base_url('/index.php/insert_ctrl_y/view'); ?>">View</a></li>
									
								</ul>
							</center>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
		<title>Insert Data Into Database Using Form</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>./assert/css/insert.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>./assert/css/font-awesome.css">
		<div class="main">

			<div class="sliderwrapper ">
				<div id="camera_wrap" class="">
					<div data-src="<?php echo base_url(); ?>./assert/images/slide.jpg" ></div>
					<div data-src="<?php echo base_url(); ?>./assert/images/slide1.jpg" ></div>
                    <div data-src="<?php echo base_url(); ?>./assert/images/slide2.jpg"></div>
                    <div data-src="<?php echo base_url(); ?>./assert/images/slide4.jpg"></div>
				</div>
			</div>
			<div class="container_12">
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="<?php echo base_url(); ?>./assert/images/icon1.png" alt="">
								<div class="extra_wrapper">Fast&amp;
									<div class="color1">Safe</div>
								</div>
							</div>
							All our FastTaxi driver-partners are verified and trained to deliver only the best experience.
							<a href="#" class="fa fa-share-square"></a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="<?php echo base_url(); ?>./assert/images/icon2.png" alt="">
								<div class="extra_wrapper">Best
									<div class="color1">Prices</div>
								</div>
							</div>
							we offer best price travling service in compare to other transport availabe in your city.
							
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="banner">
						<div class="maxheight">
							<div class="banner_title">
								<img src="<?php echo base_url();?>./assert/images/icon1.png" alt="">
								<div class="extra_wrapper">Fast
									<div class="color1">Booking</div>
								</div>
							</div>
							Book your taxi from anywhere anytime, we will pick you up and drop to your destination
							
						</div>
					</div>
				</div>

					<div class="grid_6 prefix_1">
							<a href="index2.html" class="type"><img src="<?php echo base_url(); ?>./assert/images/page1_img1.jpg" alt=""><span class="type_caption">Economy</span></a>
							<a href="index2.html" class="type"><img src="<?php echo base_url(); ?>./assert/images/page1_img2.jpg" alt=""><span class="type_caption">Standard</span></a>
							<a href="index2.html" class="type"><img src="<?php echo base_url(); ?>./assert/images/page1_img3.jpg" alt=""><span class="type_caption">Luxury</span></a>
						</div>
				</div>

				<div class="container_12">
					<div class="grid_4">

					
						<?php $att = array('id' => 'form');?>
						
							<?php echo form_open('insert_ctrl_y/insert1',$att); ?>
							<h3>Booking Form</h3><hr/>

							<?php if (isset($message)) { ?>
							<CENTER><h3 style="color:green";> Data inserted successfully</h3></CENTER><br>
							<?php } ?>
							<?php echo form_label('Date :'); ?> <?php echo form_error('date'); ?><br />
							<?php echo form_input(array('id' => 'date', 'name' => 'date','type'=>'date','placeholder' => '06/16/2019')); ?><br />

							<?php echo form_label('Pickup Time :'); ?> <?php echo form_error('pickup_time'); ?><br />
							<?php echo form_input(array('id' => 'pickup_time', 'name' => 'pickup_time','type'=>'time','placeholder' => '00:00:00')); ?><br />

							<?php echo form_label('No of Days :'); ?> <?php echo form_error('day_count'); ?><br />
							<?php echo form_input(array('id' => 'day_count', 'name' => 'day_count','placeholder' => 'No of Days')); ?><br />

							<?php echo form_label('Pickup point :'); ?> <?php echo form_error('pickup_point'); ?><br />
							<?php echo form_input(array('id' => 'pickup_point', 'name' => 'pickup_point','placeholder' => 'Pickup Place')); ?><br />

							<?php echo form_label('Destination :'); ?> <?php echo form_error('destination'); ?><br />
							<?php echo form_input(array('id' => 'destination', 'name' => 'destination', 'placeholder' => 'Destination')); ?><br />

							<?php echo form_label('Estimated Distance :'); ?> <?php echo form_error('est_distance'); ?><br />
							<?php echo form_input(array('id' => 'est_distance', 'name' => 'est_distance','placeholder' => 'Estimated Distance')); ?><br />

							<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
							<?php echo form_close(); ?><br/>

							<div id="fugo">
							</div>
						</form>
						
					</div>
					<br><br><br><br>
				<div class="clear"></div>
			</div><br><br><br><br>
			<div class="c_phone">
				<div class="container_12">
					<div class="grid_12">
						<div class="fa fa-phone"></div>+ 94 77 334 627 8
						<span>BOOK NOW!</span>
					</div>
					<div class="clear"></div>
				</div>
			</div>


		

          

		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			})
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</div>

