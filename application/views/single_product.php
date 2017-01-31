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
        <link href="<?php echo base_url();?>css/bootstrap-select.css" rel="stylesheet">
        <!-- <link href="style.css" rel="stylesheet"> -->
        <link href="<?php echo base_url();?>css/shop.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet">
		 <link href="<?php echo base_url();?>css/magiczoomplus.css" rel="stylesheet" type="text/css" media="screen"/>
		
	
    </head>
    <body>
		<?php include('nav.php');?>	
		<br/><br/>
			<div class="container">	
				<div class="row">	
						<div class="col-md-5 col-sm-5 text-center">	
							<div class="app-figure" id="zoom-fig">						
								<div style="width:250px !important;height:250px !important;margin:0 auto;">
									<a href="<?php echo base_url(); ?>assets/upload_images/{pr_image}?format=webp" data-options="zoomCaption: top; zoomWidth: 320%;zoomHeight: 165%; zoomDistance: 50; expand: fullscreen; expandZoomOn: always;" title="Smartsheba Zoom Image" data-link="/contact/" class="MagicZoom"><img class="img-responsive my_pic" src="<?php echo base_url(); ?>assets/upload_images/{pr_image}" alt=""/></a> 
							    </div>
						    </div>
						</div>

						<div class="col-md-4 col-sm-4 text-center">
							<div class="company_related" style="">
								<p style="font-size:15px;color:#fff;margin:15px 0 15px;text-align:center;background:#479BAD;padding:5px 0;">Shoping......</p>
								<div class="col-md-12 col-sm-12 price">
									Price: {pr_price} BDT
								</div>
								<!-- <div class="col-md-6 col-sm-12 input-group spinner">
									<input type="text" class="form-control" placeholder="Quantity" value="1">
									<div class="input-group-btn-vertical">
									  <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
									  <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
									</div>
								</div> -->
								<div class="col-md-12 col-sm-12">
									<form role="form" action="/smart_sheba/home/add_to_cart" method="post">
										  <div class="form-group">
										    <input type="text" class="form-control" id="email" name = "quantity" placeholder="Enter Your Quantity" required>
										  </div>

										  <div class="text-center wrong">
											 <span  ><?php echo form_error('quantity'); ?></span>
										  </div>

										  <div class="form-group">
										    <input type="hidden" class="form-control"  name = "id" value={id}>
										  </div>

										  <div class="form-group">
										    <input type="hidden" class="form-control"  name = "price" value={pr_price}>
										  </div>

										<br />
										<br />
									
										  <input type="submit" class="btn btn-success" name="submit" value="Add to cart ">
									</form>
								</div>	
							</div>
						</div>
						
						<div class="col-md-3 col-sm-3">
							<div class="company_related">
								<h4 style="color:#479BAD;margin:15px 0 15px;text-align:center;">Sold By</h4>
								<img class="img-responsive" src="<?php echo base_url();?>assets/profile_images/{image}"  alt="">
								<p style="color:#479BAD;font-size:14px;margin:0 0 -1px 0">{fullname}</p>
								<!-- <p>Client id: {client_id}</p> -->
							</div>
						</div>
				</div>
				<div class="row">
					<div class="col-sm-12 product-info">
							<ul id="myTab" class="nav nav-tabs">
								
								<li class="active tab1"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
								<li class="tab1"><a href="#service-two" data-toggle="tab">CONDITION</a></li>
								<li class="tab1"><a href="#service-four" data-toggle="tab">PREVIOUS PRICE</a></li>
								
								<li class="tab1"><a href="#service-three" data-toggle="tab">LOCATION</a></li>
								
							</ul>
						<div id="myTabContent" class="tab-content">
								<div class="tab-pane fade in active" id="service-one">						 
									<section class="container product-info">
										<span style="font-size:20px;color:#479BAD;"></span>
										{pr_details}
									</section>										  
								</div>
								<div class="tab-pane fade" id="service-two">							
									<section class="container product-info">
										<span style="font-size:20px;color:#479BAD;"></span>
										{pr_condition}
									</section>								
								</div>

							

								<div class="tab-pane fade" id="service-three">							
									<section class="container product-info">
										<span style="font-size:20px;color:#479BAD;"></span>
										{location}
									</section>								
								</div>
								<div class="tab-pane fade" id="service-four">							
									<section class="container product-info">
										<span style="font-size:20px;color:#479BAD;"></span>
										{pr_previous_price}
									</section>								
								</div>
								
						</div>
						
						<br />
						<br />
					</div>
				</div>
			</div>
			
		<?php include('footer.php');?>

	<script src="<?php echo base_url();?>js/magiczoomplus.js" type="text/javascript"></script>		
	<script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/main.js"></script>
	<script src="<?php echo base_url();?>js/carusel1.js"></script>
	<script src="<?php echo base_url();?>js/custom_menu.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap-select.js"></script>
	<script>
		(function ($) {
			  $('.spinner .btn:first-of-type').on('click', function() {
				$('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
			  });
			  $('.spinner .btn:last-of-type').on('click', function() {
				$('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
			  });
			})(jQuery);
	</script>
	
    </body>
</html>
