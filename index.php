<?php
$title = "Home";
require "./include/header.php";
?>
<div class="container">
    <div class="row justify-content-evenly">
      <?php
        require "./include/main-content.php";
        require "./include/side-bar.php";
      ?>        
    </div>
</div>
<?php
require "./include/footer.php";
?>