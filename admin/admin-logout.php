<?php
    session_start();
    session_destroy();
    header("location: http://localhost/academian/blogcms/cms_php/index.php");
?>