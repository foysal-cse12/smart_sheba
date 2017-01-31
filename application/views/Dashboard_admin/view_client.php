<!doctype html>
<html lang='en'>
   <head>
      <meta charset='utf-8'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Smartsheba | User Dashboard</title>
      <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>css/dashboard.css">
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>js/script.js"></script>
      <style type="text/css">
         body{
         background: #E7EDEE;
         }
      </style>
   </head>
   <body>
      <?php include ('nav.php');?>
      <div class="container">
         <div class="row">
            <div class="add-box">
               <img class="img-responsive" src="<?php echo base_url();?>images/GP-Go-Beyond_i.jpg" alt="Add" style="margin:0 auto;">
            </div>
         </div>
         <br/>
		 
		 <div class="row back">
            <div class="col-md-6">
               <div class="pricing-plans">
                  <div class="wrap">
                     <div class="pricing-grids">
                        <div class="pricing-grid1">
                           <div class="price-value">
                              <h2><a href="<?php echo base_url();?>home/active_post">Active Post</a></h2>
                              <h5><span>Active Post Available</span></h5>
                              <div class="sale-box">
                                 <span class="on_sale title_shop"><!-- 10 Post --></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="pricing-plans">
                  <div class="wrap">
                     <div class="pricing-grids">
                        <div class="pricing-grid2">
                           <div class="price-value two">
                              <h2><a href="<?php echo base_url();?>home/pending_post">Pending Post</a></h2>
                              <h5><span>Pending Post  Available</span></h5>
                              <div class="sale-box two">
                                 <span class="on_sale title_shop"><!-- 20 Post --></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
       
         <div class="row back">
            <div class="col-md-6">
               <div class="pricing-plans">
                  <div class="wrap">
                     <div class="pricing-grids">
                        <div class="pricing-grid3">
                           <div class="price-value three">
                              <h2><a href="<?php echo base_url();?>home/active_user_all_type">Active User</a></h2>
                              <h5><span>Active User Available</span></h5>
                              <div class="sale-box three">
                                 <span class="on_sale title_shop"><!-- 550 User --></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="pricing-plans">
                  <div class="wrap">
                     <div class="pricing-grids">
                        <div class="pricing-grid1">
                           <div class="price-value four">
                              <h2><a href="<?php echo base_url();?>home/pending_user_all_type">Pending User</a></h2>
                              <h5><span>Pending User Available</span></h5>
                              <div class="sale-box four">
                                 <span class="on_sale title_shop"><!-- 20 User --></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
		 
		 
		 
         <div class="row back">
            <div class="col-md-6">
               <div class="pricing-plans">
                  <div class="wrap">
                     <div class="pricing-grids">
                        <div class="pricing-grid1">
                           <div class="price-value">
                              <h2><a href="<?php echo base_url();?>home/check_discount_admin">Check Discount</a></h2>
                              <h5><span>Discount Available</span></h5>
                              <div class="sale-box">
                                 <span class="on_sale title_shop"><!-- 1 Discount --></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="pricing-plans">
                  <div class="wrap">
                     <div class="pricing-grids">
                        <div class="pricing-grid2">
                           <div class="price-value two">
                              <h2><a href="<?php echo base_url();?>home/find_members_admin">Find Member</a></h2>
                              <h5><span>Member Available</span></h5>
                              <div class="sale-box two">
                                 <span class="on_sale title_shop"><!-- 20 Member --></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
         <div class="row back">
            <div class="col-md-6">
               <div class="pricing-plans">
                  <div class="wrap">
                     <div class="pricing-grids">
                        <div class="pricing-grid3">
                           <div class="price-value three">
                              <h2><a href="<?php echo base_url();?>home/conversation_admin">Conversation</a></h2>
                              <h5><span>Discount Available</span></h5>
                              <div class="sale-box three">
                                 <span class="on_sale title_shop"><!-- 1 Discount --></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="pricing-plans">
                  <div class="wrap">
                     <div class="pricing-grids">
                        <div class="pricing-grid1">
                           <div class="price-value four">
                              <h2><a href="<?php echo base_url();?>home/invite_members_admin">Invite Member</a></h2>
                              <h5><span>Member Available</span></h5>
                              <div class="sale-box four">
                                 <span class="on_sale title_shop"><!-- 20 Member --></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
         <div class="row">
            <div class="height">
            </div>
         </div>
         <br/>         
      </div>
      <br/>
      <?php include('footer.php');?>
   </body>
<html>

