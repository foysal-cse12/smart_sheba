<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>add information</title>
</head>
<body>
 <?php echo form_open_multipart('home/add_information_details/'); ?>
  <form action="/ssn/home/add_information_details" method="post">
  	   <table align="center" border="2px">

		  	<tr>
		  		<th colspan="2">Add Information</th>
		  	</tr>

		  	<tr>
		  		<td>client id</td>
		  		<td>{id}</td>
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
				<td>Description</td>
				<td><input type="text"  name="description"  value='<?php echo set_value("description");?>'></td>
		    </tr>
		    <tr>
				<td></td>
				<td><span style="color:red"><?php echo form_error('description'); ?></span></td>
		    </tr>

		    <tr>
				<td>Category</td>
				<td>
					<select name="category" required>
						<option value="electronics">Electronics</option>
						<option value="cloths">Cloths</option>
						<option value="books">Books</option>
						<option value="sports">Sports and Fitness</option>
					</select>
				</td>
		   </tr>

		    <tr>
				<td>Contact</td>
				<td><input type="text" name="mobile"  value='{mobile}'></td>
		    </tr>
		    <tr>
				<td></td>
				<td><span style="color:red"><?php echo form_error('mobile'); ?></span></td>
		    </tr>

		     <tr>
				<td>Website</td>
				<td><input type="text" name="website"  value='<?php echo set_value("website");?>'></td>
		    </tr>
		    <tr>
				<td></td>
				<td><span style="color:red"><?php echo form_error('website'); ?></span></td>
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
				<td>Image</td>
				<td><input type="file" name="image" size="20" ></td>
		    </tr>

		    <tr>
				<td></td>
				<td><input type="submit" name="submit" value="submit"></td>
		    </tr>

	   </table>

  </form>
	
</body>
</html>