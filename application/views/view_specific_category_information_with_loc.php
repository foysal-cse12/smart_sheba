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
					<div class="col-sm-2 col-xs-12 banner_img">
					   <img class="img-responsive" src="<?php echo base_url();?>images/banner1.png" alt="#">
					</div>
					<div class="col-sm-3 col-xs-12 col-md-push-7 col-sm-push-7">		
						<div class="submenu">
							<div class="mini-submenu">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</div>
							<div class="list-group">
								<span href="#" class="list-group-item active">
									Filter...
									<span class="pull-right" id="slide-submenu">
										<i class="fa fa-times"></i>
									</span>
								</span>
								<form action="\smart_sheba\home\specific_info_with_loc" method="post">
									<select class="selectpicker drop_search text-center " data-width="100%" name="category" style="margin-top:-1px;" required>
										<option value="">Catagory</option>
										<option value="Hospital">Hospital</option>
										<option value="School_and_Collage">School & Collage</option>
										<option value="Bus_Stand">Bus Stand</option>
										<option value="Sports">Sports</option>
										<option value="Books">Books</option>
										<option value="Office">Office</option>
										<option value="Resturent">Resturent</option>
										<option value="Blood_Bank">Blood Bank</option>
										<option value="Super_Shop">Super Shop</option>
										<option value="Show_Room">Show Room</option>
										<option value="Railway">Railway</option>
									</select>
									<br />
									
									<input type="search" id="searchBox" placeholder="Search..." style="width:100%;margin-top:10px;">
									<select class="" name=" location" id="countries" style="width:100%;padding:10px;">
										<option value="Dhaka">Dhaka</option>
										<option value="Bandarban">Bandarban</option>
										<option value="Barguna">Barguna</option>
										<option value="Barisal">Barisal</option>
										<option value="Bhola">Bhola</option>
										<option value="Bogra">Bogra</option>
										<option value="Brahmanbaria">Brahmanbaria</option>
										<option value="Chandpur">Chandpur</option>
										<option value="Chapainawabganj">Chapainawabganj</option>
										<option value="Chittagong">Chittagong</option>
										<option value="Chuadanga">Chuadanga</option>
										<option value="Comilla">Comilla</option>
										<option value="Cox's Bazar">Cox's Bazar </option>
										<option value="Bagerhat">Bagerhat</option>
										<option value="Dinajpur">Dinajpur</option>
										<option value="Faridpur">Faridpur</option>
										<option value="Feni">Feni</option>
										<option value="Gaibandha">Gaibandha </option>
										<option value="Gazipur">Gazipur</option>
										<option value="Gopalganj">Gopalganj</option>
										<option value="Habiganj">Habiganj </option>
										<option value="Jamalpur">Jamalpur</option>
										<option value="Jessore">Jessore</option>
										<option value="Jhalokati">Jhalokati</option>
										<option value="Jhenaidah">Jhenaidah</option>
										<option value="Joypurhat">Joypurhat</option>
										<option value="Khagrachhari">Khagrachhari </option>
										<option value="Khulna">Khulna </option>
										<option value="Kishoreganj">Kishoreganj </option>
										<option value="Kurigram">Kurigram</option>
										<option value="Kushtia">Kushtia</option>
										<option value="Lakshmipur">Lakshmipur </option>
										<option value="Lalmonirhat">Lalmonirhat </option>
										<option value="Madaripur">Madaripur </option>
										<option value="Manikganj">Manikganj  </option>
										<option value="Meherpur">Meherpur</option>
										<option value="Moulvibazar">Moulvibazar</option>
										<option value="Munshiganj">Munshiganj </option>
										<option value="Mymensingh">Mymensingh</option>
										<option value="Naogaon">Naogaon </option>
										<option value="Narail">Narail </option>
										<option value="Narayanganj">Narayanganj </option>
										<option value="Narsingdi">Narsingdi</option>
										<option value="Natore">Natore</option>
										<option value="Netrakona">Netrakona </option>
										<option value="Nilphamari">Nilphamari </option>
										<option value="Noakhali">Noakhali </option>
										<option value="Pabna">Pabna</option>
										<option value="Panchagarh">Panchagarh </option>
										<option value="Patuakhali">Patuakhali </option>
										<option value="Pirojpur">Pirojpur</option>
										<option value="Rajbari">Rajbari</option>
										<option value="Rajshahi">Rajshahi </option>
										<option value="Rangamati">Rangamati </option>
										<option value="Rangpur">Rangpur</option>
										<option value="Satkhira">Satkhira </option>
										<option value="Shariatpur">Shariatpur</option>
										<option value="Sherpur">Sherpur</option>
										<option value="Sirajganj">Sirajganj</option>
										<option value="Sunamganj">Sunamganj</option>
										<option value="Sylhet">Sylhet </option>
										<option value="Tangail">Tangail</option>
										<option value="Thakurgaon">Thakurgaon </option>
									</select>
									<input type="submit" name="submit" class="btn btn-info" value="Submit Button" style="width:100%;">
								</form>
								<br />
								<br />
							</div>        
						</div>
						
					</div>
					<div class="col-sm-7 col-xs-12 col-md-pull-3 col-sm-pull-3">
					 {list}					
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 info_div">
							<div class="col-xs-6 col-md-3 col-sm-6">
								<img class="img-responsive view_img" src="<?php echo base_url(); ?>assets/info_images/{info_image}" alt="info_image" />
							</div>
							<div class="col-xs-6 col-md-6 col-sm-6 text-center">
								<h3>{info_title}</h3><p><!-- {info_description} -->
								<!-- Welcome to the 360° virtual recreation of our museum gallery.. --></p>
							</div>

							<div class="col-xs-12 col-md-3 col-sm-12 view_btn">
								<a href="/smart_sheba/home/single_info/{id}"><center class="btn btn_view">VIEW</center></a>
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
		searchBox = document.querySelector("#searchBox");
		countries = document.querySelector("#countries");
		var when = "keyup"; //You can change this to keydown, keypress or change

		searchBox.addEventListener("keyup", function (e) {
			var text = e.target.value; 
			var options = countries.options; 
			for (var i = 0; i < options.length; i++) {
				var option = options[i]; 
				var optionText = option.text; 
				var lowerOptionText = optionText.toLowerCase();
				var lowerText = text.toLowerCase(); 
				var regex = new RegExp("^" + text, "i");
				var match = optionText.match(regex); 
				var contains = lowerOptionText.indexOf(lowerText) != -1;
				if (match || contains) {
					option.selected = true;
					return;
				}
				searchBox.selectedIndex = 0;
			}
		});
		
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
