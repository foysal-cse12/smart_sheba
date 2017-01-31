<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Uploaded Information</title>
</head>
<body>
 	<table align="center" border="2px">
	    <tr>
	    	<th  colspan="11">Uploaded Information List</th>
	    </tr>
	 	<tr>
	 	  <td>Information id</td>
	 	  <td>Client id</td>
	 	  <td>Information title</td>
	 	  <td>Information description</td>
	 	  <td>Category</td>
	 	  <td>Contact</td>
	 	  <td>Website</td>
	 	  <td>Location</td>
	 	  <td>Image</td>
	 	</tr>

	 	{details}
	 	<tr>
	 	  <td>{id}</td>
	 	  <td>{client_id}</td>
	 	  <td>{info_title}</td>
	 	  <td>{info_description}</td>
	 	  <td>{info_category}</td>
	 	  <td>{info_mobile}</td>
	 	  <td>{info_website}</td>
	 	  <td><img src="<?php echo base_url()?>assets/info_images/{info_image}" width="50" height="50"></td>
	 	  <td>{info_location}</td>
	 	</tr>
	 	{/details}

	 	<tr>
	 	 <td colspan="11"><?php echo $links; ?></td>
	 	</tr>
    </table>


	
</body>
</html>