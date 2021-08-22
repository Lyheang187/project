<?php include_once("../../partial/header.php") ?>
<?php include_once("../../partial/navbar.php") ?>
<!-- Register -->
    <?php
        include_once("../../inc/database.php");
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $isCreate = editAcs($_POST);
            if($isCreate){
                header("Location: http://localhost/project/?page=accessory");
            }else{
                print_r("Oop!");
            }
        }
    ?>
     <div class="p-4" style="background:rgba(236,239,241 ,1);">
        <?php
            include_once("../../inc/database.php");
            $access = getOneAcs($_GET["id"]);
            foreach($access as $acs):
        ?>
        <form action="#" method="post" class="rounded-lg col-lg-4 col-md-4 col-sm-6 col-12 m-auto bg-white p-3">
            <input type="hidden" name="product_id" value="<?= $acs['product_ID']?>">
            <div class="text-center">
                <h4>Edit accessory information</h4>
            </div>
            <div class="form-group">
                <label for="product">Product name</label>
                <input type="text" name="product"  value="<?= $acs['product_Name']?>" required class="form-control" id="product" placeholder="Enter product name">
            </div>
            <div class="form-group">
                <label>Choose type</label>
                    <select name="type" class="form-control">
                    <option value="7">Keyboard</option>
                    <option value="8">Mouse</option>
                    <option value="9">Monitor</option>
                    <option value="10">Headset</option>
                    <option value="11">Storage</option>
                </select>
            </div>
            <div class="form-group">
                <label for="des">Description</label>
                <input type="text" name="desc" value="<?= $acs['description']?>" required class="form-control" id="desc" placeholder="Enter description">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="URL image">
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label for="year">Year</label>
                    <input type="number" name="year" value="<?= $acs['year']?>" class="form-control" id="year" placeholder="Year of product">
                </div>
                <div class="col form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" value="<?= $acs['price']?>" class="form-control" id="price" placeholder="Enter price">
                </div>
            </div>
            <button type="submit" class="btn btn-warning w-100">Change</button>
        </form>
        <?php endforeach; ?>
    </div>
<?php include_once("../../partial/footer.php") ?>

