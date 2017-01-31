<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smartsheba</title>
		
        <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
        <link href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/bootstrap/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/bootstrap-select.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet">
		<!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/demo.css" />
				<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/common.css" /> -->
		
    </head>
    <body>
		<div class="patarn">
			<?php include('nav.php');?>	
			<div class="container-fluid">
				<!--social start-->
				<div class="row">
					<div class="mobile-social-share social1">
						<div id="socialHolder">
							<div id="socialShare" class="btn-group share-group">
								<a data-toggle="dropdown" class="btn m_btn">
									 <i class="fa fa-share-alt fa-inverse"></i>
								</a>
								<button href="#" data-toggle="dropdown" class="btn m_btn1 dropdown-toggle share">
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									
									<li>
										<a data-original-title="Facebook" rel="tooltip"  href="https://www.facebook.com/winskit" class="btn btn-facebook" data-placement="left">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li>
										<a data-original-title="Twitter" rel="tooltip"  href="#" class="btn btn-twitter" data-placement="left">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li>
										<a data-original-title="Google+" rel="tooltip"  href="#" class="btn btn-google" data-placement="left">
											<i class="fa fa-google-plus"></i>
										</a>
									</li>
									<li>
										<a data-original-title="LinkedIn" rel="tooltip"  href="#" class="btn btn-linkedin" data-placement="left">
											<i class="fa fa-linkedin"></i>
										</a>
									</li>
									<li>
										<a data-original-title="Pinterest" rel="tooltip"  class="btn btn-pinterest" data-placement="left">
											<i class="fa fa-pinterest"></i>
										</a>
									</li>
									<li>
										<a  data-original-title="Email" rel="tooltip" class="btn btn-mail" data-placement="left">
											<i class="fa fa-envelope"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--social end-->
				<div class="row">
					<div class="col-sm-2 banner_img text-center"">

					   <img class="img-responsive" src="<?php echo base_url();?>images/banner1.png" alt="#" style="display:inline !important;">
					</div><!-- For Banner -->
					<div class="col-sm-8">
						<div id="first-slider">
							<div id="carousel-example-generic" class="carousel slide carousel-fade">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									<li data-target="#carousel-example-generic" data-slide-to="3"></li>
								</ol>
								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<!-- Item 1 -->
									<div class="item active slide1">							
											<div class="row">
												<!-- <div class="col-sm-4 text-right">
													<img style="max-width: 100px;"  data-animation="animated zoomInLeft" src="<?php echo base_url();?>images/slider/1.png">
												</div> -->
												<div class="text-center" style="padding-top:150px;">
													<p class="text1" data-animation="animated bounceInDown">Add images, or even your logo!</p>
													<p class="text1" data-animation="animated bounceInUp">Easily use stunning effects</p>             
												</div>
											</div>
										</div>
									<!-- Item 2 -->
									<div class="item slide2">
										<div class="row">
											<div class="text-center" style="padding-top:150px;">
												<p class="text1" data-animation="animated bounceInDown"> 50 animation options A beautiful</p>
												<p class="text1" data-animation="animated bounceInUp">Create beautiful slideshows </p>
											 </div>
											<!-- <div class="col-sm-4 text-left">
												<img style="max-width: 100px;"  data-animation="animated zoomInLeft" src="<?php echo base_url();?>images/slider/2.png">
											</div> -->
									    </div>
									</div>
									<!-- Item 3 -->
									<!-- <div class="item slide3">
										<div class="container">
											<div class="col-sm-8 text-center">
												<p class="text1" data-animation="animated bounceInDown">Simple Bootstrap Carousel</p>
												<p class="text1" data-animation="animated bounceInUp">Bootstrap Image Carousel Slider with Animate.css</p>
											 </div>
											<div class="col-sm-4 text-left">
												<img style="max-width: 100px;"  data-animation="animated zoomInLeft" src="images/slider/3.png">
											</div>     
										</div>
									</div> -->
									<!-- Item 4 -->
									<!-- <div class="item slide4">
										<div class="container">
											<div class="col-sm-8 text-center">
												<p class="text1" data-animation="animated bounceInDown">We are creative</p>
												<p class="text1" data-animation="animated bounceInUp">Get start your next awesome project</p>
											 </div>
											<div class="col-sm-4 text-left">
												<img style="max-width: 100px;"  data-animation="animated zoomInLeft" src="images/slider/4.png">
											</div>  
										</div>
									</div> -->
									<!-- End Item 4 -->
							
								</div>
								<!-- End Wrapper for slides-->
								<!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									<i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									<i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
								</a> -->
							</div>
						</div>
					</div>
					<div class="col-sm-2 hidden-xs banner_img">
						
					   <img class="img-responsive" src="<?php echo base_url();?>images/banner1.png" alt="#" style="display:inline !important;">
					
					</div><!-- For Banner -->			
				</div>
			</div>
			
					
			
		<div class="container">
			<!-- Bottom to top-->
            <div class="row main_part">
                <div class="col-sm-6 col-md-4 space_top">
                  <!-- normal -->
                     <div class="ih-item circle colored effect10 bottom_to_top divcenter"><a href="/smart_sheba/home/information">
                      <div class="img"><img src="<?php echo base_url();?>images/information.jpg" alt="img"></div>
                      <div class="info">
                        <h3>Information</h3>
                        <p>Description goes here</p>
                      </div></a>
					</div>
                  <!-- end normal -->
                </div>
                <div class="col-sm-6 col-md-4 space_top">
                  <!-- colored -->
                  <div class="ih-item circle colored effect10 bottom_to_top divcenter"><a href="/smart_sheba/home/member">
                      <div class="img"><img src="<?php echo base_url();?>images/member1.png" alt="img"></div>
                      <div class="info">
                        <h3>Member</h3>
                        <p>Description goes here</p>
                      </div></a></div>
                  <!-- end colored -->
                </div>
				<div class="col-sm-6 col-md-4 space_top">
                  <!-- colored -->
                  <div class="ih-item circle colored effect10 bottom_to_top divcenter"><a href="/smart_sheba/home/shop">
                      <div class="img"><img src="<?php echo base_url();?>images/shop1.png" alt="img"></div>
                      <div class="info">
                        <h3>Shop</h3>
                        <p>Description goes here</p>
                      </div></a></div>
                  <!-- end colored -->
                </div>
				
				<div class="col-sm-6 col-md-4 space_top">
                  <!-- normal -->
                     <div class="ih-item circle colored effect10 bottom_to_top divcenter"><a href="/smart_sheba/home/shop_discount">
                      <div class="img"><img src="<?php echo base_url();?>images/Discount.png" alt="img"></div>
                      <div class="info">
                        <h3>Discount</h3>
                        <p>Description goes here</p>
                      </div></a>
					</div>
                  <!-- end normal -->
                </div>
				
				<!-- <div class="col-sm-6 col-md-4 space_top">
				                  normal
				                     <div class="ih-item circle colored effect10 bottom_to_top divcenter"><a href="/smart_sheba/home/about_us">
				                      <div class="img"><img src="<?php echo base_url();?>images/about.png" alt="img"></div>
				                      <div class="info">
				                        <h3>About Us</h3>
				                        <p>Description goes here</p>
				                      </div></a>
					</div>
				                  end normal
				                </div> -->


				<div class="col-sm-6 col-md-4 space_top">
                  <!-- normal -->
                     <div class="ih-item circle colored effect10 bottom_to_top divcenter"><a href="/smart_sheba/home/academy">
                      <div class="img"><img src="<?php echo base_url();?>images/about.png" alt="img"></div>
                      <div class="info">
                        <h3>Academy</h3>
                        <p>Description goes here</p>
                      </div></a>
					</div>
                  <!-- end normal -->
                </div>          
                     
				
				<div class="col-sm-6 col-md-4 space_top">
                  <!-- normal -->
                     <div class="ih-item circle colored effect10 bottom_to_top divcenter"><a href="/smart_sheba/home/contact_us">
                      <div class="img"><img src="<?php echo base_url();?>images/contact.png" alt="img"></div>
                      <div class="info">
                        <h3>Contact Us</h3>
                        <p>Description goes here</p>
                      </div></a>
					</div>
                  <!-- end normal -->
                </div>
            </div>
              <!-- end Bottom to top-->
              
		</div>
		<?php include('footer.php');?>
	</div>
		
	<script src="<?php echo base_url(); ?>js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url(); ?>css/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/main.js"></script>
	<script src="<?php echo base_url(); ?>js/carusel1.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap-select.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		$('.feed-back').click(function() {
		  var clicks = $(this).data('clicks');
		  if (clicks) {
		        $(this).find(".fa-chevron-down").css({"-ms-transform": "rotate(0deg)", "-webkit-transform": "rotate(0deg)" , "transform": "rotate(0deg)" , "-webkit-transition-duration": "1s" , "-moz-transition-duration": "1s" , "-o-transition-duration": "1s" , "transition-duration": "0.5s"});
		  } else {
		        $(this).find(".fa-chevron-down").css({"-ms-transform": "rotate(180deg)", "-webkit-transform": "rotate(180deg)" , "transform": "rotate(180deg)" , "-webkit-transition-duration": "1s" , "-moz-transition-duration": "1s" , "-o-transition-duration": "1s" , "transition-duration": "0.5s"});
		  }
		  $(this).data("clicks", !clicks);
		});

		});

		<!--slide-->


		$(document).ready(function(){
		    $(".feed-back").click(function(){
		        $(".col-87").slideToggle("500");
		    });
		});
		<!--  -->
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})

		<!--dropdown social-->
		$(function(){
		    $('.share-group').hover(function() {
		        $(this).addClass('open');
		    },
		    function() {
		        $(this).removeClass('open');
		    });
		});
		<!--dropdown select-->
		$(function(){
		    $('.input-group').hover(function() {
		        $(this).addClass('open');
		    },
		    function() {
		        $(this).removeClass('open');
		    });
		});


	</script> 	
    </body>
</html>
