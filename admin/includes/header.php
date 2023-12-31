<?php
$title = "Admin Panel";
session_start();

//for authentication
if (!isset($_SESSION['user'])) {
    header("location: http://localhost/academian/blogcms/cms_php/index.php");
}

//class autoloading
spl_autoload_register(function ($className) {
    require "./classes/$className.php";
});

//object of different Classes
$insertObj = new Insert();
$readObj = new Read();
$updateObj = new Update();

// access user data
$userData = $readObj->readUserData($_SESSION['user']['email']);

// access all user data
$allUserData = $readObj->readAllUserData();

//access posts data
$postsData = $readObj->readPostsData($userData['user_id']);

//access category data
$categoryData = $readObj->readCategoryData();

//update User Process
if (isset($_POST['user_update'])) {
    $user_id = $userData['user_id'];
    $update_user_name = $_POST['user_name'];
    $update_user_email = $_POST['user_email'];
    $update_user_old_pass = $_POST['user_old_pass'];
    $update_user_new_pass = password_hash($_POST['user_new_pass'], PASSWORD_BCRYPT);
    $update_user_pic = $_FILES['user_new_img']['name'];
    $tmp_name = $_FILES['user_new_img']['tmp_name'];

    if (empty($update_user_name)) {
        echo "<script>alert('Enter User Name...');</script>";
    } elseif (empty($update_user_email)) {
        echo "<script>alert('Enter User Email...');</script>";
    } elseif (empty($update_user_old_pass)) {
        echo "<script>alert('Enter Old Password...');</script>";
    } elseif (empty($update_user_new_pass)) {
        echo "<script>alert('Enter Old Password...');</script>";
    } elseif (empty($update_user_pic)) {
        echo "<script>alert('Upload Use Image...');</script>";
    } else {
        if (!password_verify($update_user_old_pass, $userData['user_pass'])) {
            echo "<script>alert('Password Not matching wrong password...');</script>";
        } else {
            $dir = "admin/assets/userImg";
            if (!file_exists('../' . $dir)) {
                mkdir($dir, 0777, true);
            }
            //user image absolute path
            $targetPath = $dir . "/" . time() . "_" . $update_user_pic;

            //Create object for Update Class for Update User
            $result = $updateObj->updateUserData([$update_user_name, $update_user_email, $targetPath, $update_user_new_pass, $user_id]);
            // If user Data upload at database the upload image to the directory
            if ($result) {
                unlink("../" . $userData['user_pic']);
                move_uploaded_file($tmp_name, '../' . $targetPath);
                echo "<script>
                alert('Update Profile Successful, please login again...');
                window.location.href = 'http://localhost/academian/blogcms/cms_php/admin/admin-logout.php';
              </script>";
                exit();
            } else {
                echo "<script>alert('Registration Unsuccessfull Try again later...')</script>";
            }
        }
    }
}

//add category
if (isset($_POST['add_category_btn'])) {
    $category_title = $_POST['category_title'];
    if (empty($category_title)) {
        echo "<script>alert('Please Enter Category title...');</script>";
    } else {
        $result = $insertObj->addCategory($category_title);
        if ($result) {
            echo "<script>
            alert('Category Added Successfully...');
            window.location.href = 'http://localhost/academian/blogcms/cms_php/admin/post-category.php';
            </script>";
            exit();
        } else {
            echo "<script>alert('Something Went Wrong Category doesn't added Try again later...');</script>";
        }
    }
}

// update category
if (isset($_POST['update_category'])) {
    $update_category_title = $_POST['update_category_title'];
    $result = $updateObj->updateCategory([$_POST['update_category_title'], $_POST['update_category_id']]);
    if ($result) {
        echo "<script>
                alert('Update Category Successful');
                window.location.href = 'http://localhost/academian/blogcms/cms_php/admin/post-category.php';
              </script>";
    } else {
        echo "<script>alert('Update Category Unsuccessfull Try again later...')</script>";
    }
}

