<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smartsheba | Shop Now</title>
		
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smartsheba | Active Info</title>
        <link href="<?php echo base_url();?>css/bootstrap/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/shop.css" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>css/dashboard.css">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>js/script.js"></script>
        <!-- <link href="style.css" rel="stylesheet"> -->
        <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet">
		 <link rel="<?php echo base_url();?>stylesheet" type="text/css" href="<?php echo base_url();?>css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/common.css" />
		<style type="text/css">
		/*Information css*/
			
			.related1_title{font-size:18px;color:#fff;background:#479BAD;}
			.related1_post{border-bottom:1px solid #CCCCCC;}
			.related1_post img{margin:0 auto;width:100px;height:auto;margin:8px 0px !important;}
/*single info css*/
			article{
				margin: 5px 0;
			  padding: 10px;
			  border-radius: 10px;
			  border:1px solid #DDDDDD;
			}
			article:hover{
				box-shadow: 0 0 10px 2px #dedede;
			}
			article .btn-group{
			  visibility:hidden;
			}
			article:hover .btn-group{
			  visibility: visible;
			}
			.avatar img{margin:0 auto;}
			.like_btn{font-size:14px;margin-top:2px; margin-bottom: 10px;margin-right: 10px;}
			
			/* table css */
			.table-user-information > tbody > tr {
				border-top: 1px solid rgb(221, 221, 221);
			}

			.table-user-information > tbody > tr:first-child {
				border-top: 0;
			}


			.table-user-information > tbody > tr > td {
				border-top: 0;
			}
			
			/* right sidebar css */
			.view1_img{margin-top:12px;}
			.info1_div{border:1px solid #CCCCCC;margin-top:5px;}
			.info1_div:hover{
				box-shadow: 0 0 10px 2px #dedede;
			}
			.view1_btn{line-height:100px;text-align:center;margin-top:5px;}
			.related1_post{border-bottom:1px solid #CCCCCC;}
			.related1_post:hover{opacity:0.8;}
			.related1_post img{margin:0 auto !important;width:100px;height:auto;margin:8px 0px !important;}
			.btn1_view{background:#479BAD;color:#fff;}
			.btn1_view:hover{background:#25889E;color:#fff;}
			.related1_title{font-size:18px;color:#fff;background:#479BAD;}
		</style>
    </head>
    <body>
		<?php include('nav.php');?>	
		<br/><br/>
			<div class="container">	
				<div class="row">	
				<div class="col-sm-12">						
						<article class="col-md-4 col-sm-4">
							<p class="avatar text-center">
								<img class="img-responsive" src="<?php echo base_url(); ?>assets/info_images/{info_image}">
							</p>

							<p class="title  text-center"> winskit </p>
							<div class="text-center">
								<div class="btn-group" role="group" style="margin-top:-300px;">
								    <a href="#" style="border-radius:3px 0 0 3px"><i class="btn btn-primary  	glyphicon glyphicon-thumbs-up" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like"></i></a>
									
								    <a href="#" style="border-radius:3px 0 0 3px"><i class="btn btn-info glyphicon glyphicon-share-alt" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share"></i></a>
								</div>
							</div>
						</article>
						

						<div class="col-md-5 col-sm-5">
							<h3 style="color:#479BAD;margin:15px 0 15px;text-align:center;">Details......</h3>
							<table class="table table-user-information">
								<tbody>
									<tr>
										<td>Title:</td>
										<td>{info_title}</td>
									</tr>
									
									<tr>
										<td>Catagory:</td>
										<td>{info_category}</td>
									</tr>
									<tr>
										<td>Location:</td>
										<td>{info_location}.</td>
									</tr>
									<tr>
										<td>Contact:</td>
										<td>{info_mobile}</td>
									</tr>
									<tr>
										<td>Web Url:</td>
										<td><a href="http://{info_website}/" target="_blank">{info_website}</a></td>
									</tr>
									<tr>
										<td>Description:</td>
										<td>{info_description} </td>
									</tr>
								</tbody>
							</table>
						</div>
						
					
				    </div> 
				</div> 
			</div>
			<br />
			<br />
			<br />
			<br />
			<br />
		<?php include('footer.php');?>

		
	<script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/main.js"></script>
	<script src="<?php echo base_url();?>js/carusel1.js"></script>
	<script src="<?php echo base_url();?>js/custom_menu.js"></script>	
    </body>
</html>
