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
               <div class="clip-text clip-text_one">Add Information</div>
            </div>
            <div class="col-md-12 main">
               <div class="main-login main-center">
                  <form class="form-horizontal" method="post" action="/smart_sheba/home/add_information_details" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="title" class="col-md-3 control-label">Information Title*</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-info" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="title" value='<?php echo set_value("title");?>' id="title"  placeholder="Enter your Information title"/>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('title'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="details" class="col-md-3 control-label">Description *</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-edit" aria-hidden="true"></i></span>
                              <input type="text" class="form-control"  name="description"  value='<?php echo set_value("description");?>' id="title"  placeholder="Enter your information description"/>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('description'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="category" class="col-md-3 control-label">Information Category*</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-level-down" aria-hidden="true"></i></span>
                              <!--<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>-->
                              <select class="form-control" name="category" required>
                                 <option value="">Select a product category</option>
                                 <option value="Hospital">Hospital</option>
                                 <option value="School_and_Collage">School & Collage</option>
                                 <option value="Bus_Stand">Bus Stand</option>
                                 <option value="Sports">Sports</option>
                                 <option value="Books">Books</option>
                                 <option value="Office">Office</option>
                                 <option value="Resturent">Resturent</option>
                                 <option value="Blood_Bank">Blood Bank</option>
                                 <option value="Super_Shop">Super Shop</option>
                                 <option value="Show_Room">Show Room</option>
                                 <option value="Railway">Railway</option>
                              </select>
                           </div>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="category" class="col-md-3 control-label">Division*</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-level-down" aria-hidden="true"></i></span>
                              <!--<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>-->
                              <select class="form-control" name="division" required>
                                 <option value="">Select District</option>
                                 <option value="Dhaka">Dhaka</option>
                                 <option value="Barisal">Barisal</option>
                                 <option value="Chittagong">Chittagong</option>
                                 <option value="Khulna">Khulna</option>
                                 <option value="Mymensingh ">Mymensingh </option>
                                 <option value="Rajshahi">Rajshahi</option>
                                 <option value="Rangpur">Rangpur</option>
                                 <option value="Sylhet">Sylhe</option>
                              </select>
                           </div>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="email" class="col-md-3 control-label">District *</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="district"  value='<?php echo set_value("district");?>' id="details" placeholder="Describe District  name here...">
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('district'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Thana </label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="thana"  value='<?php echo set_value("thana");?>' id="details" placeholder="Describe Thana  name here...">
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('thana'); ?></span>
                     </div>
                     
                     <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Area *</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                              <textarea class="form-control" name="area"  value='<?php echo set_value("area");?>' id="details" placeholder="Describe your area here..."></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('area'); ?></span>
                     </div>



                     <div class="form-group">
                        <label for="contact" class="col-md-3 control-label">Contact *</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="mobile"  value='{mobile}' id="contact"  placeholder="Enter your Contact number"/>
                           </div>
                        </div>
                     </div>

                     <div class="form-group">
                        <label for="contact" class="col-md-3 control-label">Email *</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                              <input type="email" class="form-control" name="email"  value='{email}' id="contact"  placeholder="Enter your email address" required/>
                           </div>
                        </div>
                     </div>


                     <div class="text-center wrong">
                      <span  ><?php echo form_error('mobile'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="contact" class="col-md-3 control-label">Website Url</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-tv" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="website"  value='<?php echo set_value("website");?>' id="contact"  placeholder="Enter your Contact number"/>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('website'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="file" class="col-md-3 control-label">Information photo</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-photo" aria-hidden="true"></i></span>
                              <input type="file" name="image" size="20" >
                           </div>
                        </div>
                     </div>
                     <div class="form-group ">
                        <!-- <button type="button" class="btn btn-primary btn-lg login-button pull-right">Add as Product</button> -->
                        <input class="btn btn-success pull-right"  type="submit" name="submit" value="submit"> 
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="container height"></div>
      <?php include('footer.php');?>
      <script src="<?php echo base_url();?>/js/jquery-2.1.4.min.js"></script>
      <script src="<?php echo base_url();?>/js/bootstrap.min.js"></script>
   </body>
   <html>


