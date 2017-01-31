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
		 <link rel="<?php echo base_url();?>stylesheet" type="text/css" href="<?php echo base_url();?>css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/common.css" />
		<style type="text/css">
		
		</style>
    </head>
    <body>
		<?php include('nav.php');?>	
		<br/><br/>
			<div class="container">	
				<div class="row">	
					<div class="col-md-4 col-sm-4">			
						<article>
							<p class="avatar text-center">
								<img class="img-responsive" src="<?php echo base_url(); ?>assets/info_images/{info_image}">
							</p>
						
							<p class="title  text-center"> winskit </p>
							<!-- <div class="text-center">
								<div class="btn-group" role="group" style="margin-top:-300px;">
								    <a href="#" style="border-radius:3px 0 0 3px"><i class="btn btn-primary  	glyphicon glyphicon-thumbs-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like"></i></a>
									
								    <a href="#" style="border-radius:3px 0 0 3px"><i class="btn btn-info glyphicon glyphicon-share-alt" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share"></i></a>
								</div>
							</div> -->
						</article>
					</div>

					<div class="col-md-5 col-sm-5">
						<h3 style="color:#479BAD;margin:15px 0 15px;text-align:center;">Information......</h3>
						<table class="table table-user-information">
							<tbody>
								<tr>
									<td>Title:</td>
									<td>{info_title}</td>
								</tr>

								<tr>
									<td>Catagory:</td>
									<td>{info_category}</td>
								</tr>
								<tr>
									<td>Location:</td>
									<td>{info_location}.</td>
								</tr>
								<tr>
									<td>Contact:</td>
									<td>{info_mobile}</td>
								</tr>
								<tr>
									<td>Email:</td>
									<td>{email}</td>
								</tr>
								<!-- <tr>
									<td>Web Url:</td>
									<td><a href="http://{info_website}/" target="_blank">{info_website}</a></td>
								</tr>
								<tr>
									<td>Description:</td>
									<td>{info_description} </td>
								</tr> -->

								<tr>
									<td></td>
									<td><input type="button" class="btn btn-success"  value="Contact" onclick="location.href='/smart_sheba/home/information_contact/{id}';"></td></td>
								</tr>

							</tbody>
						</table>
					</div>
					

					<div class="col-md-3 col-sm-3">						
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
										<option value="Tangail">Thakurgaon </option>
									</select>
									<input type="submit" name="submit" class="btn btn-info" value="Submit Button" style="width:100%;">
								</form>
							       
							</div>        
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12 product-info">
							<ul id="myTab" class="nav nav-tabs">
								
								<li class="active tab1"><a href="#service-one" data-toggle="tab">DETAILS</a></li>
								<li class="tab1"><a href="#service-two" data-toggle="tab">WEBSITE</a></li>
								<li class="tab1"><a href="#service-three" data-toggle="tab">LOCATION</a></li>
								
							</ul>
						<div id="myTabContent" class="tab-content">
								<div class="tab-pane fade in active" id="service-one">						 
									<section class="container product-info">
										<span style="font-size:20px;color:#479BAD;"></span>
										 {info_description} 
									</section>										  
								</div>
								<div class="tab-pane fade" id="service-two">							
									<section class="container product-info">
										<span style="font-size:20px;color:#479BAD;"></span>
										{info_website}
									</section>								
								</div>
								<div class="tab-pane fade" id="service-three">							
									<section class="container product-info">
										<span style="font-size:20px;color:#479BAD;"></span>
										{info_location}
									</section>								
								</div>
								
						</div>
						
						<br />
						<br />
					</div>
				</div>
			</div>
			<br />
			<br />
			<br />
			<br />
			<br />
		<?php include('footer.php');?>

		
	<script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/main.js"></script>
	<script src="<?php echo base_url();?>js/carusel1.js"></script>
	<script src="<?php echo base_url();?>js/custom_menu.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap-select.js"></script>
	<script>
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
