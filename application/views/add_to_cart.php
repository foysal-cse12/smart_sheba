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
        <!-- <link href="style.css" rel="stylesheet"> -->
        <link href="<?php echo base_url();?>css/shop.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/bootstrap-select.css" rel="stylesheet">
		<style type="text/css">
			.buy_btn{background:#479BAD;color:#fff;}
			.buy_btn:hover{background:#58AFC2;color:#fff;}
			.wrong{
      		text-align: center;
      		font-family: Verdana;
      		font-size: 15px;
      		color: red;
                	}
			.steps {
				margin-top: -41px;
				display: inline-block;
				float: right;
				font-size: 16px
			}
			.step {
				float: left;
				background: white;
				padding: 7px 13px;
				border-radius: 1px;
				text-align: center;
				width: 100px;
				position: relative
			}
			.step_line {
				margin: 0;
				width: 0;
				height: 0;
				border-left: 16px solid #fff;
				border-top: 16px solid transparent;
				border-bottom: 16px solid transparent;
				z-index: 1008;
				position: absolute;
				left: 99px;
				top: 1px
			}
			.step_line.backline {
				border-left: 20px solid #f7f7f7;
				border-top: 20px solid transparent;
				border-bottom: 20px solid transparent;
				z-index: 1006;
				position: absolute;
				left: 99px;
				top: -3px
			}
			.step_complete {
				background: #479BAD
			}
			.step_complete a.check-bc, .step_complete a.check-bc:hover,.afix-1,.afix-1:hover{
				color: #eee;
			}
			.step_line.step_complete {
				background: 0;
				border-left: 16px solid #479BAD;
			}
			.step_thankyou {
				float: left;
				background: white;
				padding: 7px 13px;
				border-radius: 1px;
				text-align: center;
				width: 100px;
			}
			.step.check_step {
				margin-left: 5px;
			}
			.ch_pp {
				text-decoration: underline;
			}
			.ch_pp.sip {
				margin-left: 10px;
			}
			.check-bc,
			.check-bc:hover {
				color: #222;
			}
			.SuccessField {
				border-color: #458845 !important;
				-webkit-box-shadow: 0 0 7px #9acc9a !important;
				-moz-box-shadow: 0 0 7px #9acc9a !important;
				box-shadow: 0 0 7px #9acc9a !important;
				background: #f9f9f9 url(../images/valid.png) no-repeat 98% center !important
			}

			.btn-xs{
				line-height: 28px;
			}

			/*login form*/
			.login-container{
				margin-top:30px ;
			}
			.login-container input[type=submit] {
			  width: 100%;
			  display: block;
			  margin-bottom: 10px;
			  position: relative;
			}

			.login-container input[type=text], input[type=password] {
			  height: 44px;
			  font-size: 16px;
			  width: 100%;
			  margin-bottom: 10px;
			  -webkit-appearance: none;
			  background: #fff;
			  border: 1px solid #d9d9d9;
			  border-top: 1px solid #c0c0c0;
			  /* border-radius: 2px; */
			  padding: 0 8px;
			  box-sizing: border-box;
			  -moz-box-sizing: border-box;
			}

			.login-container input[type=text]:hover, input[type=password]:hover {
			  border: 1px solid #b9b9b9;
			  border-top: 1px solid #a0a0a0;
			  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
			  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
			  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
			}

			.login-container-submit {
			  /* border: 1px solid #3079ed; */
			  border: 0px;
			  color: #fff;
			  text-shadow: 0 1px rgba(0,0,0,0.1); 
			  background-color: #357ebd;/*#4d90fe;*/
			  padding: 17px 0px;
			  font-family: roboto;
			  font-size: 14px;
			  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
			}

			.login-container-submit:hover {
			  /* border: 1px solid #2f5bb7; */
			  border: 0px;
			  text-shadow: 0 1px rgba(0,0,0,0.3);
			  background-color: #357ae8;
			  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
			}

			.login-help{
			  font-size: 12px;
			}

			.asterix{
				background:#f9f9f9 url(../images/red_asterisk.png) no-repeat 98% center !important;
			}

			/* images*/
			ol, ul {
			  list-style: none;
			}
			.hand {
			  cursor: pointer;
			  cursor: pointer;
			}
			.cards{
				padding-left:0;
			}
			.cards li {
			  -webkit-transition: all .2s;
			  -moz-transition: all .2s;
			  -ms-transition: all .2s;
			  -o-transition: all .2s;
			  transition: all .2s;
			  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
			  background-position: 0 0;
			  float: left;
			  height: 32px;
			  margin-right: 8px;
			  text-indent: -9999px;
			  width: 51px;
			}
			.cards .mastercard {
			  background-position: -51px 0;
			}
			.cards li {
			  -webkit-transition: all .2s;
			  -moz-transition: all .2s;
			  -ms-transition: all .2s;
			  -o-transition: all .2s;
			  transition: all .2s;
			  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
			  background-position: 0 0;
			  float: left;
			  height: 32px;
			  margin-right: 8px;
			  text-indent: -9999px;
			  width: 51px;
			}
			.cards .amex {
			  background-position: -102px 0;
			}
			.cards li {
			  -webkit-transition: all .2s;
			  -moz-transition: all .2s;
			  -ms-transition: all .2s;
			  -o-transition: all .2s;
			  transition: all .2s;
			  background-image: url('//c2.staticflickr.com/4/3713/20116660060_f1e51a5248_m.jpg');
			  background-position: 0 0;
			  float: left;
			  height: 32px;
			  margin-right: 8px;
			  text-indent: -9999px;
			  width: 51px;
			}
			.cards li:last-child {
			  margin-right: 0;
			}
			/* images end */



			/*
			 * BOOTSTRAP
			 */
			.container{
				border: none;
			}
			
			.panel-footer{
				background:#fff;
			}
			.btn{
				border-radius: 1px;
			}
			.btn-sm, .btn-group-sm > .btn{
				border-radius: 1px;
			}
			.input-sm, .form-horizontal .form-group-sm .form-control{
				border-radius: 1px;
			}

			.panel-info {
				border-color: #999;
			}

			.panel-heading {
				border-top-left-radius: 1px;
				border-top-right-radius: 1px;
			}
			.panel {
				border-radius: 1px;
			}
			.panel-info > .panel-heading {
				color: #eee;
				border-color: #999;
			}
			.panel-info > .panel-heading {
				background-image: linear-gradient(to bottom, #479BAD 0px, #B0E3EF  100%);
			}

			hr {
				border-color: #999 -moz-use-text-color -moz-use-text-color;
			}

			.panel-footer {
				border-bottom-left-radius: 1px;
				border-bottom-right-radius: 1px;
				border-top: 1px solid #999;
			}

			.btn-link {
				color: #888;
			}

			hr{
				margin-bottom: 10px;
				margin-top: 10px;
			}

			/** MEDIA QUERIES **/
			@media only screen and (max-width: 989px){
				.span1{
					margin-bottom: 15px;
					clear:both;
				}
			}

			@media only screen and (max-width: 764px){
				.inverse-1{
					float:right;
				}
			}

			@media only screen and (max-width: 586px){
				.cart-titles{
					display:none;
				}
				.panel {
					margin-bottom: 1px;
				}
			}

			.form-control {
				border-radius: 1px;
			}

			@media only screen and (max-width: 486px){
				.col-xss-12{
					width:100%;
				}
				.cart-img-show{
					display: none;
				}
				.btn-submit-fix{
					width:100%;
				}
				
			}
			/*
			@media only screen and (max-width: 777px){
				.container{
					overflow-x: hidden;
				}
			}*/
		</style>
    </head>
    <body>
		<?php include('nav.php');?>	

			<div class="container nav_margin1">
				<div class="row cart-head">
					<div class="container">
						<div class="row">
							<p></p>
						</div>
						<div class="row">
							<div style="display: table; margin: auto;margin-bottom:5px;">
								<span class="step step_complete"> <a href="#" class="check-bc">Cart</a> <span class="step_line step_complete"> </span> <span class="step_line backline"> </span> </span>
								<span class="step step_complete"> <a href="#" class="check-bc">Checkout</a> <span class="step_line "> </span> <span class="step_line step_complete"> </span> </span>
								<span class="step_thankyou check-bc step_complete">Thank you</span>
							</div>
						</div>
					</div>
				</div>    
				<div class="row cart-body">
					<form class="form-horizontal" method="post" action="/smart_sheba/home/product_order_data">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
							<!--REVIEW ORDER-->
							<div class="panel panel-info">
								<div class="panel-heading" style="font-size:18px;">
									<center>See Your Order Price</center>
								</div>
								<div class="panel-body">
									<div class="form-group" style="border-bottom:1px solid #CCCCCC;">
										<div class="col-sm-3 col-xs-12">
											<img class="img-responsive" src="<?php echo base_url();?>assets/upload_images/{pr_image}" style="margin:0 auto;width:50px;height:50px;" />
										</div>
										<div class="col-sm-6 col-xs-6">
											<div style="padding:8px 0;">{pr_title}<!-- Product name --></div>
										</div>
										<div class="col-sm-3 col-xs-6">
											<p class="pull-right" style="padding:8px 0;"><span>Price:</span>{pr_price} BDT</p>
										</div>
									</div>
									
									
									<div class="form-group" style="border-bottom:1px solid #CCCCCC;">
										<div class="col-xs-4 col-sm-4">
											<p style="padding:5px 0;">Quantity:</p>												
										</div>
										<div class="col-xs-5 col-sm-5">
											<p style="padding:5px 0;">{qnty}</p>
										</div>
										<div class="col-xs-3 col-sm-3">												
											<p class="pull-right" style="padding:5px 0;"><span>BDT </span><span>{price}</span></p>
										</div>
									</div>
									
									<div class="form-group">
										<div class="col-xs-6 col-sm-6">
											<p style="padding:5px 0;;font-weight:700;">Order Total</p>
										</div>
										<div class="col-xs-6 col-sm-6">
											<p class="pull-right" style="padding:5px 0;;font-weight:700;"><span>BDT </span><span>{total}</span></p>
										</div>
									</div>
								</div>
							</div>
							<br />
							<!--REVIEW ORDER END-->
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
							<!--SHIPPING METHOD-->
							<div class="panel panel-info">
								<div class="panel-heading"><center style="font-size:18px;">Shipping Address</center></div>
								<div class="panel-body">
									<div class="form-group">
									</div>
									
									<div class="form-group">
										<div class="col-md-12 col-xs-12">
											<strong>Full Name:</strong>
											<input type="text" name="fullname" class="form-control" value="<?php echo set_value('fullname');?>" placeholder="Your Full Name..." required/>
										</div>
										<div class="text-center wrong">
										  <span  ><?php echo form_error('fullname'); ?></span>
										</div>

									</div>
									<div class="form-group">
										<div class="col-md-12"><strong>Address:</strong></div>
										<div class="col-md-12">
											<input type="text" name="address" class="form-control" value="<?php echo set_value('address');?>" placeholder="Your Address..." required />
										</div>
									</div>
									<div class="text-center wrong">
										  <span  ><?php echo form_error('address'); ?></span>
									</div>

									<div class="form-group">
										<div class="col-md-12"><strong>City:</strong></div>
										<div class="col-md-12">
											<input type="text" name="city" class="form-control" value="<?php echo set_value('city');?>" placeholder="Your City..."  required />
										</div>
									</div>
									<div class="text-center wrong">
										  <span  ><?php echo form_error('city'); ?></span>
									</div>
									
									<div class="form-group">
										<div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
										<div class="col-md-12">
											<input type="text" name="zip_code" class="form-control" value="<?php echo set_value('zip_code');?>" placeholder="Your City Zip_code..." required />
										</div>
									</div>
									<div class="text-center wrong">
										  <span  ><?php echo form_error('zip_code'); ?></span>
									</div>

									<div class="form-group">
										<div class="col-md-12"><strong>Mobile / Telephone Number:</strong></div>
										<div class="col-md-12"><input type="text" class="form-control"  name="mobile" value="<?php echo set_value('mobile');?>" placeholder="Your  Mobile..." required /></div>
									</div>
									<div class="text-center wrong">
				                      <span  ><?php echo form_error('mobile'); ?></span>
				                     </div>

									<div class="form-group">
										<div class="col-md-12"><strong>Email Address:</strong></div>
										<div class="col-md-12"><input type="email" name="email" class="form-control" value="<?php echo set_value('email');?>" placeholder="Your  Email..."   required/></div>
									</div>
									<div class="text-center wrong">
				                      <span  ><?php echo form_error('email'); ?></span>
				                    </div>

				                    <div class="form-group">
										<div class="col-md-12"><input type="hidden" name="quantity" class="form-control" value="{qnty}"/></div>
									</div>

									<div class="form-group">
										<div class="col-md-12"><input type="hidden" name="total" class="form-control" value="{total}"/></div>
									</div>

									<div class="form-group">
										<div class="col-md-12"><input type="hidden" name="c_email" class="form-control" value="{email}"/></div>
									</div>



									
									<div class="col-xs-12 col-sm-12">
										<input type="submit" class="btn buy_btn btn-block" name="submit" value="ORDER NOW">
											
										
									</div>
								</div>								
							</div>
							<!--SHIPPING METHOD END-->
						</div>
					</form>
				</div>
			</div>		
		<?php include('footer.php');?>

		
	<script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/main.js"></script>
	<script src="<?php echo base_url();?>js/carusel1.js"></script>
	<script src="<?php echo base_url();?>js/custom_menu.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap-select.js"></script>
	
	<script>
		
	</script>
		
    </body>
</html>
