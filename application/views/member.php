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
        <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet">
        <link href="<?php echo base_url();?>css/bootstrap-select.css" rel="stylesheet">
		<!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/demo.css" />
				<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/common.css" /> -->
		<!-- <link rel="stylesheet" href="<?php echo base_url();?>css/dashboard.css"> -->
      	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript">
      		
      	</script>
     	 <script src="<?php echo base_url();?>js/script.js"></script>
     	 <style type="text/css">
     	 
     	 .profile {
    height: auto;
}
.profile img {
    height: 100px;
}
.details {
    height: auto;
}
.details p {
    color: #000;
    font-family: Montserrat, sans-serif;
    text-align: left;
    font-size: 15px;
}
.action a {
    margin-top: 30px;
    font-family: Montserrat, sans-serif;
}
.col-xs-4 a {
    margin-right: 10px;
}
     	 </style>
		
    </head>
    <body>
		
			<?php include('nav.php');?>

			<br/><br/>
			<div class="container">
				<div class="row back">
		            
		            {list}
		            <div class="col-md-offset-2 col-md-8">
		              <div class="panel panel-info">
		                  <div class="panel-body">
		                    <div class="col-md-3 col-xs-6 profile">
		                      <img class="img-responsive" src="<?php echo base_url();?>assets/profile_images/{image}" style="margin:0 auto;">
		                    </div>
		                    <div class="col-md-5 col-xs-6 details">
		                      <p>Name :{fullname}</p>
		                      <p>Work Place :{work_history}</p>
		                      <p>Address :{address}</p>
		                    </div>
		                      <div class="col-md-4 col-xs-12 action text-center">
		                        <a href="<?php echo base_url();?>home/view_profile_member/{id}" class="btn btn-info btn-sm ">View Profile</a>
		                        <a href="<?php echo base_url();?>home/login" class="btn btn-info btn-sm">Add Friend</a>
		                      </div>
		              </div>
		            </div>
		          </div>
		          {/list}

	        	<div class="col-sm-12 text-center">
					    <nav>
							<ul class="pagination">
								<?php echo "$links"; ?>
							</ul>
						</nav>
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
