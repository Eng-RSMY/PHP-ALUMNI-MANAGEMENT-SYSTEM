<?php 
    require "function/dbconfig.php";
  require_once "function/adminfunction.php";
  $user = new admin();
 ?>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
<link rel="icon"   href="images/alumni_logo.jpg">
<div class="" style="background-color: #F0F8FF;padding: 4%;margin-top: 12%;width: 28%;margin-left: 35%;border-radius: 10%;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);">
  <img src="images/user1.jpg" style="width: 340px;height: 30%;margin-left:5px;">
        <form action="" method="post" style="padding: 4%;">
          <?php 

         ?>
            <div class="form-group">
              <label for="name">User name:</label>
              <input type="text" name="username" placeholder="Enter your name"  class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" name="password" placeholder="Enter your password" class="form-control" id="pwd">
            </div>
            <div class="checkbox">
              <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit"  class="btn btn-info" style="width: 100%">Submit</button>
      </form>
</div>
 <?php 
      
      include "template/header_top.php";
    ?>
<?php
  
    include "template/footer.php";

?>