<!doctype html>
<html lang='en'>
   <head>
      <meta charset='utf-8'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Smartsheba | Conversation</title>
      <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>css/dashboard.css">
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap/font-awesome.css">
      <script src="<?php echo base_url();?>js/script.js"></script>
      <style type="text/css">
         body{
          background: #E7EDEE;

         }
         

      </style>
   </head>
   <body>
      <?php include('nav.php');?>
      <div class="container">
         <div class="row">
            <div class="add-box">
               <img class="img-responsive" src="<?php echo base_url();?>images/GP-Go-Beyond_i.jpg" alt="Add">
            </div>
         </div>
         <br/>
         <div class="row back">
            <div class="wrapper">
               <div class="clip-text clip-text_one">Conversation</div>
            </div>
         </div>
      </div>


      <div class="container back">
         <div class="row pad-top pad-bottom">
            



            <div class="col-md-offset-3 col-sm-offset-3 col-md-6 col-sm-6 col-xs-12">
               <div class="chat-box-div">
                  <div class="chat-box-head">
                     CHAT HISTORY
                     
                  </div>

                  <div class="chat-box-footer">
                   <form action="/smart_sheba/home/conversation_data" method="post">
                     <div class="input-group">
                        <input type="text" class="form-control" name="msg" placeholder="Enter Text Here..." required>

                        <input type="hidden" class="form-control" name="my_id" value ="<?php echo $my_id;?>" >
                        <input type="hidden" class="form-control" name="to_id" value ="<?php echo $to_id;?>"  > 

                        <span class="input-group-btn">
                        <input class="btn btn-info" type="submit" name="submit" value="send">
                        </span>
                     </div>
                     </form>
                  </div>

                  <div class="panel-body chat-box-main">
                   <!--   <div class="chat-box-left"> -->
                        <!-- {msg}  -->

                        <?php
                            foreach($list as $msg)
                            {

                              if($msg->my_id==$my_id)
                              {
                              echo "Me: ";
                              echo "  <div class=\"chat-box-left\">";
                              echo  $msg->msg .' <br> '.$msg->time.'</div>';
                              echo  '<br>';
                              }else{
                              echo "Receiver: ";
                              echo "  <div class=\"chat-box-right\">";
                              echo  $msg->msg .' <br> '.$msg->time.'</div>';
                              echo  '<br>';

                              }

                             
                            }
                        ?>


                     <!-- </div> -->

                     <hr class="hr-clas" />
                  </div>



               </div>
            </div>

         </div>
      </div>
      <br/>
      <?php include('footer.php');?>

      <script type="text/JavaScript">
        setTimeout("location.href = '/smart_sheba/home/conversation_ids/<?php echo$to_id;?>'",20000);
      </script> 
      <script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
      <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
   </body>
   <html>