<?php 
    require_once("../../inc/database.php");
    $soft_id = $_GET["id"];
    $isDelete = delSoft($soft_id);
    if($isDelete){
        header("Location: http://localhost/project/?page=software");
    }
?>