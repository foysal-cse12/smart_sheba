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
               <div class="clip-text clip-text_one">Add Product</div>
            </div>
            <div class="col-md-12 main">
               <div class="main-login main-center">
           
                
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/smart_sheba/home/edit_information_details_client"> 

                  <!-- <?php echo form_open_multipart('home/add_product_details/'); ?> -->
                     <div class="form-group">
                        <label for="title" class="col-md-3 control-label">Information Title</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="info_title" value='{info_title}' id="title"  placeholder="Enter your Information title" required/>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('info_title'); ?></span>
                     </div>


                     <div class="form-group">
                        <label for="details" class="col-md-3 control-label">Information Description</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-edit" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="info_description"  value="{info_description}" id="details"  placeholder="Enter your Information Description" required/>
                              </textarea>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('info_description'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="details" class="col-md-3 control-label">Location</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-edit" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="info_location"  value={info_location} id="details"  placeholder="Enter your location" required/>
                              </textarea>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('info_location'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="discount" class="col-md-3 control-label">Website</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span>
                              <input type="text" class="form-control"  name="info_website"  value={info_website}   > 
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('info_website'); ?></span>
                     </div>


                     <div class="form-group">
                        <div class="col-md-9">
                           <div class="input-group">
                              
                              <input type="hidden" class="form-control" name="id" value={id} id="contact" >
                           </div>
                        </div>
                     </div>

                     <div class="form-group">
                        <div class="col-md-9">
                           <div class="input-group">
                             
                              <input type="hidden" class="" name="client_id" value={client_id} id="contact"  >
                           </div>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="file" class="col-md-3 control-label">Image</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-photo" aria-hidden="true"></i></span>
                              <!-- <input type="file" class="form-control" name="contact" id="contact"  placeholder="Enter your Contact number"/> -->
                              <input type="file" name="info_image" size="20">
                           </div>
                        </div>
                     </div>


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
      <script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
      <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
   </body>
   <html>
