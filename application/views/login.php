<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Smartsheba | Sign In Page</title>
        <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
        <link href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/bootstrap/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
    </head>
    <body>
		<div class="container login_form">    
			<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
				<center><img src="images/logo.png" class="img-responsive" alt="" /></center>
				<div class="panel" >
					<div class="panel-body" >
						<div class="panel-title text-center">Login</div>
						<form name="form" id="form" class="form-horizontal"   action="/smart_sheba/home/registration_data" method="post">
						   
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input id="envelope" type="text" class="form-control" name="envelope" value="" placeholder="Your Email.....">                                        
							</div>

							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="password" placeholder="Password.....">
							</div>
							<div class="checkbox">
								<input id="check1" type="checkbox" name="remember" value="remember">
								<label for="check1">&nbsp; Remember Me</label>
							</div>
							
							<div class="form-group">
								<!-- Button -->
								<div class="sub_btn">
									<input class="btn btn-lg" type="submit" name="submit" value="Sign Up">                          
								</div>
							</div>
							<div class="login-or">
								<hr class="hr-or">
								<span class="span-or">or</span>
							</div>
							<div class="form-group">
								<a href="#" class="btn face_btn"><span class="fa fa-facebook"></span> Login with Facebook</a>
							</div>
							<div class="form-group">
								<a href="#" class="btn goog_btn"><span class="fa fa-google"></span> Login with Google</a>
							</div>
						</form>     
						<div class="login-or">
							<hr class="hr-or">
						</div>
						<p class="login_footer text-center">Don't have an account? <a href="register.php" style="color:#2196F3;">Create new account</a></p>
					</div>                     
				</div>  
			</div>
		</div>		
		
	<script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