// add post
if (isset($_POST['add_post'])) {
    //store all form data in a php variable
    $post_category = $_POST['post_category'];
    $post_title = $_POST['post_title'];
    $post_descrption = $_POST['post_descrption'];
    $post_img = $_FILES['post_img']['name'];
    $tmp_name = $_FILES['post_img']['tmp_name'];
    $post_status = $_POST['post_status'];

    // Registration Form validation
    if (empty($post_category)) {
        echo "<script>alert('Select post category')</script>";
    } elseif (empty($post_title)) {
        echo "<script>alert('Enter post title')</script>";
    } elseif (empty($post_descrption)) {
        echo "<script>alert('Enter post description')</script>";
    } elseif (empty($post_img)) {
        echo "<script>alert('Post Image is Required')</script>";
    } elseif (empty($post_status)) {
        echo "<script>alert('Post status is Required')</script>";
    } else {
        //making directory for post image
        $dir = "assets/postImg";
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
        //user image absolute path
        $postImgPath = $dir . "/" . time() . "_" . $post_img;
        $targetPath = "admin/$postImgPath";

        //Create object for Insert Class for Register User
        $obj = new Insert();
        $result = $obj->addPost([$post_title, $post_descrption, $targetPath, $post_status, $post_category, $userData['user_id']]);

        //If user Data upload at database then upload image to the directory
        if ($result) {
            move_uploaded_file($tmp_name, $postImgPath);
            echo "<script>
                alert('Post aded Successfull...');
                window.location.href = 'http://localhost/academian/blogcms/cms_php/admin/admin-posts.php';
            </script>";
        } else {
            echo "<script>alert('Post added Unsuccessfull Try again later...')</script>";
        }
    }
}

//update post
if (isset($_POST['update_post_btn'])) {
    $update_post_id = $_POST['update_post_id'];
    $update_post_category = $_POST['update_post_category'];
    $update_post_title = $_POST['update_post_title'];
    $update_post_desc = $_POST['update_post_desc'];
    $update_post_status = $_POST['update_post_status'];
    $update_post_img = $_FILES['update_post_img']['name'];
    $tmp_name = $_FILES['update_post_img']['tmp_name'];


    if (empty($update_post_title)) {
        echo "<script>alert('Please Enter Post Title...');</script>";
    } elseif (empty($update_post_desc)) {
        echo "<script>alert('Please Enter Post Description...');</script>";
    } elseif (empty($update_post_status)) {
        echo "<script>alert('Please Add Post Status...');</script>";
    } elseif (empty($update_post_img)) {
        echo "<script>alert('Upload Post Image...');</script>";
    } else {
        $dir = "assets/postImg";
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
        //user image absolute path
        $postImgPath = $dir . "/" . time() . "_" . $update_post_img;
        $targetPath = "admin/$postImgPath";

        $deletePostImgPath = $readObj->postImgPath($update_post_id);

        //Create object for Update Class for Update User
        $result = $updateObj->updatePostData([$update_post_title, $update_post_desc, $targetPath, $update_post_status, $update_post_id]);

        // If user Data upload at database the upload image to the directory
        if ($result) {
            unlink("../" . $deletePostImgPath['post_img']);
            move_uploaded_file($tmp_name, $postImgPath);
            echo "<script>
                alert('Update Post Successful...');
                window.location.href = 'http://localhost/academian/blogcms/cms_php/admin/admin-posts.php';
              </script>";
            exit();
        } else {
            echo "<script>alert('Post Update Unsuccessfull Try again later...')</script>";
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
    <link rel="stylesheet" href="../css/style.css">
</head>
<title>Blog-<?= $title; ?></title>
</head>

<body>
    <div class="container-fluid p-0 sticky-top">
        <nav class="navbar navbar-expand-lg bg1">
            <div class="container-fluid">
                <a class="txt1 navbar-brand" href="dashboard.php">Admin Name</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item btn btn-sm btn-outline-info m-1">
                            <a class="txt1 color nav-link " href="admin-posts.php">Posts</a>
                        </li>
                        <li class="nav-item btn btn-sm btn-outline-primary  m-1">
                            <a class="txt1 color nav-link" href="post-category.php">Categories</a>
                        </li>
                        <li class="nav-item btn btn-sm btn-outline-success m-1">
                            <a class="txt1 color nav-link" href="comments.php">Comments</a>
                        </li>
                        <li class="nav-item btn btn-sm btn-outline-danger m-1">
                            <a class="txt1 color nav-link" href="users.php">Users</a>
                        </li>
                        <li class="nav-item btn btn-sm btn-outline-warning m-1">
                            <a class="txt1 color nav-link" href="dashboard.php">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>