<?php
class Delete extends Config
{
    function __construct()
    {
        parent::__construct();
    }
    // delete Category
    function deleteCategory($cid)
    {
        try {
            $sql = "DELETE FROM category WHERE category_id = :cid";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':cid', $cid);
            $result = $stmt->execute();
            if ($result) {
                return 1;
            }
        } catch (PDOException $e) {
            echo "<script>console.log(Error----- :" . $e->getMessage() . ")</script>";
        }
    }
    // delete post
    function deletePost($pid)
    {
        try {
            $sql = "DELETE FROM posts WHERE post_id = :pid";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':pid', $pid);
            $result = $stmt->execute();
            if ($result) {
                return 1;
            }
        } catch (PDOException $e) {
            echo "<script>console.log(Error----- :" . $e->getMessage() . ")</script>";
        }
    }
}
