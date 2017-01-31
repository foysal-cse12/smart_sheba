<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Smartsheba | Sign Up Page</title>
        <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
        <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap/css/font-awesome.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
		<div class="container login_form">    
			<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
				<center><img src="images/logo.png" class="img-responsive" alt="" /></center>
				<div class="panel" >
					<div class="panel-body" >
						<div class="panel-title text-center">Create Account</div>
						<form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
							<div class="input-group" style="border:1px solid #CCCCCC;width:100%;border-radius:5px;color:#000;">
								<div class="col-sm-12 text-center">
									<div class="radio">
										<input id="male" type="radio" name="gender" value="male">
										<label for="male">Male</label>
										<input id="female" type="radio" name="gender" value="female">
										<label for="female">Female</label>
									</div>
								</div>
							</div>
							
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="user" type="text" class="form-control" name="user" value="" placeholder="Full Name...">                                        
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="user" type="text" class="form-control" name="user" value="" placeholder="User Name...">                                        
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input id="envelope" type="text" class="form-control" name="envelope" value="" placeholder="Your Email...">                                        
							</div>

							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="password" placeholder="Password...">
							</div>
							
							<div class="checkbox">
								<input id="check1" type="checkbox" name="check" value="check1">
								<label for="check1">&nbsp; Accept the</label><a href="" style="color:#2196F3;font-size:12px;"> Terms of Service</a>
							</div>
							
							<div class="form-group">
								<!-- Button -->							
								<button class="btn sub_btn" type="submit">Register</button>                          						
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
						<p class="login_footer text-center">Already have an account? <a href="login.php" style="color:#2196F3;">Login here</a></p>
					</div>                     
				</div>  
			</div>
		</div>		
		
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="css/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
