<div class="container-fluid">
   <div class="row background">
      <div class="col-md-5 text-center logo">
         <a href="<?php echo base_url();?>home/index"><img class="col-md-6 " src="<?php echo base_url(); ?>images/logo.png" alt=""></a>
      </div>
      <div class="col-md-7">
         <div id='cssmenu'>
            <ul class="text-center">
               <li class='active'>
                  <a href='#'>Shop</a>
                  <ul>
                     <li class="text-center"><a href="<?php echo base_url();?>home/add_product_admin">Add Product</a> </li>
                     <li class="text-center"><a href='<?php echo base_url();?>home/upload_product_history_admin'>Uploaded Product</a> </li>
                  </ul>
               </li>
               <li class='active'>
                  <a href='#'>Information</a>
                  <ul>
                     <li class="text-center"><a href='<?php echo base_url();?>home/add_information_admin'>Add Information</a> </li>
                     <li class="text-center"><a href='<?php echo base_url();?>home/upload_information_history_admin'>Uploaded Information</a> </li>
                  </ul>
               </li>

               <li class='active'>
                  <a href='#'>Academy</a>
                  <ul>
                     <li class="text-center"><a href='<?php echo base_url();?>home/create_academy_admin'>Create New Academy</a> </li>
                     <li class="text-center"><a href='<?php echo base_url();?>home/academy_list_admin'>Academy List</a> </li>
                      <li class="text-center"><a href='<?php echo base_url();?>home/academy_member_admin'>Academy Member List</a> </li>
                  </ul>
               </li>


               <li class='active'>
                  <a href='#'>Member</a>
                  <ul>
                     <li class="text-center"><a href='/smart_sheba/home/friend_request_admin'>Friend Request</a> </li>
                     <li class="text-center"><a href='/smart_sheba/home/friend_list_admin'>Friend List</a> </li>
                     <li class="text-center"><a href='/smart_sheba/home/find_members_admin'>Find Friend</a> </li>
                  </ul>
               </li>
               <li class='active'>
                  <a href='#'><img src="http://findicons.com/files/icons/61/dragon_soft/128/user.png" width="20px" height="20px">User</a>
                  <ul>
                     <li class="text-center"><a href="<?php echo base_url();?>home/admin">  Dashboard</a></li>
                     <li class="text-center"><a href='<?php echo base_url();?>home/profile_client_admin'>Account</a> </li>
                     <li class="text-center"><a href='<?php echo base_url();?>home/logout'>Logout</a> </li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
   </div>
</div>
<br/>