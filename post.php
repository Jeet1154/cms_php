<?php
$title = "Home";
require "./include/header.php";
?>
<div class="container">
  <div class="row justify-content-evenly">
    <?php
    ?>
    <div class="main-content col-md-8 my-3 border border-start-0 border-top-0">
      <div class="row p-1">
        <div class="col-12 my-1 p-3 border-top">
          <h4 class="txt1 color2 m-0"> Lorem ipsum dolor sit amet consectetur. </h4>
          <p class="txt1 color2 m-0 fontsize2">By Jeet Sil</p>
          <p class="txt1 color2 m-0 fontsize1">26-07-1999</p>
          <div class="img container w-100 p-0 my-1" style="height: 200px;">
            <img class="w-100" style="height: 100%;" src="https://www.thoughtco.com/thmb/094YF3bQBiuV_13n92GFQZWkM7k=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/JavaScript-58acbb8a3df78c345bad32c2.jpg" alt="">
          </div>
          <p class="text-secondary fontsize1"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda et ipsum quidem tempore porro nesciunt deserunt libero, dolores illum soluta. Aperiam magni, magnam consequuntur recusandae iusto neque eius cumque illo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis odit quae quisquam culpa. Cumque ut vitae, asperiores animi repellat, tempora eligendi nihil autem iure quidem provident possimus illum repudiandae temporibus at? Magni facere distinctio molestias rem maiores eos vitae, odit id reiciendis pariatur ea facilis a! Quos ea eius temporibus cumque praesentium, error dolor consectetur, quod maiores, laudantium optio quaerat atque blanditiis id explicabo at dolorum quia. Eos, ducimus sit nemo similique inventore error asperiores, ex cumque expedita ipsa, illo voluptatem officiis. Ex quasi, magni deleniti necessitatibus excepturi similique ipsum praesentium commodi, veniam unde deserunt reiciendis at laudantium. Explicabo molestias expedita laborum mollitia vitae in ex saepe nostrum sequi possimus, neque tempore, beatae omnis consectetur enim suscipit deleniti fugit pariatur. Eum, quibusdam? Ullam praesentium explicabo optio blanditiis possimus doloremque similique cum accusamus, libero incidunt ab reiciendis veniam fugiat beatae, consequatur dolorem officia porro quibusdam ad officiis tempora quasi! Corporis, minus? </p>
        </div>
      </div>
      <div class="row border-top">
        <h2 class="txt1 color2 my-2">Write A comment</h2>
        <form>
          <div class="mb-3">
            <input type="email" class="form-control">
          </div>
          <div class="mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" style="height: 100px"></textarea>
          </div>
          <button type="submit" class="btn btn-info my-2">Add Comment</button>
        </form>
      </div>
      <div class="row border-top ">
        <h2 class="txt1 color2 my-2">All Comments</h2>
        <div class="col-12 border border-start-0 border-end-0 my-2 p-2">
          <h5 class="txt1 color3">User Name</h5>
          <p class="txt1 fontsize2 text-secondary">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus quis rerum voluptas quia totam autem ea animi illo nulla aliquid.</p>
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