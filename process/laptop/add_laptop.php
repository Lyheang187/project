<?php include_once("../../partial/header.php") ?>
<?php include_once("../../partial/navbar.php") ?>
<!-- Register -->
    <?php
        include_once("../../inc/database.php");
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // Post img
            $img_Name = $_FILES['image']['name'];
            $img_Size = $_FILES['image']['size'];
            $img_Type = $_FILES['image']['type'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $dir_fold = "../../upload/";
            move_uploaded_file($tmp_name, $dir_fold.$img_Name);
            
            $isCreate = createLaptop($_POST);
            if($isCreate){
                header("Location: http://localhost/project/?page=laptop");
            }
        }
    ?>
    <div class="p-4" style="background:rgba(236,239,241 ,1);">
        <form action="#" method="post" class="rounded-lg col-lg-4 col-md-4 col-sm-6 col-12 m-auto bg-white p-3" enctype="multipart/form-data">
            <div class="text-center">
                <h4>Add laptop</h4>
            </div>
            <div class="form-group">
                <label for="product">Product name</label>
                <input type="text" name="product" required class="form-control" id="product" placeholder="Enter product name">
            </div>
            <div class="form-row">
                <div class="col">
                    <label>Choose brand</label>
                    <select name="brand" class="form-control">
                        <option value="1">Acer</option>
                        <option value="2">Asus</option>
                        <option value="3">Apple</option>
                        <option value="4">Dell</option>
                        <option value="5">Lenovo</option>
                        <option value="6">MSI</option>
                    </select>
                </div>
                <div class="col form-group">
                    <label class="w-100">Condition</label>
                    <select name="condition" class="form-control">
                        <option value="New">New</option>
                        <option value="Used">Used</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="des">Description</label>
                <input type="text" name="desc" required class="form-control" id="desc" placeholder="Enter description">
            </div>
            <div class="form-group">
                <label for="img">Choose image</label>
                <input type="file" name="image" class="form-control-file" id="img">
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label for="year">Year</label>
                    <input type="number" name="year" required class="form-control" id="year" placeholder="Year of product">
                </div>
                <div class="col form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" required class="form-control" id="price" placeholder="Enter price">
                </div>
            </div>
            <button type="submit" class="btn btn-warning w-100">Add</button>
        </form>
    </div>
<?php include_once("../../partial/footer.php") ?>

