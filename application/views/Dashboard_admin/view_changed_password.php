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
        <!-- <link href="<?php echo base_url();?>css/style.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="<?php echo base_url();?>css/dashboard.css">
        <script type="text/javascript" src="../assets/js/check_password.js"></script>
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>js/script.js"></script>
        <style type="text/css">
      	.wrong{
      		text-align: center;
      		font-family: Verdana;
      		font-size: 15px;
      		color: red;
      	}
      	/*login CSS*/
.panel{margin-top:10px;background-color:#fff;border:1px solid #E0E0E0 !important;}
.form-group label{color:#000;font-size:12px;font-weight: 400;}
.panel-title{color:#000;margin-bottom:15px;}
.input-group-addon{color:#999595 !important;}
/* checkBox */
label {
	display: inline-block;
	cursor: pointer;
	position: relative;
	padding-left: 25px;
	margin-right: 15px;
	font-size: 13px;
}
input[type=radio],
input[type=checkbox] {
	display: none;
}
label:before {
	content: "";
	display: inline-block;
	
	width: 16px;
	height: 16px;

	margin-right: 10px;
	position: absolute;
	left: 0;
	bottom: 1px;
	border:1px solid #E0E0E0;
}

.radio label:before {
	border-radius: 8px;
}
.radio{	padding-bottom:7px;}
.checkbox label {
	margin-bottom: 10px;
	min-height: 16px;
	color:#000;
}
.checkbox label, .radio label {
min-height: 18px;}
.checkbox label:before {
    border-radius: 3px;
}

input[type=radio]:checked + label:before {
    content: "\2022";
    color: #2196F3;
    font-size: 18px;
    text-align: center;
    line-height: 10px;
}

input[type=checkbox]:checked + label:before {
	content: "\2713";
	text-shadow: 1px 1px 1px rgba(0, 0, 0, .2);
	font-size: 15px;
	color: #f3f3f3;
	text-align: center;
    line-height: 15px;
	background-color: #7ED321;
}
.login-or {
    position: relative;
    font-size: 18px;
    color: #aaa;
    margin-top: 10px;
    margin-bottom: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
  }
.hr-or {
    background-color: #cdcdcd;
    height: 1px;
    margin-top: 0px !important;
    margin-bottom: 0px !important;
  }
.span-or {
    display: block;
    position: absolute;
    left: 50%;
    top: -2px;
    margin-left: -25px;
    background-color: #fff;
    width: 50px;
    text-align: center;
  }
.login_footer{color:#000;font-size:12px;}  
#loginbox {
    margin-top: 30px;
}

#loginbox > div:first-child {        
    padding-bottom: 0px;    
}
.sub_btn{width:100%;background-color:#1E87DB;color:#fff;padding:8px 0px;}
.sub_btn:hover{background-color:#1174C3;color:#e5e5e5}
.face_btn{width:100%;background-color:#3E67A1;color:#fff;padding:8px 0px;}
.face_btn:hover{background-color:#365786;color:#e5e5e5}
.goog_btn{width:100%;background-color:#DD3E3D;color:#fff;padding:8px 0px;}
.goog_btn:hover{background-color:#C83130;color:#e5e5e5}
.form-group a:hover{text-decoration:none;}
.iconmelon {
    display: block;
    margin: auto;
}

#form > div {
    margin-bottom: 10px;
}

#form > div:last-child {
    margin-top: 10px;
    margin-bottom: 10px;
}

.panel {    
    background-color: transparent;
}

.panel-body {
    padding-top: 25px;
    background-color: #fff;
	
}

#particles {
    width: 100%;
    height: 100%;
    overflow: hidden;
    top: 0;                        
    bottom: 0;
    left: 0;
    right: 0;
    position: absolute;
    z-index: -2;
}

.iconmelon,
.im {
  position: relative;
  width: 150px;
  display: block;
  fill: #525151;
}

.iconmelon:after,
.im:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

      </style>
    </head>
    <body>
    	<?php include('nav.php');?>
		<div class="container login_form">    
			<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
				<div class="panel" >
					<div class="panel-body" >
						<div class="panel-title text-center">Change Password</div>
						<form id="form" action="/smart_sheba/home/change_password_data_admin" class="form-horizontal" method="post">
						   
							

							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="o_password" value="<?php echo set_value('o_password');?>" onBlur="check(this.value)" placeholder="Old Password">
							</div>

							<span style="color:green"><div id = "check_password"></div></span >

					
							<div class="text-center wrong">
							     <span  ><?php echo form_error('o_password'); ?></span>
							</div>

							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="n_password" value="<?php echo set_value('n_password');?>" placeholder="New Password">
							</div>

					
							<div class="text-center wrong">
							     <span  ><?php echo form_error('n_password'); ?></span>
							</div>

							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="c_password" value="<?php echo set_value('c_password');?>" placeholder="Confirm New Password">
							</div>

					
							<div class="text-center wrong">
							     <span  ><?php echo form_error('c_password'); ?></span>
							</div>

				
							<div class="text-center wrong">
							 <span  ><?php if(isset($msg)){echo $msg;}?></span>
							</div>
							
							<div class="form-group">
								
									<input class="btn sub_btn" type="submit" name="submit" value="Submit">                       
								
							</div>
							
							
						</form>     
						
						
			</div>                    
		</div>  
			
		
	<script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
