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
      <div class="container">
         <div class="row">
            <div class="add-box">
               <img class="img-responsive" src="<?php echo base_url();?>images/GP-Go-Beyond_i.jpg" alt="Add" style="margin:0 auto;">
            </div>
         </div>
         <br/>
         <div class="row back">
            <div class="table-responsive">
                  <table id="mytable" class="table table-bordred table-striped active_post">       
                     <thead>
                        <!-- <th>Photo</th> -->
                        <th>Member Image</th>
                        <th>Member Name</th>
                        <th>Member Details</th>
                        <th>Edit</th>
                        <th>Delete</th>
                     </thead>
                     <tbody>
                      {list}
                        <tr>
                           <td><a href="<?php echo base_url();?>assets/academy_member_images/{member_image}"><img src="<?php echo base_url();?>assets/academy_member_images/{member_image}"></a></td>
                           <td>{member_name}</td>

                           <td><a href="<?php echo base_url(); ?>home/member_details/{id}" class="btn btn-primary btn-xs" >Details</a></td>

                           <td><a href="<?php echo base_url(); ?>home/edit_academy_member/{id}" class="btn btn-primary btn-xs" >Edit</a></td>
                          
                           <td><button class="btn btn-danger btn-xs" data-title="Delete" onclick="location.href='/smart_sheba/home/delete_academy_member/{id}';" ><span class="glyphicon glyphicon-trash"></span></button></td>
                        </tr>
                      {/list}
                     </tbody> 
                  </table>
                  <div class="clearfix"></div> 

                  <div class="col-sm-12 text-center">
                                        <nav>
                                          <ul class="pagination">
                                             <?php echo "$links"; ?>
                                          </ul>
                                       </nav>
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