<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Product</title>
</head>
<body>
 	<table align="center" border="2px">
	    <tr>
	    	<th  colspan="11">Uploaded Product List</th>
	    </tr>
	 	<tr>
	 	  <td>product id</td>
	 	  <td>Client id</td>
	 	  <td>product title</td>
	 	  <td>product details</td>
	 	  <td>product category</td>
	 	  <td>product image</td>
	 	  <td>product discount(Tk.)</td>
	 	  <td>product price(Tk.)</td>
	 	  <td>location</td>
	 	  <td>mobile</td>
	 	  <td>email</td>
	 	</tr>

	 	{details}
	 	<tr>
	 	  <td>{id}</td>
	 	  <td>{client_id}</td>
	 	  <td>{pr_title}</td>
	 	  <td>{pr_details}</td>
	 	  <td>{pr_category}</td>
	 	  <td><img src="<?php echo base_url()?>assets/upload_images/{pr_image}" width="50" height="50"></td>
	 	  <td>{pr_discount}</td>
	 	  <td>{pr_price}</td>
	 	  <td>{location}</td>
	 	  <td>{mobile}</td>
	 	  <td>{email}</td>
	 	</tr>
	 	{/details}

	 	<tr>
	 	 <td colspan="11"><?php echo $links; ?></td>
	 	</tr>
		
    </table>


	
</body>
</html>