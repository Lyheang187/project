<?php 
    require_once("../inc/database.php");
    $id = $_GET["id"];
    $isDel = delUser($id);
    if($isDel){
        header("Location: http://localhost/project/?page=all_user");
    }
?>