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
               <div class="clip-text clip-text_one">Add Product</div>
            </div>
            <div class="col-md-12 main">
               <div class="main-login main-center">
                  <form class="form-horizontal" method="post" action="#">
                     <div class="form-group">
                        <label for="title" class="col-md-3 control-label">Product Title</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="title" id="title"  placeholder="Enter your Product title"/>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="details" class="col-md-3 control-label">Product Details</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-edit" aria-hidden="true"></i></span>
                              <textarea class="form-control" name="details" id="details" placeholder="Describe about product here..."></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="category" class="col-md-3 control-label">Product Category</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-level-down" aria-hidden="true"></i></span>
                              <!--<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>-->
                              <select class="form-control" name="category">
                                 <option value="">Select a product category</option>
                                 <option value="">Electronics</option>
                                 <option value="">Car and Others</option>
                                 <option value="">Clothes</option>
                                 <option value="">Sports</option>
                                 <option value="">Books</option>
                                 <option value="">Heath & Beauty</option>
                                 <option value="">Other</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="discount" class="col-md-3 control-label">Discount</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="discount" id="discount" placeholder="Enter your Discount"> 
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="price" class="col-md-3 control-label">Price</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="price" id="preice"  placeholder="Enter your Price"/>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Location</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                              <textarea class="form-control" name="details" id="details" placeholder="Describe your location here..."></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="contact" class="col-md-3 control-label">Contact</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="contact" id="contact"  placeholder="Enter your Contact number"/>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="file" class="col-md-3 control-label">Product photo</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-photo" aria-hidden="true"></i></span>
                              <input type="file" class="form-control" name="contact" id="contact"  placeholder="Enter your Contact number"/>
                           </div>
                        </div>
                     </div>
                     <div class="form-group ">
                        <button type="button" class="btn btn-primary btn-lg login-button pull-right">Add as Product</button>
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