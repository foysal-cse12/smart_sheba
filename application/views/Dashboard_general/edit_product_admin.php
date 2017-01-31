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
           
                
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/smart_sheba/home/edit_product_details_client_general"> 

                  <!-- <?php echo form_open_multipart('home/add_product_details/'); ?> -->
                     <div class="form-group">
                        <label for="title" class="col-md-3 control-label">Product Title</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="title" value='{pr_title}' id="title"  placeholder="Enter your Product title" required/>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('title'); ?></span>
                     </div>


                     <div class="form-group">
                        <label for="details" class="col-md-3 control-label">Product Details</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-edit" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="pr_details"  value="{pr_details}" id="details"  placeholder="Enter your Product details" required/>
                              </textarea>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('pr_details'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="details" class="col-md-3 control-label">Product Condition</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-edit" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="pr_condition"  value={pr_condition} id="details"  placeholder="Enter your Product condition" required/>
                              </textarea>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('pr_condition'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="discount" class="col-md-3 control-label">Previous Price</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span>
                              <input type="text" class="form-control"  name="pr_previous_price"  value={pr_previous_price} id="discount" placeholder="Product Previous price"> 
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('pr_previous_price'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="price" class="col-md-3 control-label">Price</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="pr_price"  value={pr_price} id="preice"  placeholder="Enter your Price" required/>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('pr_price'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Location</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                               <input type="text" class="form-control" name="location"  value={location} id="location"  placeholder="Enter your location" required/>
                              </textarea>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('location'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="contact" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="email" value="{email}" id="contact"  placeholder="Enter your email" required/>
                           </div>
                        </div>
                     </div>
                      <div class="text-center wrong">
                      <span  ><?php echo form_error('email'); ?></span>
                     </div>


                     <div class="form-group">
                        <label for="contact" class="col-md-3 control-label">Contact</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="mobile" value={mobile} id="contact"  placeholder="Enter your Contact number" required/>
                           </div>
                        </div>
                     </div>
                      <div class="text-center wrong">
                      <span  ><?php echo form_error('mobile'); ?></span>
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
                        <label for="file" class="col-md-3 control-label">Product photo</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-photo" aria-hidden="true"></i></span>
                              <!-- <input type="file" class="form-control" name="contact" id="contact"  placeholder="Enter your Contact number"/> -->
                              <input type="file" name="pr_image" size="20">
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
