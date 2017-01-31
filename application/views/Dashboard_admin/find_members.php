<!doctype html>
<html lang='en'>
   <head>
      <meta charset='utf-8'>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Smartsheba | Find Members</title>
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
      <?php include('nav.php');?>
      <div class="container">
        <div class="row back">
                <div class="wrapper">
                   <div class="clip-text clip-text_one">Members</div>
                </div>
                {list}
                <div class="col-md-offset-2 col-md-8">
                  <div class="panel panel-info">
                      <div class="panel-body">
                        <div class="col-md-3 col-xs-4 profile">
                          <img class="img-responsive" src="<?php echo base_url();?>assets/profile_images/{image}">
                        </div>
                        <div class="col-md-5 col-xs-8 details">
                          <p>Name :{fullname}</p>
                          <p>Work Place :{work_history}</p>
                          <p>Address :{address}</p>
                        </div>
                          <div class="col-md-4 col-xs-12 action text-center">
                            <a href="<?php echo base_url();?>home/view_profile_admin/{id}" class="btn btn-info btn-sm ">View Profile</a>
                            <a href="<?php echo base_url();?>home/send_friend_request_admin/{id}" class="btn btn-info btn-sm">Add Friend</a>
                          </div>
                  </div>
                </div>
              </div>
              {/list}

            <div class="col-sm-12 text-center">
              <nav>
              <ul class="pagination">
                <?php echo "$links"; ?>
              </ul>
            </nav>
        </div>

          </div>
      </div>
      <br/>
      <?php include('footer.php');?>
   </body>
<html>