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
                        <th>Title</th>
                        <th>Catagory</th>
                        <th>Uploaded Date</th>
                        <th>Status</th>
                        <th>Location</th>
                        <th>Contact</th>
                        <th>Website</th>
                        <th>Edit</th>
                        <th>Delete</th>
                     </thead>
                     <tbody>
                      {list}
                        <tr>
                           <!-- <td><a href="../images/pp7.jpg"><img src="<?php echo base_url();?>assets/upload_images/{pr_image}"></a></td> -->
                           <td>{info_title}</td>
                           <td>{info_category}</td>
                           <td>{date}</td>
                           <td>{status}</td>
                           <td>{info_location}</td>
                           <td>{info_mobile}</td>
                           <td>{info_website}</td>

                        
                           <td><a href="<?php echo base_url(); ?>home/edit_information_client/{id}/{client_id}" class="btn btn-primary btn-xs" >Edit</a></td>
                          
                          <!-- <td><button class="btn btn-primary btn-xs" data-title="edit" ><span class="glyphicon glyphicon-pencil"></span></button></td>-->
                           <td><button class="btn btn-danger btn-xs" data-title="Delete" onclick="location.href='/smart_sheba/home/delete_information_client/{id}/{client_id}';" ><span class="glyphicon glyphicon-trash"></span></button></td>
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