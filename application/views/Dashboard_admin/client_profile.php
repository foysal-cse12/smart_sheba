<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <![endif]-->
      <title>Smartsheba | User Profile</title>
      <!-- BOOTSTRAP CORE STYLE  -->
      <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css">

      <!-- FONT AWESOME ICONS  -->
      <link href="<?php echo base_url();?>css/bootstrap/css/font-awesome.css" rel="stylesheet" />
      <!-- CUSTOM STYLE  -->
      <link rel="stylesheet" href="<?php echo base_url();?>css/dashboard.css">
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>js/script.js"></script>
      <style type="text/css">
         body{
         background: #E7EDEE;
         }
      </style>
   </head>
   <body>
      <!-- HEADER SECTION-->
      <?php include('nav.php');?>
      <!-- HEADER END-->
      <!-- MENU SECTION -->
      <div class="container">
         <div class="row">
            <div class="add-box">
               <img class="img-responsive" src="<?php echo base_url();?>images/GP-Go-Beyond_i.jpg" alt="Add" style="margin:0 auto;">
            </div>
         </div>
         <br/>
      </div>
      <div class="content-wrapper">
         <div class="container">  
            <div class="row">
                <div class="col-md-3 col-sm-3">                 
                    <div class="user-wrapper">
                        <img src="<?php echo base_url();?>assets/profile_images/{image}" class="img-responsive" /> 
                        <div class="description">
                          <h4>{fullname}</h4>
                          <h5> <strong>{work_history}</strong></h5>
                        
                          <hr />

                         <!--  <a href="#" class="btn btn-info btn-sm"> <i class="fa fa-user-plus" ></i> &nbsp;Add Friend </a> 
                                                  <a href="#" class="btn btn-danger btn-sm"> <i class="fa fa-close" ></i> &nbsp;Block</a> -->

                          <!--<a href="#" class="btn btn-info btn-lg"> <i class="fa fa-close" ></i> &nbsp;Change Password</a>-->
                        </div>
                     </div>
                </div>
                <div class="col-md-9 col-sm-9  user-wrapper">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Information
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">Biography </a>
                                </li>
                                <!-- <li class=""><a href="#profile" data-toggle="tab">History</a>
                                </li> -->
                                <li class=""><a href="#settings" data-toggle="tab">Profile</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="home">
                                    <div class="description">
				                        <h3> {fullname} Biography : </h3>
				                    	<hr />
				                    	<p>
                                  {describe_myself}
				                          
				                    	</p>

				                      
				                    	<!-- <h3> Social Links: </h3>
                              <hr />                
                                                             <a href="#" class="btn btn-social btn-facebook">
                                                                  <i class="fa fa-facebook"></i>&nbsp; Facebook </a>
                              
                                                              <a href="#" class="btn btn-social btn-google">
                                                                  <i class="fa fa-google-plus"></i>&nbsp; Google</a>
                                                              <a href="#" class="btn btn-social btn-twitter">
                                                                  <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                                                              <a href="#" class="btn btn-social btn-linkedin">
                                                                  <i class="fa fa-linkedin"></i>&nbsp; Linkedin </a> -->


				                    </div>
                                </div>
                                <!-- <div class="tab-pane fade" id="profile">
                                    <h4>History</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div> -->
                                <div class="tab-pane fade" id="settings">
                                    <h4 class="text-center">Profile Details</h4>


                                    <table class="table table-user-information">
                                      <tbody>
                                        <tr>
                                          <td>FullName:</td>
                                          <td>{fullname}</td>
                                        </tr>
                                        
                                        <tr>
                                          <td>Email:</td>
                                          <td>{email}</td>
                                        </tr>
                          
                                        
                                        <tr>
                                          <td>Blood Group:</td>
                                          <td>{blood_group}</td>
                                        </tr>

                                        
                                        <tr>
                                          <td>Work History:</td>
                                          <td>{work_history}</td>
                                        </tr>
                                        
                                        <tr>
                                          <td>Study Background:</td>
                                          <td>{study_background}</td>
                                        </tr>


                                        <tr>
                                          <td>Address:</td>
                                          <td>{address}</td>
                                        </tr>

                                    
                                      </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </div>
      <!-- MAIN SECTION END-->

      <!-- FOOTER SECTION -->
      <?php include('footer.php');?>
      <!-- FOOTER SECTION END-->
      
      <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
      <!-- CORE JQUERY SCRIPTS -->
      <script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
      <!-- BOOTSTRAP SCRIPTS  -->
      <script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.js"></script>
   </body>
</html>