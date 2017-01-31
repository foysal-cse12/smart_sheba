<!doctype html>
<html lang='en'>
   <head>
      <meta charset='utf-8'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Smartsheba | Find Members</title>
      <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo base_url();?>css/dashboard.css">
      <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap/font-awesome.css">
      <script src="<?php echo base_url();?>js/script.js"></script>
      <style type="text/css">
         body{
          background: #E7EDEE;
         }
        form {
          width: 100%;
        }
        .input {
          display: flex;
          align-items: center;
          margin-bottom: 60px;
        }
        .button {
          height: 44px;
          border: none;
        }

        #email {
          width: 75%;
          background: #FDFCFB;
          font-family: inherit;
          color: #000;
          letter-spacing: 1px;
          text-indent: 5%;
          font-family: Verdana;
        }


        #submit {
          width: 20%;
          height: 46px;
          background: #31B0D5;
          font-family: inherit;
          font-weight: bold;
          color: inherit;
          letter-spacing: 1px;
          border-radius: 0 5px 5px 0;
          cursor: pointer;
          transition: background .3s ease-in-out;
          font-family: Verdana;
        }
        #submit:hover {
          background: #31B0D5;
        }
        input:focus {
          outline: none;
          outline: 2px solid #31B0D5;
          box-shadow: 0 0 2px #31B0D5;
        }

      </style>
   </head>
   <body>
      <?php include('nav.php');?>
      <div class="container">
         <div class="row">
            <div class="add-box">
               <img class="img-responsive" src="../images/GP-Go-Beyond_i.jpg" alt="Add">
            </div>
         </div>
         <br/>
         <div class="row back">
            <div class="wrapper">
               <div class="clip-text clip-text_one">Invite Member</div>
            </div>
            <div class="col-md-12 invite">
              <form class="col-md-offset-2 col-md-10" action="/smart_sheba/home/invite_client" method="post"> 
                <div class="input">
                  <input type="email" class="button" id="email" name="email" placeholder="Name@example.com" style="border:1px solid #31B0D5;">
                  <input type="submit" class="button" id="submit" name="submit" value="Invite">
                </div>
              </form>
            </div>
         </div>
      </div>
      <br/>
      <?php include('footer.php');?>
      <script src="<?php echo base_url();?>js/jquery-2.1.4.min.js"></script>
      <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
   </body>
   <html>