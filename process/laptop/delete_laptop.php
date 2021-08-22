<?php 
    require_once("../../inc/database.php");
    $laptop_id = $_GET["id"];
    $isDelete = delLaptop($laptop_id);
    if($isDelete){
        header("Location: http://localhost/project/?page=laptop");
    }
?>