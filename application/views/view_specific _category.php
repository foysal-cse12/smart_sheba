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
        <link href="<?php echo base_url();?>style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/shop.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/bootstrap-select.css" rel="stylesheet">
		 
		<style type="text/css">

		</style>
    </head>
    <body>
		<?php include('nav.php');?>	
			<div class="container">
				<div class="row per_section1">
					<div class="col-sm-2 hidden-xs banner_img">
					   <img class="img-responsive" src="<?php echo base_url();?>images/banner1.png" alt="#">
					</div>
					<div class="col-sm-8">					
					
						<div id="carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active" data-thumb="0">
									<img src="<?php echo base_url();?>images/01.png">
								</div>
								<div class="item" data-thumb="0">
									<img src="<?php echo base_url();?>images/02.png">
								</div>
								<div class="item" data-thumb="0">
									<img src="<?php echo base_url();?>images/03.png">
								</div>
								<div class="item" data-thumb="0">
									<img src="<?php echo base_url();?>images/04.png">
								</div>
								<div class="item" data-thumb="1">
									<img src="<?php echo base_url();?>images/01.png">
								</div>
								<div class="item" data-thumb="1">
									<img src="<?php echo base_url();?>images/02.png">
								</div>
								<div class="item" data-thumb="1">
									<img src="<?php echo base_url();?>images/03.png">
								</div>
								<div class="item" data-thumb="1">
									<img src="<?php echo base_url();?>images/04.png">
								</div>
							</div>
						</div> 
						<div class="clearfix">
							<div id="thumbcarousel" class="carousel slide" data-interval="false">
								<div class="carousel-inner">
									<div class="item active">
										<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="<?php echo base_url();?>images/01.png"></div>
										<div data-target="#carousel" data-slide-to="1" class="thumb"><img src="<?php echo base_url();?>images/02.png"></div>
										<div data-target="#carousel" data-slide-to="2" class="thumb"><img src="<?php echo base_url();?>images/03.png"></div>
										<div data-target="#carousel" data-slide-to="3" class="thumb"><img src="<?php echo base_url();?>images/04.png"></div>
									</div>
									<div class="item">
										<div data-target="#carousel" data-slide-to="4" class="thumb"><img src="<?php echo base_url();?>images/01.png"></div>
										<div data-target="#carousel" data-slide-to="5" class="thumb"><img src="<?php echo base_url();?>images/02.png"></div>
										<div data-target="#carousel" data-slide-to="6" class="thumb"><img src="<?php echo base_url();?>images/03.png"></div>
										<div data-target="#carousel" data-slide-to="7" class="thumb"><img src="<?php echo base_url();?>images/04.png"></div>
									</div>
								</div>
								<a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
								</a>
								<a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-2 banner_img">
					   <img class="img-responsive" src="<?php echo base_url();?>images/banner1.png" alt="#">
					</div>
			    </div>
			</div>
			<div class="shop_div" style="background-color:#F3F3F3;padding-bottom:20px;">
						
				<div class="container">
					<div id="nav-trigger">
						<span>Menu</span>
					</div>
					<nav id="nav-main" class="per_section">
						<ul>
							<li><a href="/smart_sheba/home/specific_product/clothes">Clothes</a></li>
							<li><a href="/smart_sheba/home/specific_product/electronics">Electronics</a></li>
							<li><a href="/smart_sheba/home/specific_product/jewlery">Jewlery</a></li>
							<li><a href="/smart_sheba/home/specific_product/mobile">Mobils & Tab</a></li>
							<li><a href="/smart_sheba/home/specific_product/heath_and_beauty">Health & Beauty</a></li>
							<li><a href="/smart_sheba/home/specific_product/home">Home & Living</a></li>
							<li><a href="/smart_sheba/home/specific_product/sports">Sporting Goods</a></li>
							<li><a href="/smart_sheba/home/specific_product/foods">Foods</a></li>
							<li><a href="/smart_sheba/home/specific_product/kids">Kids & Babies</a></li>
							<li><a href="/smart_sheba/home/specific_product/other">Others</a></li>
						</ul>
					</nav>
					<nav id="nav-mobile"></nav>
				</div>
				
				<div class="container">			
					<div class="row text-center">
					
						<div class="col-sm-12">
							<img class="img-responsive" src="<?php echo base_url();?>images/banner.jpg" alt="" />
						</div>
						{list}

						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="pdf-thumb-box">
								<a href="/smart_sheba/home/single_product/{id}/{client_id}">
									<div class="pdf-thumb-box-overlay">
										<span class="btn button1">
											Contact Us
										</span>							
									</div>
									<img class="img-responsive" src="<?php echo base_url(); ?>assets/upload_images/{pr_image}" alt="2013 Genel Katalog" style="width:270px;height:250px;">
									<p class="m_text1" style="font-size:20px;margin-bottom:-1px;color:#479BAD;">{pr_title}</p>
									<p>{pr_price} BDT</p>
								</a>
							</div>
						</div>
						{/list}
					
					</div>

					<div class="col-sm-12 text-center">
					    <nav>
							<ul class="pagination">
								<?php echo "$links"; ?>
							</ul>
						</nav>
					</div>



				</div>	
			</div>
			<?php include('footer.php');?>

		
	<script src="<?php echo base_url(); ?>js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url(); ?>css/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/main.js"></script>
	<script src="<?php echo base_url(); ?>js/carusel1.js"></script>
	<script src="<?php echo base_url(); ?>js/custom_menu.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap-select.js"></script>
	<script>
		$(document).ready(function(){
			$("#nav-mobile").html($("#nav-main").html());
			$("#nav-trigger span").click(function(){
				if ($("nav#nav-mobile ul").hasClass("expanded")) {
					$("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
					$(this).removeClass("open");
				} else {
					$("nav#nav-mobile ul").addClass("expanded").slideDown(250);
					$(this).addClass("open");
				}
			});
		});
		/*slider*/
		(function($){
			$('#thumbcarousel').carousel(0);
			var $thumbItems = $('#thumbcarousel .item');
			$('#carousel').on('slide.bs.carousel', function (event) {
			   var $slide = $(event.relatedTarget);
			   var thumbIndex = $slide.data('thumb');
			   var curThumbIndex = $thumbItems.index($thumbItems.filter('.active').get(0));
				if (curThumbIndex>thumbIndex) {
					$('#thumbcarousel').one('slid.bs.carousel', function (event) {
						$('#thumbcarousel').carousel(thumbIndex);
					});
					if (curThumbIndex === ($thumbItems.length-1)) {
						$('#thumbcarousel').carousel('next');
					} else {
						$('#thumbcarousel').carousel(numThumbItems-1);
					}
				} else {
					$('#thumbcarousel').carousel(thumbIndex);
				}
			});
		})(jQuery);

		
	</script>	
    </body>
</html>
