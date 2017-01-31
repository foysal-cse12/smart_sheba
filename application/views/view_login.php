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
        <style type="text/css">
      	.wrong{
      		text-align: center;
      		font-family: Verdana;
      		font-size: 15px;
      		color: red;
      	}
      </style>
    </head>
    <body>
		<div class="container login_form">    
			<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
				<center><a href="<?php echo base_url();?>home/index" style="color:#2196F3;"><img src="<?php echo base_url();?>images/logo.png" class="img-responsive" alt="" /></a></center>
				<div class="panel" >
					<div class="panel-body" >
						<div class="panel-title text-center">Login</div>
						<form id="form" action="/smart_sheba/home/login_data" class="form-horizontal" method="post">
						   
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input id="envelope" type="text" class="form-control" name="username" value="<?php echo set_value('username');?>" placeholder="username.">                                        
							</div>
							<div class="text-center wrong">
							 <span  ><?php echo form_error('username'); ?></span>
							</div>

							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="password" value="<?php echo set_value('password');?>" placeholder="Password">
							</div>

					
							<div class="text-center wrong">
							     <span  ><?php echo form_error('password'); ?></span>
							</div>

				            <input type="hidden" name="nav" value="<?php echo $k;?>">
				            
							<div class="text-center wrong">
							 <span  ><?php if(isset($msg)){echo $msg;}?></span>
							</div>

					
							<div class="checkbox">
								<input id="check1" type="checkbox" name="remember" value="check1">
								<label for="check1">&nbsp; Remember Me ?</label>

								<a href="<?php echo base_url();?>home/forget_password" style="color: red;">Forgot Your Password ?</a>
								
							</div>

							

							


							
							<div class="form-group">
								
									<input class="btn sub_btn" type="submit" name="submit" value="Login">                       
								
							</div>
							<div class="login-or">
								<hr class="hr-or">
								<span class="span-or">or</span>
							</div>

							
							<div class="form-group">
								<a href="/smart_sheba/home/fb_login" class="btn face_btn"><span class="fa fa-facebook"></span> Login with Facebook</a>
							</div>
							<!-- <div class="form-group">
								<a href="#" class="btn goog_btn"><span class="fa fa-google"></span> Login with Google</a>
							</div> -->
						</form>     
						<div class="login-or">
							<hr class="hr-or">
						</div>
						<p class="login_footer text-center">Don't have an account? <a href="<?php echo base_url();?>home/registration" style="color:#2196F3;">Create new account</a></p>
			</div></div></div>                     
		</div>  
			
		
	<script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	<form action="/smart_sheba/home/login_data" method="post">
	  <table align="center" border="2px">
	  	<tr>
	  		<th colspan="2">Login</th>
	  	</tr>

	  	<tr>
	  		<td>Username</td>
	  		<td> <input type="text" name="username" value="<?php echo set_value('username');?>"></td>
	  	</tr>

	  	<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('username'); ?></span></td>
		</tr>

	  	<tr>
	  		<td>Password</td>
	  		<td><input type="password" name="password" value="<?php echo set_value('password');?>"></td>
	  	</tr>

	  	<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('password'); ?></span></td>
		</tr>

		<tr>
			<td colspan="2"><span style="color:red"><?php if(isset($msg)){echo $msg;}?></span></td>
		</tr>

		<tr>
	  		<td></td>
	  		<td> click <a href="<?php echo base_url();?>home/registration"> here </a>to registration</td>
	  	</tr>

	  	<tr>
	  		<td></td>
	  		<td><input type="submit" name="submit" value="Login"></td>
	  	</tr>

	  </table>
			
	</form>
</body>
</html> -->