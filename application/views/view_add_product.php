<!DOCTYPE html>
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
		 	<!-- <td colspan="2"><?php echo validation_errors(); ?><td>  -->
		 </tr> 

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>


    </table>
 </form>

	
</body>
</html>