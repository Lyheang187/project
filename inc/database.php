<?php
    // -------------------------------------//
    // -----------|| DATABASE ||-----------//
    function getDatabase(){
        return new mysqli("localhost", "root", "", "h_store");
    }


    // -------------------------------------//
    // -----------|| PRODUCT ||-----------//
    function getProduct(){
        return getDatabase()->query("SELECT * FROM product INNER JOIN brand USING(brand_ID) INNER JOIN category USING(category_ID) ORDER BY release_date DESC");
    }
    function detial($id){
        return getDatabase()->query("SELECT * FROM product WHERE product_ID = $id");
    }
    function delProduct($id){
        return getDatabase()->query("DELETE FROM product WHERE product_ID = $id");
    }
    function fourLaptop(){
        return getDatabase()->query("SELECT * FROM product WHERE category_ID = '1' LIMIT 4");
    }


    // --------------------------------//
    // -----------|| USER ||-----------//
    function createUser($value){
        $username = $value["username"];
        $password = $value["cfpassword"];
        $phone = $value["phone"];
        $email = $value["email"];
        $address = $value["address"];
        $profile = $value["profile"];
        $role = "Customer";
        $isCanAdd = true;
        $getUser = getDatabase()->query("SELECT * FROM user");
        foreach($getUser as $user){
            if($user['email'] == $email or $user["username"] == $username){
                $isCanAdd = false;
            }
        }
        if($isCanAdd){
            return getDatabase()->query("INSERT INTO user (username,password,phone,email,address,profile,role) 
            Values('$username','$password','$phone','$email','$address','$profile','$role')");
        }else{
            return $isCanAdd;
        }
    }
    function login($value){
        $username = $value["username"];
        $email = $value["email"];
        $password = $value["password"];
        $canLogin = false;
        $getUser = getDatabase()->query("SELECT * FROM user");
        foreach($getUser as $user){
            if($user["email"]==$email and  $user["password"]==$password and $user["username"]==$username){
                $canLogin = true;
            }
        }return $canLogin;

    }
    function getUser(){
        return getDatabase()->query("SELECT * FROM user WHERE role='Customer'");
    }
    function delUser($id){
        return getDatabase()->query("DELETE FROM user WHERE user_ID = $id");
    }



    // --------------------------------//
    // -----------|| ORDER ||-----------//
    function buy($value){
        $product_id = $value["product_id"];
        $customer = $value["customer"];
        return getDatabase()->query("INSERT INTO orders(product_ID, customer) VALUES('$product_id', '$customer')");
    }
    function getOrder(){
        return getDatabase()->query("SELECT * FROM orders INNER JOIN product USING(product_ID) ORDER BY date DESC");
    }


    // -----------------------------------//
    // -----------|| LAPTOP ||-----------//
    function getLaptop(){
        return getDatabase()->query("SELECT * FROM product WHERE category_ID = '1' ORDER BY release_date DESC");
    }
    function searchLaptop($value){
        $name = $value["searchLaptop"];
        return getDatabase()->query("SELECT * FROM product WHERE category_ID = '1' AND product_Name LIKE '%$name%'");
    }
    function createLaptop($value){
        $productName = $value["product"];
        $brand = $value["brand"];
        $category = 1;
        $condition = $value["condition"];
        $desc = $value["desc"];
        // DATE
        date_default_timezone_set("Asia/Bangkok");
        $date = date("d-m-Y g:i A");

        $image = $_FILES["image"]["name"];
        $year = $value["year"];
        $price = $value["price"];
        return getDatabase()->query("INSERT INTO product
        (product_Name, brand_ID, category_ID, conditions, description, release_date, image, year, price) 
        VALUES('$productName', '$brand', '$category', '$condition','$desc', '$date', '$image', '$year', '$price')");
    }
    function delLaptop($laptop_id){
        return getDatabase()->query("DELETE FROM product WHERE product_ID = $laptop_id");
    }
    function getOneLaptop($id){
        return getDatabase()->query("SELECT * FROM product WHERE product_ID = $id");
    }
    function editLaptop($value){
        $id = $value["laptop_id"];
        $productName = $value["product"];
        $brand = $value["brand"];
        $condition = $value["condition"];
        $desc = $value["desc"];
        // DATE
        date_default_timezone_set("Asia/Bangkok");
        $date = date("d-m-Y g:i A");

        $year = $value["year"];
        $price = $value["price"];
        return getDatabase()->query("UPDATE product SET product_Name='$productName', brand_ID='$brand',
        conditions='$condition', description='$desc', release_date='$date', year='$year',
        price='$price' WHERE product_ID = $id");
    }


    
    // --------------------------------------//
    // -----------|| ACCESSORY ||-----------//
    function getAccess(){
        return getDatabase()->query("SELECT * FROM product WHERE category_ID = '3' ORDER BY release_date DESC");
    }
    function searchAcs($value){
        $name = $value["searchAccess"];
        return getDatabase()->query("SELECT * FROM product WHERE category_ID = '3' AND product_Name LIKE '%$name%'");
    }
    function createAcs($value){
        $productName = $value["product"];
        $brand = $value["type"];
        $category = 3;
        $desc = $value["desc"];
        // DATE
        date_default_timezone_set("Asia/Bangkok");
        $date = date("d-m-Y g:i A");

        $image = $_FILES["image"]["name"];
        $year = $value["year"];
        $price = $value["price"];
        return getDatabase()->query("INSERT INTO product
        (product_Name, brand_ID, category_ID, description, release_date, image, year, price) 
        VALUES('$productName', '$brand', '$category', '$desc', '$date', '$image', '$year', '$price')");
    }
    function getOneAcs($id){
        return getDatabase()->query("SELECT * FROM product WHERE product_ID = $id");
    }
    function editAcs($value){
        $id = $value["product_id"];
        $productName = $value["product"];
        $brand = $value["type"];
        $desc = $value["desc"];
        // DATE
        date_default_timezone_set("Asia/Bangkok");
        $date = date("d-m-Y g:i A");

        $year = $value["year"];
        $price = $value["price"];
        return getDatabase()->query("UPDATE product SET product_Name='$productName', brand_ID='$brand',
        description='$desc', year='$year', release_date='$date',
        price='$price' WHERE product_ID = $id");
    }
    function delAcs($acs_id){
        return getDatabase()->query("DELETE FROM product WHERE product_ID = $acs_id");
    }


    // --------------------------------------//
    // ------------|| SOFTWARE ||-----------//
    function getSoftware(){
        return getDatabase()->query("SELECT * FROM product WHERE category_ID = '4' ORDER BY release_date DESC");
    }
    function searchSoft($value){
        $name = $value["searchSoft"];
        return getDatabase()->query("SELECT * FROM product WHERE category_ID = '4' AND product_Name LIKE '%$name%'");
    }
    function creatSoft($value){
        $productName = $value["product"];
        $brand = $value["type"];
        $category = 4;
        $desc = $value["desc"];
        // DATE
        date_default_timezone_set("Asia/Bangkok");
        $date = date("d-m-Y g:i A");

        $image = $_FILES["image"]["name"];
        $year = $value["year"];
        $price = $value["price"];
        return getDatabase()->query("INSERT INTO product
        (product_Name, brand_ID, category_ID, description, release_date, image, year, price) 
        VALUES('$productName', '$brand', '$category', '$desc', '$date', '$image', '$year', '$price')");
    }
    function getOneSoft($id){
        return getDatabase()->query("SELECT * FROM product WHERE product_ID = $id");
    }
    function editSoft($value){
        $id = $value["product_id"];
        $productName = $value["product"];
        $brand = $value["type"];
        $desc = $value["desc"];
        // DATE
        date_default_timezone_set("Asia/Bangkok");
        $date = date("d-m-Y g:i A");

        $year = $value["year"];
        $price = $value["price"];
        return getDatabase()->query("UPDATE product SET product_Name='$productName', brand_ID='$brand', 
        description='$desc', year='$year', release_date='$date',
        price='$price' WHERE product_ID = $id");
    }
    function delSoft($soft_id){
        return getDatabase()->query("DELETE FROM product WHERE product_ID = $soft_id");
    }
?>

