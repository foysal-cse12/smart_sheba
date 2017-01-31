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
      
      <style type="text/css">
      	.about h1{
         color: #000;
         font-size: 30px;
         padding: 10px;
         font-family: Raleway;
         }
         .about h3{
         color: #000;
         font-size: 25px;
         padding: 10px;
         font-family: Raleway;
         line-height: 200%;
         }
         .about p{
         color: #000;
         font-size: 15px;
         padding: 5px;
         font-family: Verdana;
         line-height: 1.5;
         text-align: center;
        }.line{
        	width: 1px;
        	height: 400px;
        	background: #000;
        	margin-top: 100px;
        }
        .form{
        	margin: 0 auto;
        	color: #000;
        }
        .form p{
         color: #000;
         font-size: 20px;
         font-family: Raleway;
         line-height: 1.5;
         text-align: justify;
         }
         .btn-send {
         font-weight: 300;
         text-transform: uppercase;
         letter-spacing: 0.1em;
         margin-bottom: 20px;
         }
         .wrong{
          text-align: center;
          font-family: Verdana;
          font-size: 15px;
          color: red;
        }
        .success{
          text-align: center;
          font-family: Verdana;
          font-size: 15px;
          color: green;
        }
      </style>
   </head>
   <body>
      <div class="patarn">
         <?php include('nav.php');?>	
         
         <div class="container">
            <div class="row about well">
               <h3 class="text-center">Welcome to Smartsheba.com Contact Us page !</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </p>
            </div>
            <div class="row well">
               <div class="col-md-5 about">
               		<h3 class="text-center">Our Address</h3>
                  	<p>House # 438 , Road # 30 ,Floor # 5th</p>
				  	<p>Mohakhali DOHS, Dhaka, Bangladesh</p>
				  	<p>Email: contact@winskit.com</p>
					<p>Phone: +88 01630462226 , 04478222290 </p>
					<br/><br/>
					<h3 class="text-center">Our Address</h3>
                  	<p>House # 438 , Road # 30 ,Floor # 5th</p>
				  	<p>Mohakhali DOHS, Dhaka, Bangladesh</p>
				  	<p>Email: contact@winskit.com</p>
					<p>Phone: +88 01630462226 , 04478222290 </p>
               </div>
               <div class="col-md-1 hidden-xs hidden-sm">
               		<div class="line">
               			
               		</div>
               </div>
               <div class="col-md-6 about">
                  <h1 class="text-center">Contact with us</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                  </p>
                   <form class="form" method="post" action="/smart_sheba/home/contact_us_email">
                     <div class="messages"></div>
                     <div class="controls">
                  
                       <div class="row">
                           <div class="col-md-12">
                        
                              <div class="form-group">
                                 <p>Your Name *<p>
                                    <input type="text" name="name" class="form-control" placeholder="Please enter your name *" data-error="Your Name is required." required>
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="text-center wrong">
                             <span ><?php echo form_error('name'); ?></span>
                        </div>
                        
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <p>Your Email *</p>
                                 <input type="email" name="email" class="form-control" placeholder="Please enter your email *"  data-error="Valid email is required." required>
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>  
                           <div class="col-md-6">
                              <div class="form-group">
                                 <p>Your Phone</p>
                                 <input type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                        </div>

                        <div class="text-center wrong">
                             <span ><?php echo form_error('email'); ?></span>
                        </div>
                        
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <p>Message *</p>
                                 <textarea name="message" class="form-control" placeholder="Message for me *" rows="4" data-error="Please,leave us a message." required></textarea>
                                 <div class="help-block with-errors"></div>
                              </div>
                           </div>
                        
                           <div class="text-center wrong">
                             <span  ><?php echo form_error('message'); ?></span>
                           </div>
                  
                           <div class="col-md-12">
                             <input type="submit" class="btn btn-success btn-send pull-right" value="Send message" name="submit">
                       
                           </div>
                        </div>

                         <div class="text-center success">
                             <span  ><?php if(isset($msg)){echo $msg;}?></span>
                          </div> 

                        <br/>
                        <div class="row">
                           <div class="col-md-12">
                              <p class="text-muted pull-right"><strong>*</strong> These fields are required.</p>
                           </div>
                        </div>
                     </div>
                  </form>

                 <!--  <form action="/smart_sheba/home/contact_us_email" method="post">
                 <input type="text" name="name" placeholder="name" style="color:black"><br>
                 <input type="email" name="email" placeholder="email"  style="color:black"><br>
                 <input type="message" name="message" placeholder="msg" style="color:black"><br>
                 <input type="submit" value="submit" name="submit">
                   
                 </form> -->
                  







               </div>
            </div>
         </div>
         <?php include('footer.php');?>
      </div>
      <script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
      <script src="<?php echo base_url();?>css/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url();?>js/main.js"></script>
      <script src="<?php echo base_url();?>js/carusel1.js"></script>
      <script src="<?php echo base_url(); ?>js/bootstrap-select.js"></script>
      <script type="text/javascript">
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
      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
      <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
      <script src="<?php echo base_url();?>js/bootstrap.js"></script>
      <script src="<?php echo base_url();?>js/validator.js"></script>
      <script src="<?php echo base_url();?>js/contact.js"></script>

   </body>
</html>