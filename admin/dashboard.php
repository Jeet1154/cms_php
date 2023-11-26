<?php
require "./includes/header.php";
?>
<div class="container-fluid my-3">
    <div class="row">
        <div class="col-md-4 border-end p-4">
            <div class="card mx-auto border-0 p-3" style="width: 18rem;">
                <img src="../<?= $userData['user_pic']; ?>">
                <div class="card-body">
                    <p class="card-title text-center">User Id: <?= $userData['user_id']; ?></p>
                    <h5 class="card-title text-center"><?= $userData['user_name']; ?></h5>
                    <p class="card-text text-center"><?= $userData['user_email']; ?></p>
                    <a href="./admin-logout.php" class="btn btn-danger w-100">Logout</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row p-4">
                <h1 class="txt1 color3 text-center my-4">Update Profile Information</h1>
                <div class="col">
                    <form method="POST" enctype="multipart/form-data" autocomplete="off">
                        <div class="mb-3">
                            <input type="text" class="form-control" value="<?= $userData['user_name']?>" name="user_name" id="user_name" placeholder="Enter Your name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" value="<?= $userData['user_email']?>" name="user_email" id="user_email" placeholder="Enter Your Email address">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control"  name="user_old_pass" id="user_old_pass" placeholder="Enter Old Password">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control"  name="user_new_pass" id="user_new_pass" placeholder="Enter New Password">
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" name="user_new_img" id="user_new_img" placeholder="Upload Image">
                        </div>
                        <button type="submit" class="btn btn-success" name="user_update" id="user_update">Update profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require "./includes/footer.php";
?>