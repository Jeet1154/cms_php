<?php
session_start();

//class autoloading
spl_autoload_register(function ($className) {
    require "./admin/classes/$className.php";
});

// Process after submiting Register form
if (isset($_POST['user_register'])) {

    //store all form data in a php variable
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $user_pass = $_POST['user_pass'];
    $user_pic = $_FILES['user_pic']['name'];
    $tmp_name = $_FILES['user_pic']['tmp_name'];

    // Registration Form validation
    if (empty($user_name)) {
        echo "<script>alert('Enter User Name')</script>";
    } elseif (empty($user_email)) {
        echo "<script>alert('Enter User Email')</script>";
    } elseif (empty($user_pass)) {
        echo "<script>alert('Enter User Password')</script>";
    } elseif (empty($_FILES['user_pic']['name'])) {
        echo "<script>alert('Image is Required')</script>";
    } else {
        // Hash the password
        $user_pass = password_hash($user_pass, PASSWORD_BCRYPT);

        //making directory for image
        $dir = "admin/assets/userImg";
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
        //user image absolute path
        $targetPath = $dir . "/" . time() . "_" . $user_pic;

        //Create object for Insert Class for Register User
        $obj = new Insert();
        $result = $obj->Registration([$user_name, $user_email, $targetPath, $user_pass]);

        //If user Data upload at datavase the uload image to the directory
        if ($result) {
            move_uploaded_file($tmp_name, $targetPath);
            echo "<script>alert('Registration Successfull...')</script>";
            // header("location: http://localhost/academian/blogcms/cms_php/index.php");
        } else {
            echo "<script>alert('Registration Unsuccessfull Try again later...')</script>";
        }
    }
}

//Login Process
if (isset($_POST['user_login'])) {
    $user_email = $_POST['user_email'];
    $user_pass = $_POST['user_pass'];
    if (empty($user_email)) {
        echo "<script>alert('Plaese Enter Email Id')</script>";
    } elseif (empty($user_pass)) {
        echo "<script>alert('Plaese Enter Password')</script>";
    } else {
        $obj = new Read();
        $result = $obj->loginProcess($user_email, $user_pass);
        if ($result == 0) {
            echo "<script>alert('Plaese Enter Valid login Credential...')</script>";
        }else {
            echo "<script>alert('Correct Credential')</script>";
            session_regenerate_id(true);
            $_SESSION['user']['email'] = $user_email;
            header("location: http://localhost/academian/blogcms/cms_php/admin/dashboard.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fontawesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- custom css link -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<title>Blog-<?= $title; ?></title>
</head>

<body>
    <div class="container-fluid p-0 sticky-top">
        <nav class="navbar navbar-expand-lg bg1">
            <div class="container-fluid">
                <a class="txt1 navbar-brand" href="index.php">Daily Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="txt1 color nav-link " href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="txt1 color nav-link" href="#">Cat1</a>
                        </li>
                        <li class="nav-item">
                            <a class="txt1 color nav-link" href="#">Cat2</a>
                        </li>
                        <li class="nav-item">
                            <a class="txt1 color nav-link" href="#">Cat3</a>
                        </li>
                        <li class="nav-item">
                            <a class="txt1 color nav-link" href="#">Cat4</a>
                        </li>
                        <li class="nav-item">
                            <a class="txt1 color nav-link" href="#">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="txt1 color nav-link" href="registration.php">Registration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>