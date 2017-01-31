<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <![endif]-->
      <title>Smartsheba | User Profile</title>
      <!-- BOOTSTRAP CORE STYLE  -->
      <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">

      <!-- FONT AWESOME ICONS  -->
      <link href="../css/bootstrap/css/font-awesome.css" rel="stylesheet" />
      <!-- CUSTOM STYLE  -->
      <link rel="stylesheet" href="../css/dashboard.css">
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <script src="../js/script.js"></script>
      <style type="text/css">
         body{
         background: #E7EDEE;
         }
         .back h3{
          font-size: 25px;
          color: #1C96D5;
          font-family: Verdana;
         }
         .back p{
          font-size: 15px;
          color: #000;
          font-family: Verdana;
          text-align: justify;
         }
         .back a{
          font-family: Verdana;
          text-align: justify;
          font-size: 15px;
         }
         .title{
            text-align: center;
            font-weight: normal;
            font-family: Verdana;
            font-size: 25px;
         }
      </style>
   </head>
   <body>
   <?php include ('nav.php');?>
      <!-- HEADER SECTION-->
      
      <!-- HEADER END-->
      <!-- MENU SECTION -->
    <!--   <div class="container">
       <div class="row">
          <div class="add-box">
             <img class="img-responsive" src="../images/GP-Go-Beyond_i.jpg" alt="Add">
          </div>
       </div>
       <br/>
    </div> -->
    <br><br><br><br><br><br><br><br><br><br>
      <div class="container">
         <div class="row back well">
            <h3 class="text-center">Warning!</h3>
            <br/>
            <p class="text-center title">You are not authorized to view this page</p><br/>
            <a href="<?php echo base_url();?>home/index" class="btn btn-info pull-right">Go to Home</a>
         </div>
         <br/>
      </div><br><br><br><br>

      <!-- FOOTER SECTION -->
     <!--  <?php include('footer.php');?> -->
      <!-- FOOTER SECTION END-->
      
      <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
      <!-- CORE JQUERY SCRIPTS -->
      <script src="../js/jquery-2.1.4.min.js"></script>
      <!-- BOOTSTRAP SCRIPTS  -->
      <script src="../css/bootstrap/js/bootstrap.js"></script>
   </body>
</html>