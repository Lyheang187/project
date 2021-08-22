<?php include_once("../../partial/header.php") ?>
<?php include_once("../../partial/navbar.php") ?>
<!-- Register -->
    <?php
        include_once("../../inc/database.php");
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $isCreate = editSoft($_POST);
            if($isCreate){
                header("Location: http://localhost/project/?page=software");
            }
        }
    ?>
    <div class="p-4" style="background:rgba(236,239,241 ,1);">
    <?php
        include_once("../../inc/database.php");
        $software = getOneSoft($_GET["id"]);
        foreach($software as $soft):
    ?>
        <form action="#" method="post" class="rounded-lg col-lg-4 col-md-4 col-sm-6 col-12 m-auto bg-white p-3">
            <div class="text-center">
                <h4>Edit sofware information</h4>
            </div>
            <input type="hidden" name="product_id" value="<?= $soft['product_ID']?>">
            <div class="form-group">
                <label for="product">Product name</label>
                <input type="text" name="product" value="<?= $soft['product_Name']?>" class="form-control" id="product" placeholder="Enter product name">
            </div>
            <div class="form-group">
                <label>Choose type</label>
                    <select name="type" class="form-control">
                    <option value="12">Software</option>
                    <option value="13">Game</option>
                </select>
            </div>
            <div class="form-group">
                <label for="des">Description</label>
                <input type="text" name="desc" value="<?= $soft['description']?>" class="form-control" id="desc" placeholder="Enter description">
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label for="year">Year</label>
                    <input type="number" name="year" value="<?= $soft['year']?>" class="form-control" id="year" placeholder="Year of product">
                </div>
                <div class="col form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" value="<?= $soft['price']?>" class="form-control" id="price" placeholder="Enter price">
                </div>
            </div>
            <button type="submit" class="btn btn-warning w-100">Add</button>
        </form>
        <?php endforeach; ?>
    </div>
<?php include_once("../../partial/footer.php") ?>

