
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="padding: 15px 0;;">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header col-sm-2">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		  <span class="sr-only">Toggle navigation</span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		  <span class="icon-bar"></span>
		</button>
		<a href="/smart_sheba/home/index"><img class="img-responsive" src="<?php echo base_url();?>images/logo.png" alt=""/></a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<div class="col-sm-10 col-md-10">
			<ul class="nav navbar-nav navbar-right text-center" style="margin-top:4px;padding-right:12px;">
				<li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background:#479BAD">Add Post <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			            <li><a href="/smart_sheba/home/add_post_product/1">Add Product</a></li>
                        <li><a href="/smart_sheba/home/add_post_information/2">Add Information</a></li>
                        <li><a href="/smart_sheba/home/add_post_academy/3">Add Academy</a></li>
			        </ul>
		        </li>


				<li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background:#479BAD">Menu <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			            <li><a href="/smart_sheba/home/information">Information</a></li>
                        <li><a href="/smart_sheba/home/member">Member</a></li>
                        <li><a href="/smart_sheba/home/shop">Shop</a></li>
                        <li><a href="/smart_sheba/home/shop_discount">Discount</a></li>
                        <li><a href="/smart_sheba/home/academy">Academy</a></li>
                        <li><a href="/smart_sheba/home/about_us">About Us</a></li>
                        <li><a href="/smart_sheba/home/contact_us">Contact Us</a></li>
			        </ul>
		        </li>
		        <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="background:#479BAD">Account <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			            <li><a href="<?php echo base_url();?>home/login/0">Sign In</a></li>
                        <li><a href="<?php echo base_url();?>home/registration">Sign Up</a></li>
			        </ul>
		        </li>
				 <li><a class="btn btn-warning btn-lg" href="#" style="padding: 15px 50px;">বাংলা</a></li>
			</ul
		</div>
	</div>	
	
	
	</div>	
	<div class="col-sm-12">
		<form class="navbar-form navbar-right" role="search"
			method="post" action="/smart_sheba/home/search">
	            <div class="form-group">
	                <select class="selectpicker drop_search text-center" data-width="120px" style="margin-right:-10px;" name="category">
						<option value="product">Product</option>
						<option  value="information">Information</option>
						<option  value="member">Member</option>
						<option  value="academy">Academy</option>
						<option  value="discount">discount</option>
					</select> 
					<input type="text" class="form-control" name="location" value="<?php echo set_value('location');?>" placeholder="location">
	            </div>
	            <div class="form-group">
	                <input type="text" class="form-control" name="search" value="<?php echo set_value('search');?>" placeholder="What are searching?" required>
	            </div>
				 <input type="submit" class="btn btn-info big_search" style="margin:0;" name="submit" value="search">
				 <!-- <input type="submit" name="submit"   class="btn btn-info text-center" style="margin:0;"><span class="glyphicon glyphicon-search" ></span> -->
	    </form>
	</div>
	<!-- /.navbar-collapse -->
</nav>
<div class="nav_margin"></div>
<script>
 $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>		