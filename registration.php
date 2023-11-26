<?php
$title = "Registration";
require "./include/header.php";
?>
<div class="container">
  <div class="row justify-content-evenly">
    <?php
    ?>
    <div class="main-content col-md-8 my-3 ">
      <div class="row justify-content-center">
        <h1 class="text-center txt1 color2 my-3">User Registration</h1>
        <div class="col-md-6">
          <form class="mt-3" action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Enter Name">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Enter Email">
            </div>
            <div class="mb-3">
              <input type="file" class="form-control" name="user_pic" id="user_pic" placeholder="Upload Photo">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="user_pass" id="user_pass" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-success w-100" name="user_register" id="user_register">Register</button>
          </form>
        </div>
      </div>
    </div>
    <?php
    // require "./include/side-bar.php";
    ?>
  </div>
</div>
<?
require "./include/footer.php";
?>