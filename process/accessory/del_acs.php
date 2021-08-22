<?php 
    require_once("../../inc/database.php");
    $acs_id = $_GET["id"];
    $isDelete = delAcs($acs_id);
    if($isDelete){
        header("Location: http://localhost/project/?page=accessory");
    }
?>