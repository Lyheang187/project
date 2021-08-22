<?php 
    require_once("../inc/database.php");
    $id = $_GET["id"];
    $isDel = delProduct($id);
    if($isDel){
        header("Location: http://localhost/project/?page=all_product");
    }
?>