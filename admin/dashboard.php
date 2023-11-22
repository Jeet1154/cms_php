<?php
require "./includes/header.php";
?>
<div class="container-fluid my-3">
    <div class="row">
        <div class="col-md-4 border-end p-4">
            <div class="card mx-auto border-0 p-3" style="width: 18rem;">
                <img src="https://images.pexels.com/photos/15637510/pexels-photo-15637510/free-photo-of-illuminated-face-of-a-smiling-woman-at-night.jpeg" class="rounded card-img-top w-50 mx-auto" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">User Name</h5>
                    <p class="card-text text-center">user@gmail.com</p>
                    <a href="#" class="btn btn-danger w-100">Logout</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row p-4">
                <h1 class="txt1 color3 text-center my-4">Update Profile Information</h1>
                <div class="col">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="" placeholder="Enter Your name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="" placeholder="Enter Your Email address">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="" placeholder="Enter Old Password">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="" placeholder="Enter New Password">
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" id="" placeholder="Upload Image">
                        </div>
                        <button type="submit" class="btn btn-success">Update profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require "./includes/footer.php";
?>