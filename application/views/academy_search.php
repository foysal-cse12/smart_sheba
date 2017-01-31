<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smartsheba</title>
		
        <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
        <link href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/bootstrap/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/shop.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/bootstrap-select.css" rel="stylesheet">
		<!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/demo.css" />
				<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/common.css" /> -->
		<!-- <link rel="stylesheet" href="<?php echo base_url();?>css/dashboard.css"> -->
      	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">
      		
      	</script>
     	 <script src="<?php echo base_url();?>js/script.js"></script>
     	 <style type="text/css">
     	 	#mytable{
     	 		font-size: 20px;
     	 		font-family: Tahoma;
     	 		color: #212F3D;
     	 	}
     	 	.back{
     	 		font-family: Tahoma;
     	 		font-size: 30px;
     	 		color: #633974  ;

     	 	}
     	 	.style{
     	 		font-family: Tahoma;
     	 		font-size: 20px;
     	 		margin-top: 5%;
     	 		
     	 	}
     	 </style>
     	
		
    </head>
    <body>
		
			<?php include('nav.php');?>

			<br/><br/>
			<div class="container">
				<div class="row style">
				<div class="col-md-3 col-sm-3 hidden-xs"></div>
				<div class="col-sm-6 col-md-6 col-xs-12 back">
					<center><h2>Academy List</h2></center><br>
		            <div class="table-responsive">
		                  <table id="mytable" class="table table-bordred table-striped active_post">       
		                     <thead>
		                       
		                        <!--<th class="text-center"><h3>Academy Name</h3></th>-->
		                        <!-- <th>Details</th>
		                        <th>Member List</th> -->

		                     </thead>
		                     <tbody>
		                      {list}
		                        <tr class="text-center">

		                         <td><a href="<?php echo base_url(); ?>home/academy_list_srh/{id}"  >{academy_name}</a></td>
		                    
		                        <!--  <td>{academy_name}</td> 
		                        
		                         <td><a href="<?php echo base_url(); ?>home/academy_details_srh/{id}" class="btn btn-primary btn-xs" >Details</a></td>
		                        		                        
		                        <td><a href="<?php echo base_url(); ?>home/member_list_srh/{id}" class="btn btn-primary btn-xs" >Member List</a></td>  -->
		                          
		                        </tr>
		                      {/list}
		                     </tbody> 
		                  </table>

		                  <div class="clearfix"></div> 

		                  <div class="col-sm-12 text-center">
			                   <nav>
			                     <ul class="pagination">
			                        <?php echo $links; ?>
			                     </ul>
			                  </nav>
		                  </div> 


		                 </div>
		             </div>
		        </div>
	        </div>
	<?php include('footer.php');?>
	<script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
	<script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/main.js"></script>
	<script src="<?php echo base_url();?>js/carusel1.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap-select.js"></script>
	<script type="<?php echo base_url();?>text/javascript">
		$(document).ready(function(){
		$('.feed-back').click(function() {
		  var clicks = $(this).data('clicks');
		  if (clicks) {
		        $(this).find(".fa-chevron-down").css({"-ms-transform": "rotate(0deg)", "-webkit-transform": "rotate(0deg)" , "transform": "rotate(0deg)" , "-webkit-transition-duration": "1s" , "-moz-transition-duration": "1s" , "-o-transition-duration": "1s" , "transition-duration": "0.5s"});
		  } else {
		        $(this).find(".fa-chevron-down").css({"-ms-transform": "rotate(180deg)", "-webkit-transform": "rotate(180deg)" , "transform": "rotate(180deg)" , "-webkit-transition-duration": "1s" , "-moz-transition-duration": "1s" , "-o-transition-duration": "1s" , "transition-duration": "0.5s"});
		  }
		  $(this).data("clicks", !clicks);
		});

		});

		<!--slide-->


		$(document).ready(function(){
		    $(".feed-back").click(function(){
		        $(".col-87").slideToggle("500");
		    });
		});
		<!--  -->
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})

		<!--dropdown social-->
		$(function(){
		    $('.share-group').hover(function() {
		        $(this).addClass('open');
		    },
		    function() {
		        $(this).removeClass('open');
		    });
		});
		<!--dropdown select-->
		$(function(){
		    $('.input-group').hover(function() {
		        $(this).addClass('open');
		    },
		    function() {
		        $(this).removeClass('open');
		    });
		});


	</script> 	
    </body>
</html>
