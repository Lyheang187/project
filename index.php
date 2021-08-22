<?php include_once("partial/header.php") ?>
<?php include_once("partial/navbar.php") ?>
<?php

    if(isset($_GET["page"])){
        if($_GET["page"]=="all_user"){
            include_once("process/all_user.php");
        }elseif($_GET["page"]=="all_product"){
            include_once("process/all_product.php");
        }elseif($_GET["page"]=="laptop"){
            include_once("pages/laptop.php");
        }elseif($_GET["page"]=="accessory"){
            include_once("pages/accessory.php");
        }elseif($_GET["page"]=="software"){
            include_once("pages/software.php");
        }elseif($_GET["page"]=="home"){
            include_once("pages/home.php");
        }
        elseif($_GET["page"]=="login_ui"){
            include_once("process/login_ui.php");
        }elseif($_GET["page"]=="order"){
            include_once("process/order_ui.php");
        }elseif($_GET["page"]=="register_ui"){
            include_once("process/register_ui.php");
        }else{
            include_once("pages/error.php");
        }
    }else{
        include_once("pages/home.php");
    }
?>