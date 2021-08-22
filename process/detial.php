<?php include_once("../partial/header.php") ?>
<?php include_once("../partial/navbar.php") ?>
<div class="container">
    <?php
        include_once("../inc/database.php");
        $products = detial($_GET["id"]);
        foreach($products as $product):
    ?>
    <form action="order.php" method="post"> 
        <div class="row card-body m-4">
            <input type="hidden" name="product_id" value="<?= $product["product_ID"]?>">
            <input type="hidden" name="customer"  value="<?= $_SESSION["username"]?>">
            <div class="d-flex">
                <div class="card-image mr-3">
                    <img class="img-fluid" src="../upload/<?= $product["image"] ?>" alt="" style="width: 70vh;">
                </div>
                <div class="info">
                    <h3><?= $product["product_Name"] ?></h3>
                    <p><?= $product["description"] ?></p>
                    <strong><?= $product["conditions"] ?></strong>
                    <strong><?= $product["year"] ?></strong>
                    <h4 class="text-danger">$ <?= $product["price"] ?></h4>
                    <?php if(!isset($_SESSION["username"])): ?>
                        <h3 class="text-warning">Please login before buy something! </h3>
                    <?php endif; ?>
                    <?php if(isset($_SESSION["username"])): ?>
                        <a href="#"><button type="submit" class="btn btn-warning"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy now</button></a>    
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </form>
    <?php endforeach; ?>
</div>
<?php include_once("../partial/footer.php") ?>
