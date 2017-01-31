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
        <script type="text/javascript" src="../assets/js/check_email.js"></script>
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
						<div class="panel-title text-center">Recover Password</div>
						<form id="form" action="/smart_sheba/home/recover_password_data" class="form-horizontal" method="post">
						   
						   <?php
/*
								if(isset($email)){
									$xx = $email;

								}else{

								$xx = "";
								}
*/
						   ?>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input  type="email" class="form-control" name="email"  value="<?php echo set_value('email');?>" placeholder="Enter Your Email Address " required>                                        
							</div>

							<div class="text-center wrong">
                               <span >
                                 <!-- <div id = "check_email"></div> -->
                                 <span  ><?php if(isset($msg)){echo $msg;}?></span>
                              </span>
                              
                             </div>
			
							<div class="form-group">
								
									<input class="btn sub_btn" type="submit" name="submit" value="submit">                       
								
							</div>
												
							
						</form>     
						
			</div></div></div>                     
		</div>  
			
		
	<script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
