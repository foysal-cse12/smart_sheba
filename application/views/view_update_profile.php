<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update profile</title>
</head>
<body>
 <?php echo form_open_multipart('home/update_profile_client/'); ?>
  <form action="/smart_sheba/home/update_profile_client" method="post">
  	<table align="center" border="2">
  		<tr>
  			<th colspan="2">Update Profile</th>
  		</tr>

  		<tr>
  			<td>Username</td>
  			<td>{username}</td>
  		</tr>

  		<tr>
  			<td>Full Name</td>
  			<td><input type="text" name="fullname" value="{fullname}"></td>
  		</tr>
  		<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('fullname'); ?></span></td>
		</tr>

		<tr>
  			<td>Email</td>
  			<td><input type="text" name="email" value="{email}"></td>
  		</tr>
  		<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('email'); ?></span></td>
		</tr>

		<tr>
  			<td>Mobile</td>
  			<td><input type="text" name="mobile" value="{mobile}"></td>
  		</tr>
  		<tr>
			<td></td>
			<td><span style="color:red"><?php echo form_error('mobile'); ?></span></td>
		</tr>

		<tr>
		    <td></td>
			<td><img src="<?php echo base_url();?>assets/profile_images/{image}" width="50" height="50"></td>
		</tr>

		<tr>
			<td>Update image</td>
			<td><input type="file" name="image" size="20"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>


  	</table>
  </form>
	
</body>
</html>