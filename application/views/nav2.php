<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
   <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header col-sm-3">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <a href="main.php"><img class="img-responsive" src="images/logo.png" alt=""/></a>
   </div>
   <!-- Collect the nav links, forms, and other content for toggling -->
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="col-sm-6" style="margin-top: 13px;">
         <div class="input-group" id="adv-search">
            <input type="text" class="form-control" placeholder="Search for.............." />
            <div class="input-group-btn">
               <div class="btn-group" role="group">
                  <div class="dropdown dropdown-lg">
                     <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                     <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <form class="form-horizontal" role="form">
                           <div class="form-group">
                              <label for="filter">Filter By</label>
                              <select class="form-control">
                                 <option value="0" selected>Select</option>
                                 <option>Information</option>
                                 <option>Member</option>
                                 <option>Shop</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <select class="form-control">
                                 <option value="0" selected>Location</option>
                                 <option>Dhaka</option>
                                 <option>Chittagong</option>
                                 <option>Sylhet</option>
                                 <option>Rangpur</option>
                                 <option>Rajshahi</option>
                                 <option>Khulna</option>
                                 <option>Barisal</option>
                                 <option>Comilla</option>
                              </select>
                           </div>
                           <div class="form-group">
                              <input class="form-control" type="text" placeholder="Search for.............." />
                           </div>
                           <center><button type="submit" class="btn btn-primary text-center"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></center>
                        </form>
                     </div>
                  </div>
                  <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
               </div>
            </div>
         </div>
      </div>
      <div class="col-sm-3 col-md-2">
         <ul class="nav navbar-nav navbar-right text-center" style="margin-top:4px;">
            <li><a href="logout.php">Sign In</a></li>
            <li><a href="">Sign Up</a></li>
         </ul>
      </div>
   </div>
   <!-- /.navbar-collapse -->
</nav>
<br /><br /><br />