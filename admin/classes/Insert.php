<?php
class Insert extends Config
{
    function __construct()
    {
        parent::__construct();
    }
    function Registration($data)
    {
        try {
            $sql = "INSERT INTO user (user_name,user_email,user_pic,user_pass) VALUES (?,?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($data);
            if ($result) {
                return $result;
            }
        } catch (PDOException $e) {
            echo "<script>console.log(Error----- :".$e->getMessage().")</script>";
        }
    }
    //add category
    function addCategory($category_title)
    {
        try {
            $sql = "INSERT INTO category (category_title) VALUES (:category_title)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':category_title',$category_title);
            $result = $stmt->execute();
            if ($result) {
                return $result;
            }
        } catch (PDOException $e) {
            echo "<script>console.log(Error----- :".$e->getMessage().")</script>";
        }
    }
}
