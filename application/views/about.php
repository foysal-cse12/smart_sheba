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
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/demo.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/common.css" />
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
        }
        .ab h1{
           color: #000;
           font-size: 30px;
           padding: 10px;
           font-family: Raleway;
           line-height: 200%;
         }
        .ab p{
           color: #000;
           font-size: 15px;
           padding: 5px;
           font-family: Verdana;
           line-height: 1.5;
           text-align: left;
        }
        .line{
        	width: 1px;
        	height: 400px;
        	background: #000;
        	margin-top: 100px;
        }
       
        .fancy-collapse-panel .panel-default > .panel-heading {
          padding: 0;
        }
        .fancy-collapse-panel .panel-heading a {
          padding: 12px 35px 12px 15px;
          display: inline-block;
          width: 100%;
          background-color: #479BAD;
          color: #000;
          position: relative;
          text-decoration: none;
          font-family: Raleway;
        }
        .fancy-collapse-panel .panel-heading a:after {
          font-family: "FontAwesome";
          content: "\f147";
          position: absolute;
          right: 20px;
          font-size: 20px;
          font-weight: 400;
          top: 50%;
          line-height: 1;
          margin-top: -10px;
        }
        .fancy-collapse-panel .panel-heading a.collapsed:after {
          content: "\f196";
        }
        .panel-body{
          color: #000;
        }
      </style>
   </head>
   <body>
      <div class="patarn">
         <?php include('nav.php');?>	
        
         <div class="container">
            <div class="row about well">
               <h3 class="text-center">Welcome to Smartsheba.com About Us page !</h3>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               </p>
            </div>
            <div class="row well">
               <div class="col-md-6 about">
                <h3 class="text-center">Some FAQ question</h3>
               		<div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="fancy-collapse-panel">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What is Smartsheba.com ?</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                           Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How can I post a add ?
                                          </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How can I remove my add ?
                                                    </a>
                                                </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingfour">
                                        <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">How to set my profile ?
                                                    </a>
                                                </h4>
                                    </div>
                                    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingfive">
                                        <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">How can I remove my add ?
                                                    </a>
                                                </h4>
                                    </div>
                                    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingsix">
                                        <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">How can I remove my add ?
                                                    </a>
                                                </h4>
                                    </div>
                                    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingseven">
                                        <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">How can I remove my add ?
                                                    </a>
                                                </h4>
                                    </div>
                                    <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingeight">
                                        <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseeight" aria-expanded="false" aria-controls="collapseeight">How can I remove my add ?
                                                    </a>
                                                </h4>
                                    </div>
                                    <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
               <div class="col-md-1 hidden-xs hidden-sm">
               		<div class="line"></div>
               </div>
               <div class="col-md-5 ab">
                  <h1 class="text-center">About Us</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                  </p><br/><br/>
                  <h1 class="text-center">About Us</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                  </p>
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

   </body>
</html>