<?php
class Read extends Config
{
    function __construct()
    {
        parent::__construct();
    }
    //function for login process
    function loginProcess($user_email,$user_pass)
    {
        try {
            $sql = "SELECT user_pass FROM user WHERE user_email = :user_email";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user_email',$user_email);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                $user_pass_hash = $result['user_pass'];
                if(password_verify($user_pass,$user_pass_hash)){
                    return 1;
                }else{
                    return 0;
                }
            }else{
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
            $stmt->bindParam(':user_email',$user_email);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                return $result;
            }
        } catch (PDOException $e) {
            echo "<script>console.log(Error----- :" . $e->getMessage() . ")</script>";
        }
    }
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
}
