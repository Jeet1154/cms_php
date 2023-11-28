<?php
//class autoloading
spl_autoload_register(function ($class_name) {
    require "./admin/classes/$class_name.php";
});

//object of different Classes
$insertObj = new Insert();
$readObj = new Read();
$updateObj = new Update();
$deleteObj = new Delete();

//delete category
if (isset($_POST['subject']) && $_POST['subject'] === 'category-delete') {
    $result = $deleteObj->deleteCategory($_POST['cid']);
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
}

// access category data
if (isset($_POST['subject']) && $_POST['subject'] === 'category-data-access') {
    $result = $readObj->getCategoryDetails($_POST['updateCid']);
    if ($result) {
        echo json_encode($result);
    } else {
        echo 0;
    }
}

//delete post
if (isset($_POST['subject']) && $_POST['subject'] === 'post-delete') {
    $post_img_path = $readObj->postImgPath($_POST['pid']);
    $result = $deleteObj->deletePost($_POST['pid']);
    if ($result) {
        unlink($post_img_path['post_img']);
        echo 1;
    } else {
        echo 0;
    }
}

// access post data
if (isset($_POST['subject']) && $_POST['subject'] === 'post-data-access') {
    $result = $readObj->getPostDetails($_POST['updatepid']);
    if($result){
        echo json_encode($result);
    }else{
        echo 0;
    }
}
