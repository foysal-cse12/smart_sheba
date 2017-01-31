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
         .chat-box-head img{
            width: 100%;
            height: 40vw;
         }
      </style>
   </head>
   <body>
      <?php include('nav.php');?>
      <div class="container">
         <div class="row">
            <div class="add-box">
               <img class="img-responsive" src="<?php echo base_url();?>images/GP-Go-Beyond_i.jpg" alt="Add" style="margin:0 auto;">
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
            <div class="col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-lg-5 col-md-5 col-sm-5 col-xs-12">
               <div class="chat-box-div">
                  <div class="chat-box-head">
                     Conversation
                     <img src="http://1.bp.blogspot.com/_jFmMT1zJsoc/TQDjVnxoDRI/AAAAAAAAAqY/3Ws4hHY5Shs/s1600/conversation.jpg" class="img-thumbnail img-responsive">

                     <!-- <img src="http://1.bp.blogspot.com/_jFmMT1zJsoc/TQDjVnxoDRI/AAAAAAAAAqY/3Ws4hHY5Shs/s1600/conversation.jpg" class="img-thumbnail img-responsive hidden-xs"> -->
                     <!-- <div class="btn-group pull-right">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="fa fa-cogs"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="#"><span class="fa fa fa-trash"></span> Delete</a></li>
                           <li><a href="#"><span class="fa fa-eye-slash"></span> Mute</a></li>
                           <li><a href="#"><span class="fa fa-lock"></span> Busy</a></li>
                           <li class="divider"></li>
                           <li><a href="#"><span class="fa fa-circle-o-notch"></span> Logout</a></li>
                        </ul>
                     </div> -->
                  </div>
                  <div class="panel-body chat-box-main">
                     <!-- <div class="chat-box-left">
                        Hey Bro ! Let's go to roof and click some photos.<br/>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     </div>
                     <div class="chat-box-name-left">
                        <img src="../images/sp.png" alt="bootstrap Chat box user image" class="img-circle" />
                        MD.Jahangir Alam Shakil
                     </div>
                     <hr class="hr-clas" />
                     <div class="chat-box-right">
                        Yes.Why not ? It's time for a great photo shoot.Let's go.<br/>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     </div>
                     <div class="chat-box-name-right">
                        <img src="../images/pp4.jpg" alt="bootstrap Chat box user image" class="img-circle" />
                        MD.Shamim Hossain
                     </div>
                     <hr class="hr-clas" />
                     <div class="chat-box-left">
                        Hey Bro ! Where are you going ? Can I join with you ?<br/>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     </div>
                     <div class="chat-box-name-left">
                        <img src="../images/pp3.jpg" alt="bootstrap Chat box user image" class="img-circle" />
                        MD.Mahabub Alam
                     </div>
                     <hr class="hr-clas" />
                     <div class="chat-box-right">
                        Wow ! That's a great idea.It will be the best hangout.<br/>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     </div>
                     <div class="chat-box-name-right">
                        <img src="../images/pp5.jpg" alt="bootstrap Chat box user image" class="img-circle" />
                        MD.Fhad
                     </div>
                     <hr class="hr-clas" />
                     <div class="chat-box-right">
                        So why are we wating for.Let's go and do some fun and make the moment rememberable.<br/>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     </div>
                     <div class="chat-box-name-right">
                        <img src="../images/pp.jpg" alt="bootstrap Chat box user image" class="img-circle" />
                        MD.Sr Badhon
                     </div>
                     <hr class="hr-clas" />
                     <div class="chat-box-right">
                        I want to tell something. Sorry to say that I don't want to go.<br/>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     </div>
                     <div class="chat-box-name-right">
                        <img src="../images/pp7.jpg" alt="bootstrap Chat box user image" class="img-circle" />
                        Madam
                     </div>
                     <hr class="hr-clas" />
                     <div class="chat-box-right">
                        <p class="never">The program is cancel.Everybody go back to work.</p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                     </div>
                     <div class="chat-box-name-right">
                        <img src="../images/pp6.jpg" alt="bootstrap Chat box user image" class="img-circle" />
                        MD.Khalil
                     </div>
                     <hr class="hr-clas" /> -->
                  </div>



                  <!-- <div class="chat-box-footer">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Text Here...">
                        <span class="input-group-btn">
                        <button class="btn btn-info" type="button">SEND</button>
                        </span>
                     </div>
                  </div> -->



               </div>
            </div>
            <div class="col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="chat-box-online-div">
                  <div class="chat-box-online-head">
                     Friends and Members
                  </div>

                  <div class="panel-body chat-box-online">
                  {list}
                     <div class="chat-box-online-left2">
                        <img src="<?php echo base_url();?>assets/profile_images/{image}" alt="" class="img-circle" />
                        {fullname}
                        <br />
                         <small><a href="<?php echo base_url();?>home/conversation_admin_ids/{id}">send message</a></small> 
                     </div>
                     <hr class="hr-clas-low" />
                  {/list}

                  </div>
               </div>
            </div>





         </div>
         <hr class="hr-clas" />
      </div>
  
      <br/>
      <?php include('footer.php');?>
      <script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
      <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
   </body>
   <html>