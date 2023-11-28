<?php
    class Update extends Config{
        function __construct()
        {
            parent::__construct();
        }
        // update user data
        function updateUserData($data){
            try {
                $sql = "UPDATE user SET user_name = ?,user_email = ?,user_pic = ?,user_pass = ?, updatedAt = NOW() WHERE user_id = ?";
                $stmt = $this->conn->prepare($sql);
                $result = $stmt->execute($data);
                return $result;
                // if ($result) {
                //     return $result;
                // }
            } catch (PDOException $e) {
                echo "<script>console.log(Error----- :".$e->getMessage().")</script>";
            }
        }

        //update category
        function updateCategory($data){
            try {
                $sql = "UPDATE category SET category_title = ?, updatedAt = NOW() WHERE category_id = ?";
                $stmt = $this->conn->prepare($sql);
                $result = $stmt->execute($data);
                return $result;
                // if ($result) {
                //     return $result;
                // }
            } catch (PDOException $e) {
                echo "<script>console.log(Error----- :".$e->getMessage().")</script>";
            }
        }

        //update posts
        function updatePostData($data){
            try {
                $sql = "UPDATE posts SET post_title = ?,post_desc = ?, post_img = ?, post_status = ?, updatedAt = NOW() WHERE post_id = ?";
                $stmt = $this->conn->prepare($sql);
                $result = $stmt->execute($data);
                return $result;
                // if ($result) {
                //     return $result;
                // }
            } catch (PDOException $e) {
                echo "<script>console.log(Error----- :".$e->getMessage().")</script>";
            }
        }
    }
?>