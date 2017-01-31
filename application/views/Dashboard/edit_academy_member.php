<!doctype html>
<html lang='en'>
   <head>
      <meta charset='utf-8'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Smartsheba | Find Members</title>
      <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>css/dashboard.css">
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap/css/font-awesome.css">
      <script src="<?php echo base_url();?>js/script.js"></script>
      <style type="text/css">
         body{
          background: #E7EDEE;
         }
         .wrong{
            text-align: center;
            font-family: Verdana;
            font-size: 15px;
            color: red;
         }
      </style>

   </head>
   <body>
     <!--   -->
      <?php include('nav.php');?>

      <div class="container">
         <div class="row">
            <div class="add-box">
               <img class="img-responsive" src="<?php echo base_url();?>images/GP-Go-Beyond_i.jpg" alt="Add" style="margin:0 auto;">
            </div>
         </div>
         <br/>
         <div class="row back">
            <div class="wrapper">
               <div class="clip-text clip-text_one">Edit Academy Member</div>
            </div>
            <div class="col-md-12 main">
               <div class="main-login main-center">
           
                
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/smart_sheba/home/edit_academy_member_details"> 

                     <div class="form-group">
                        <label for="title" class="col-md-3 control-label">Member Name</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="member_name" value='{member_name}' id="title"  placeholder="Enter your member name" required/>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('member_name'); ?></span>
                     </div>
                   
                     <div class="form-group">
                        <label for="discount" class="col-md-3 control-label">Member Details</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span>
                              <input type="text" class="form-control"  name="member_details"  value="{member_details}" id="discount" placeholder="Enter your member details" required> 
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('member_details'); ?></span>
                     </div>

                     <input type="hidden" name="id" value="{id}">

                     

                     <div class="form-group ">
                        <input class="btn btn-success pull-right"  type="submit" name="submit" value="submit">  
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="container height"></div>
      <?php include('footer.php');?>
      <script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
      <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
   </body>
   <html>
