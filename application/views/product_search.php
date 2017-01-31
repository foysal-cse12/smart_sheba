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
		 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/common.css" />
		<style type="text/css">
			
		</style>
    </head>
    <body>
		 <?php include('nav.php');?>	
		<br />
		<br />
	
			<div class="container">
				<div class="row">
					<div class="col-sm-2 banner_img">
					   <img class="img-responsive" src="<?php echo base_url();?>images/banner1.png" alt="#">
					</div>
					<div class="col-sm-7">
					
					 {list}					
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_div">
							<div class="col-xs-6 col-md-3 col-sm-6">
								<img class="img-responsive view_img" src="<?php echo base_url(); ?>assets/upload_images/{pr_image}" alt="info_image" />
							</div>
							<div class="col-xs-6 col-md-6 col-sm-6 text-center">
								<h3>{pr_title}</h3><p>{pr_details}
								<!-- Welcome to the 360° virtual recreation of our museum gallery.. --></p>
							</div>

							<div class="col-xs-12 col-md-3 col-sm-12 view_btn">
								<a href="/smart_sheba/home/single_product/{id}/{client_id}"><center class="btn btn_view">VIEW</center></a>
							</div>
						</div>
					{/list}

						

					</div>
				</div>
			    </div>

			    <div class="col-sm-12 text-center">
					    <nav>
							<ul class="pagination">
								<?php echo "$links"; ?>
							</ul>
						</nav>
					</div>


			</div>
			<br />
			<?php include('footer.php');?>

		
	<script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/main.js"></script>
	<script src="<?php echo base_url();?>js/carusel1.js"></script>
	<script src="<?php echo base_url();?>js/custom_menu.js"></script>
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

		
				$(function(){

					$('#slide-submenu').on('click',function() {			        
				        $(this).closest('.list-group').fadeOut('slide',function(){
				        	$('.mini-submenu').fadeIn();	
				        });
				        
				      });

					$('.mini-submenu').on('click',function(){		
				        $(this).next('.list-group').toggle('slide');
				        $('.mini-submenu').hide();
					})
				})
	</script>	
    </body>
</html>
