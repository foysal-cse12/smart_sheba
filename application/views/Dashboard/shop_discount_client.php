
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smartsheba | Shop Now</title>
		
        <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
        <link href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
       
      <link href="<?php echo base_url();?>css/shop.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url();?>css/dashboard.css">
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap/css/font-awesome.css">
      <script src="<?php echo base_url();?>js/script.js"></script>
		 
		<style type="text/css">

		</style>
    </head>
    <body>
		<?php include('nav.php');?><br class="hidden-xs" /><br class="hidden-xs" /><br class="hidden-xs" />
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
							<img class="img-responsive" src="<?php echo base_url();?>images/banner.jpg" alt="" style="margin:0 auto;" />
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
							<li><a href="/smart_sheba/home/specific_product_discount_client/clothes">Clothes</a></li>
							<li><a href="/smart_sheba/home/specific_product_discount_client/electronics">Electronics</a></li>
							<li><a href="/smart_sheba/home/specific_product_discount_client/jewlery">Jewlery</a></li>
							<li><a href="/smart_sheba/home/specific_product_discount_client/mobile">Mobils & Tab</a></li>
							<li><a href="/smart_sheba/home/specific_product_discount_client/heath_and_beauty">Health & Beauty</a></li>
							<li><a href="/smart_sheba/home/specific_product_discount_client/home">Home & Living</a></li>
							<li><a href="/smart_sheba/home/specific_product_discount_client/sports">Sporting Goods</a></li>
							<li><a href="/smart_sheba/home/specific_product_discount_client/foods">Foods</a></li>
							<li><a href="/smart_sheba/home/specific_product_discount_client/kids">Kids & Babies</a></li>
						</ul>
					</nav>
					<nav id="nav-mobile"></nav>
				</div>
				
				<div class="container">			
					<div class="row text-center">
						
						{list}

						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="pdf-thumb-box">
								<a href="/smart_sheba/home/single_product_discount_client/{id}/{client_id}">
									<div class="pdf-thumb-box-overlay">
										<span class="btn button1">
											Contact Us
										</span>							
									</div>
									<img class="img-responsive" src="<?php echo base_url(); ?>assets/upload_images/{pr_image}" alt="2013 Genel Katalog" style="width:270px;height:250px;">
									
									<p class="m_text1" style="font-size:20px;margin-bottom:-1px;color:#479BAD;">{pr_title}</p>
									<p style="padding-right:5px;color: red;text-decoration: line-through;">Was:{pr_previous_price} BDT</p>
						
									<p style="padding-left:5px;margin-top:-10px;">Price: {pr_price} BDT</p>

									<p style="margin-top:-10px;">
										<script type="text/javascript">
											var i="{pr_previous_price}";
											var j="{pr_price}"
											var k=i-j;
											document.write('You save: '+k+ ' BDT');
										</script>
									</p>
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
