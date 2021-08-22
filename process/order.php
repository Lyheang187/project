<?php
    include_once("../inc/database.php");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $isCreate = buy($_POST);
        print_r($_POST);
        if($isCreate){
            header("Location: http://localhost/project/?page=home");
        }else{
            print_r("Oop!");
        }
    }
?>