<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smartsheba | Shop Now</title>
		
        <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
        <link href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/bootstrap/css/font-awesome.css" rel="stylesheet">
         <!-- <link href="<?php //echo base_url();?>style.css" rel="stylesheet"> -->
        <link href="<?php echo base_url();?>css/shop.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet">
		 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/common.css" />
		<style type="text/css">

		</style>
    </head>
    <body>
		<?php include('nav.php');?>	
		<br/><br/>
			<div class="container">	
				<div class="row">	
						<div class="product col-md-5 col-sm-5">						
							<div class="mag">
								<img data-toggle="magnify" src="<?php echo base_url();?>assets/upload_images/{pr_image}" alt="product_image">
							</div>
						</div>

						<div class="col-md-7 col-sm-7">
							<h3 style="color:#479BAD;margin:15px 0 15px;text-align:center;">Shoping......</h3>
							<table class="table table-user-information">
								<tbody>
									<tr>
										<td>Title:</td>
										<td>{pr_title}</td>
									</tr>
									
									<tr>
										<td>Catagory:</td>
										<td>{pr_category}</td>
									</tr>
									
									<tr>
										<td>Price:</td>
										<td>{pr_price} BDT</td>
									</tr>
									
									<tr>
										<td>Discount:</td>
										<td>{pr_discount}% OFF</td>
									</tr>
									
									<tr>
										<td>Location:</td>
										<td>{location}</td>
									</tr>
									
									<tr>
										<td>Contact:</td>
										<td>{mobile}</td>
									</tr>
									
									<tr>
										<td>Email:</td>
										<td>{email}</td>
									</tr>
								</tbody>
							</table>
						</div>
					
				</div> 
			</div>
			<div class="container">		
				<div class="row product-info">
						<ul id="myTab" class="nav nav-tabs">
							
							<li class="active tab1"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
							<!--li class="tab1"><a href="#service-two" data-toggle="tab">DESCRIPTION</a></li-->
							
						</ul>
					<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade in active" id="service-one">
							 
								<section class="container product-info">
									<span style="font-size:20px;color:#479BAD;"></span>{pr_details}<!-- The Corsair Gaming Series GS600 power supply is the ideal price-performance solution for building or upgrading a Gaming PC. A single +12V rail provides up to 48A of reliable, continuous power for multi-core gaming PCs with multiple graphics cards. The ultra-quiet, dual ball-bearing fan automatically adjusts its speed according to temperature, so it will never intrude on your music and games. Blue LEDs bathe the transparent fan blades in a cool glow. Not feeling blue? You can turn off the lighting with the press of a button. -->
								</section>
											  
							</div>
							<!--div class="tab-pane fade" id="service-two">							
								<section class="container product-info">
									<span style="font-size:20px;color:#479BAD;">T</span>he Corsair Gaming Series GS600 power supply is the ideal price-performance solution for building or upgrading a Gaming PC. A single +12V rail provides up to 48A of reliable, continuous power for multi-core gaming PCs with multiple graphics cards. The ultra-quiet, dual ball-bearing fan automatically adjusts its speed according to temperature, so it will never intrude on your music and games. Blue LEDs bathe the transparent fan blades in a cool glow. Not feeling blue? You can turn off the lighting with the press of a button.
								</section>								
							</div-->
							
					</div>
				</div>
			</div>
		<?php include('footer.php');?>

		
	<script src="<?php echo base_url(); ?>js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url(); ?>css/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/main.js"></script>
	<script src="<?php echo base_url(); ?>js/carusel1.js"></script>
	<script src="<?php echo base_url(); ?>js/custom_menu.js"></script>
	<script src="<?php echo base_url(); ?>js/megnify.js"></script>	
    </body>
</html>
