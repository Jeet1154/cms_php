<?php
class Read extends Config
{
    function __construct()
    {
        parent::__construct();
    }
    //function for login process
    function loginProcess($user_email, $user_pass)
    {
        try {
            $sql = "SELECT user_pass FROM user WHERE user_email = :user_email";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user_email', $user_email);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                $user_pass_hash = $result['user_pass'];
                if (password_verify($user_pass, $user_pass_hash)) {
                    return 1;
                } else {
                    return 0;
                }
            } else {
                return 0;
            }
        } catch (PDOException $e) {
            echo "<script>console.log(Error----- :" . $e->getMessage() . ")</script>";
        }
    }

    //function For Get User Data
    function readUserData($user_email)
    {
        try {
            $sql = "SELECT user_id,user_name,user_email,user_pic,user_pass FROM user WHERE user_email = :user_email";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user_email', $user_email);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                return $result;
            }
        } catch (PDOException $e) {
            echo "<script>console.log(Error----- :" . $e->getMessage() . ")</script>";
        }
    }
    //function For Get All User Data
    function readAllUserData()
    {
        try {
            $sql = "SELECT user_id,user_name,user_email,user_pic,createdAt,updatedAt FROM user";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                return $result;
            }
        } catch (PDOException $e) {
            echo "<script>console.log(Error----- :" . $e->getMessage() . ")</script>";
        }
    }

    //read all category data
    function readCategoryData()
    {
        try {
            $sql = "SELECT * FROM category";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                return $result;
            }
        } catch (PDOException $e) {
            echo "<script>console.log(Error----- :" . $e->getMessage() . ")</script>";
        }
    }

    //read all posts data
    function readPostsData($user_id)
    {
        try {
            $sql = "SELECT p.post_id, p.post_title, p.post_desc, p.post_img, p.post_status, c.category_title, p.createdAt, p.updatedAt FROM posts as p JOIN category as c ON p.category_id = c.category_id WHERE user_id = :user_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($result) {
                return $result;
            }
        } catch (PDOException $e) {
            echo "<script>console.log(Error----- :" . $e->getMessage() . ")</script>";
        }
    }

    // get a specific category data
    function getCategoryDetails($category_id)
    {
        try {
            $sql = "SELECT * FROM category WHERE category_id = :category_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':category_id', $category_id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                return $result;
            }
        } catch (PDOException $e) {
            echo "<script>console.log(Error----- :" . $e->getMessage() . ")</script>";
        }
    }

    //read post image path
    function postImgPath($post_id)
    {
        try {
            $sql = "SELECT post_img FROM posts WHERE post_id = :post_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':post_id', $post_id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                return $result;
            }
        } catch (PDOException $e) {
            echo "<script>console.log(Error----- :" . $e->getMessage() . ")</script>";
        }
    }

    // get a specific category data
    function getPostDetails($post_id)
    {;
        try {
            $sql = "SELECT * FROM posts as p JOIN category as c ON p.category_id = c.category_id  WHERE p.post_id = :post_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':post_id', $post_id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                return $result;
            }
        } catch (PDOException $e) {
            echo "<script>console.log(Error----- :" . $e->getMessage() . ")</script>";
        }
    }
}
