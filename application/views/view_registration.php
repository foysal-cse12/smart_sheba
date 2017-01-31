<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Smartsheba | Sign Up Page</title>
      <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
      <link href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo base_url();?>css/bootstrap/css/font-awesome.css" rel="stylesheet">
      <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
      <script type="text/javascript" src="../assets/js/check_username.js"></script>
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
            <center><a href="<?php echo base_url();?>home/index" style="color:#2196F3;"><img src="../images/logo.png" class="img-responsive" alt="" /></a></center>
            <div class="panel" >
               <div class="panel-body" >
                  <div class="panel-title text-center">Create Account</div>
                  <form name="form" id="form" class="form-horizontal" action="/smart_sheba/home/registration_data" method="post">
                    <div class="input-group" style="border:1px solid #CCCCCC;width:100%;border-radius:5px;color:#000;">
                <div class="col-sm-12 text-center">
                  <div class="radio">
                    <input id="male" type="radio" name="gender" value="male" checked>
                    <label for="male">Male</label>
                    <input id="female" type="radio" name="gender" value="female">
                    <label for="female">Female</label>
                  </div>
                </div>
              </div>
              <div class="text-center wrong">
               <span  ><?php echo form_error('gender'); ?></span>
              </div>
              

          <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="user" type="text" class="form-control" name="fullname" value="<?php echo set_value('fullname');?>" placeholder="Your Full Name...">                                        
          </div>
          <div class="text-center wrong">
               <span  ><?php echo form_error('fullname'); ?></span>
          </div>



          <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="user" type="text" class="form-control" name="father_name" value="<?php echo set_value('father_name');?>" placeholder="Your Father Name..." >                                        
          </div>
          <div class="text-center wrong">
               <span  ><?php echo form_error('father_name'); ?></span>
          </div>

          <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="user" type="text" class="form-control" name="mother_name" value="<?php echo set_value('mother_name');?>" placeholder="Your Mother Name..." >                                        
          </div>
          <div class="text-center wrong">
               <span  ><?php echo form_error('mother_name'); ?></span>
          </div>

          <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-tint"></i></span>
                <input id="user" type="text" class="form-control" name="blood_group" value="<?php echo set_value('blood_group');?>" placeholder="Your Blood Group..." >                                        
          </div>
          <div class="text-center wrong">
               <span  ><?php echo form_error('blood_group'); ?></span>
          </div>

          <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                <input id="user" type="text" class="form-control" name="present_address" value="<?php echo set_value('present_address');?>" placeholder="Your Present Address..." required>                                        
          </div>
          <div class="text-center wrong">
               <span  ><?php echo form_error('present_address'); ?></span>
          </div>

          <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                <input id="user" type="text" class="form-control" name="permanent_address" value="<?php echo set_value('permanent_address');?>" placeholder="Your Permanent Address..." required>                                        
          </div>
          <div class="text-center wrong">
               <span  ><?php echo form_error('permanent_address'); ?></span>
          </div>


          <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input id="user" type="text" class="form-control" name="work_history" value="<?php echo set_value('work_history');?>" placeholder="Your Profession...">                                        
          </div>
          <div class="text-center wrong">
               <span  ><?php echo form_error('work_history'); ?></span>
          </div>

          <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                <input id="user" type="text" class="form-control" name="professional_address" value="<?php echo set_value('professional_address');?>" placeholder="Your Professional Address..." >                                        
          </div>
          <div class="text-center wrong">
               <span  ><?php echo form_error('professional_address'); ?></span>
          </div>

          <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                <input id="user" type="text" class="form-control" name="date_of_birth" value="<?php echo set_value('date_of_birth');?>" placeholder="Your Date Of Birth..." required>                                        
          </div>
          <div class="text-center wrong">
               <span  ><?php echo form_error('date_of_birth'); ?></span>
          </div>

          <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                <input id="user" type="text" class="form-control" name="social_link" value="<?php echo set_value('social_link');?>" placeholder="Your Social Link address..." >                                        
          </div>
          <div class="text-center wrong">
               <span  ><?php echo form_error('social_link'); ?></span>
          </div>

         
              


          <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                <input id="user" type="text" class="form-control" name="username" value="<?php echo set_value('username');?>" onBlur="check(this.value)" placeholder="Your User Name...">                                        
              </div>
              <div class="text-center wrong">
                       <span >
                                 <div id = "check_username"></div>
                              </span>
                              <span ><?php echo form_error('username'); ?></span>
              </div>
                      <div class="text-center wrong">
                      <span  ><?php if(isset($msg)){echo $msg;}?></span>
                     </div>


              <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="envelope"  class="form-control" type="email" name="email" value="<?php echo set_value('email');?>" placeholder="Your  Email...">                                        
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('email'); ?></span>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php if(isset($msg1)){echo $msg1;}?></span>
                     </div>




            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input id="envelope"  class="form-control" type="password" name="password" value="<?php echo set_value('password');?>" placeholder="Your password...">                                        
              </div>
              <div class="text-center wrong">
               <span  ><?php echo form_error('password'); ?></span>
              </div>
              

           <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-unlock"></i></span>
                <input id="envelope"  class="form-control" type="password" name="cpassword" value="<?php echo set_value('cpassword');?>" placeholder="Your  Confirm password...">                                        
              </div>
              <div class="text-center wrong">
               <span  ><?php echo form_error('cpassword'); ?></span>
              </div>


              <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-level-down"></i></span>
                        <select class="form-control" name="member_type" required>
                                 <!-- <option value="">Register As</option> -->
                                 <option value="g_client">General Member</option>
                                 <option value="client">Primium Member</option>
                        </select>                                        
              </div>
                    

               <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                        <input id="envelope"  class="form-control" type="text" name="mobile" value="<?php echo set_value('mobile');?>" placeholder="Your  Mobile...">                                        
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('mobile'); ?></span>
              </div>
          



            
              
              

          <div class="form-group">
                
                   <input class="btn sub_btn" type="submit" name="submit" value="Sign Up">                      
                
              </div>

                  </form>
      <p class="login_footer text-center">Already have an account? <a href="<?php echo base_url();?>home/login" style="color:#2196F3;">Go to login</a></p>
      
               </div>
            </div>
         </div>
      </div>
      <script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
      <script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>
   </body>
</html>

    
