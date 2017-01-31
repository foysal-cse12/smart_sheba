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
               <div class="clip-text clip-text_one">Add Product</div>
            </div>
            <div class="col-md-12 main">
               <div class="main-login main-center">
           
                
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/smart_sheba/home/add_product_details_admin"> 

                  <!-- <?php echo form_open_multipart('home/add_product_details/'); ?> -->
                     <div class="form-group">
                        <label for="title" class="col-md-3 control-label">Product Title*</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="title" value='<?php echo set_value("title");?>' id="title"  placeholder="Enter your Product title"/>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('title'); ?></span>
                     </div>


                     <div class="form-group">
                        <label for="details" class="col-md-3 control-label">Product Details*</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-edit" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="pr_details"  value='<?php echo set_value("pr_details");?>' id="details"  placeholder="Enter your Product details"/>
                              </textarea>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('pr_details'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="details" class="col-md-3 control-label">Product Condition*</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-edit" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="pr_condition"  value='<?php echo set_value("pr_condition");?>' id="details"  placeholder="Enter your Product condition"/>
                              </textarea>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('pr_condition'); ?></span>
                     </div>



                     <div class="form-group">
                        <label for="category" class="col-md-3 control-label">Product Category*</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-level-down" aria-hidden="true"></i></span>
                              <!--<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>-->
                              <select class="form-control" name="category" required>
                                  <option value="">Select a product category</option> 
                                 <option value="electronics">Electronics</option>
                                 <option value="car_and_others">Car and Others</option>
                                 <option value="clothes">Clothes</option>
                                 <option value="jewlery">Jewlery</option>
                                 <option value="mobile">Mobiles & Tab</option>
                                 <option value="sports">Sporting Goods</option>
                                 <option value="books">Books</option>
                                 <option value="heath_and_beauty">Heath & Beauty</option>
                                 <option value="home">Home & Living</option>
                                 <option value="kids">Kids & Babies</option>
                                 <option value="foods">Foods</option>
                                 <option value="other">Other</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('category'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="price" class="col-md-3 control-label">Previous Price</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="pr_previous_price"  value='<?php echo set_value("pr_previous_price");?>' id="preice"  placeholder="Enter your Price"/>
                           </div>
                        </div>
                     </div>       
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('pr_previous_price'); ?></span>
                     </div>

                     <!-- <div class="form-group">
                        <label for="discount" class="col-md-3 control-label">Discount</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span>
                              <input type="text" class="form-control"  name="pr_discount"  value='<?php echo set_value("pr_discount");?>' id="discount" placeholder="Enter your Discount"> 
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('pr_discount'); ?></span>
                     </div> -->

                     <div class="form-group">
                        <label for="price" class="col-md-3 control-label">Current Price*</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="pr_price"  value='<?php echo set_value("pr_price");?>' id="preice"  placeholder="Enter your Price"/>
                           </div>
                        </div>
                     </div>
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('pr_price'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="price" class="col-md-3 control-label">Commission</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="pr_commission"  value='<?php echo set_value("pr_commission");?>' id="preice"  placeholder="Smartsheba commission"/>
                           </div>
                        </div>
                     </div>       
                     <div class="text-center wrong">
                      <span  ><?php echo form_error('pr_commission'); ?></span>
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
                        <label for="contact" class="col-md-3 control-label">Email*</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="email" value="{email}" id="contact"  placeholder="Enter your email"/>
                           </div>
                        </div>
                     </div>
                      <div class="text-center wrong">
                      <span  ><?php echo form_error('email'); ?></span>
                     </div>


                     <div class="form-group">
                        <label for="contact" class="col-md-3 control-label">Contact*</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                              <input type="text" class="form-control" name="mobile" value={mobile} id="contact"  placeholder="Enter your Contact number"/>
                           </div>
                        </div>
                     </div>
                      <div class="text-center wrong">
                      <span  ><?php echo form_error('mobile'); ?></span>
                     </div>

                     <div class="form-group">
                        <label for="file" class="col-md-3 control-label">Product photo</label>
                        <div class="col-md-9">
                           <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-photo" aria-hidden="true"></i></span>
                              <!-- <input type="file" class="form-control" name="contact" id="contact"  placeholder="Enter your Contact number"/> -->
                              <input type="file" name="pr_image" size="20" required>
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
      <script src="../js/jquery-2.1.4.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
   </body>
   <html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Product</title>
</head>
<body>
<?php echo form_open_multipart('home/add_product_details/'); ?>

 <form action="/smart_sheba/home/add_product_details" method="post">
 	    <table align="center" border="2px">

    	<tr>
    		<th colspan="2">Add Product</th>
    	</tr>

    	<tr>
    		<td>Title</td>
    		<td><input type="text" name="title" value='<?php echo set_value("title");?>'></td>
    	</tr>
    	<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('title'); ?></span></td>
		</tr>

		<tr>
			<td>client id</td>
			<td>{id}</td>
		</tr>

		<tr>
			<td>Product Details</td>
			<td><input type="text"  name="pr_details"  value='<?php echo set_value("pr_details");?>'></td>
		</tr>
		<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('pr_details'); ?></span></td>
		</tr>

		<tr>
			<td>Category</td>
			<td>
				<select name="category">
					<option value="electronics">Electronics</option>
					<option value="cloths">Cloths</option>
					<option value="books">Books</option>
					<option value="sports">Sports and Fitness</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Discount(%)</td>
			<td><input type="text" name="pr_discount"  value='<?php echo set_value("pr_discount");?>'></td>
		</tr>
		<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('pr_discount'); ?></span></td>
		</tr>

		<tr>
			<td>Product price(Tk.)</td>
			<td><input type="text" name="pr_price"  value='<?php echo set_value("pr_price");?>'></td>
		</tr>
		<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('pr_price'); ?></span></td>
		</tr>

		<tr>
			<td>Location</td>
			<td><input type="text" name="location"  value='<?php echo set_value("location");?>'></td>
		</tr>
		<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('location'); ?></span></td>
		</tr>

		<tr>
			<td>Active Contact Number</td>
			<td>{mobile}</td>
		</tr>

		<tr>
			<td>Active Email Address</td>
			<td>{email}</td>
		</tr>

		<tr>
			<td>Product Image</td>
			<td><input type="file" name="pr_image" size="20" required></td>
		</tr>
		 <tr>
		    <td></td>
		 	<td><span style="color:red"><?php if(isset($error)){echo $error;} ?></span><td>
		 	<td colspan="2"><?php echo validation_errors(); ?><td>
		 </tr> 

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>


    </table>
 </form>

	
</body>
</html> -->