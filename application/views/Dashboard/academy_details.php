<!doctype html>
<html lang='en'>
   <head>
      <meta charset='utf-8'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Smartsheba | Active User</title>
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
      <br/><br/><br/><br/>
         <div class="container">
         <div class="row"> 
               <div class="col-md-4 col-sm-4">        
                  
               </div>

               <div class="col-md-5 col-sm-5">
                  <table class="table table-user-information">
                     <tbody>
                        <tr>
                           <td>Name:</td>
                           <td>{academy_name}</td>
                        </tr>

                        <tr>
                           <td>Details:</td>
                           <td>{academy_details}</td>
                        </tr>
                      

                     </tbody>
                  </table>
               </div>
            </div>
       </div>
      <br/>
      <?php include('footer.php');?>
   </body>
<html>