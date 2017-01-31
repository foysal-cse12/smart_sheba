<!doctype html>
<html lang='en'>
   <head>
      <meta charset='utf-8'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Smartsheba | Find Members</title>
      <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../css/dashboard.css">
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="../css/bootstrap/css/font-awesome.css">
      <script src="../js/script.js"></script>
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
               <img class="img-responsive" src="../images/GP-Go-Beyond_i.jpg" alt="Add" style="margin:0 auto;">
            </div>
         </div>
         <br/>
         <div class="row back">
            <div class="wrapper">
               <div class="clip-text clip-text_one">Create Academy</div>
            </div>
            <div class="col-md-12 main">
               <div class="main-login main-center">
           
                
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/smart_sheba/home/create_academy_details_admin"> 

                  <!-- <?php echo form_open_multipart('home/add_product_details/'); ?> -->
                     <div class="form-group">
                        <label for="title" class="col-md-3 control-label">Academy Name</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="academy_name" value='<?php echo set_value("academy_name");?>' id="title"  placeholder="Enter your Academy Name"/ required>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('academy_name'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="title" class="col-md-3 control-label">Academy Details</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                              <textarea type="text" class="form-control" name="academy_details" value='<?php echo set_value("academy_details");?>' id="title"  placeholder="Enter your Academy Details"/ required></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('academy_details'); ?></span>
                     </div>

                     <input type="hidden" name="owner_name" value={username}>



                     <div class="form-group ">
                       <!--  <button type="button" class="btn btn-primary btn-lg login-button pull-right">Add as Product</button> -->
                        <input class="btn btn-success pull-right"  type="submit" name="submit" value="submit">  
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="container height"></div>
      <?php include('footer.php');?>
      <script src="../js/jquery-2.1.4.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
   </body>
   <html>

