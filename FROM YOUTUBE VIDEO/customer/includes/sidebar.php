<div class="panel panel-default sidebar-menu">
  <div class="panel-heading"><!--Panel heading start-->
    <center>
      <img src="customer_images/customerimage.png" class="img-responsive" />
    </center>
    <br />
    <h3 align="center" class="panel-title">Name: Tech Titans</h3>
  </div><!--Panel heading end-->
  <div class="panel-body">
    <ul class="nav nav-pills nav-stacked">
      <li class="<?php if(isset($_GET[my_order])){echo "active";}?> ">
        <a href="my_account.php?my_order"><i class="fa fa-list"></i>My Order</a> <!--using get to catch the variable coming from url-->
      </li>
      <li class="<?php if(isset($_GET[pay_offline])){echo "active";}?>">
        <a href="my_account.php?pay_offline">Pay Offline<i class="fa fa-bolt"></i></a>
      </li>
      <li class="<?php if(isset($_GET[my_address])){echo "active";}?>">
        <a href="my_account.php?my_address">My Address<i class="fa fa-user"></i></a>
      </li>
      <li class="<?php if(isset($_GET[edit_account])){echo "active";}?>">
        <a href="my_account.php?edit_account">Edit Account<i class="fa fa-pencil"></i></a>
      </li>
      <li class="<?php if(isset($_GET[change_password])){echo "active";}?>">
        <a href="my_account.php?change_password">Change Password<i class="fa fa-user"></i></a>
      </li>
      <li class="<?php if(isset($_GET[delete_account])){echo "active";}?>">
        <a href="my_account.php?delete_account">Delete Account<i class="fa fa-trace-o"></i></a>
      </li>
      <li class="<?php if(isset($_GET[logout])){echo "active";}?>">
        <a href="my_account.php?logout">Logout<i class="fa fa-sign-out"></i></a>
      </li>
    </ul>
  </div>
</div>
