<?php
$title = "Home";
require "./include/header.php";
?>
<div class="container">
  <div class="row justify-content-evenly">
    <?php
    ?>
    <div class="main-content col-md-8 my-3 border border-start-0 border-top-0">
      <div class="row justify-content-center">
        <h1 class="text-center txt1 color2 my-3">User Registration</h1>
        <div class="col-md-6">
        <form class="mt-3">
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Enter Name">
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Enter Email">
          </div>
          <div class="mb-3">
            <input type="file" class="form-control" placeholder="Upload Photo">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" placeholder="Enter Password">
          </div>
          <button type="submit" class="btn btn-success w-100">Register</button>
        </form>
        </div>
      </div>
    </div>
    <?php
    require "./include/side-bar.php";
    ?>
  </div>
</div>
<?
require "./include/footer.php";
?>