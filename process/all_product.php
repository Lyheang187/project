    <div class="container-fluid table-responsive">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 mt-3">
                <h5 class="w-100">Brand</h5>
                <select class="form-control">
                    <option>Default select</option>
                    <option>Acer</option>
                    <option>Asus</option>
                    <option>Apple</option>
                    <option>Dell</option>
                    <option>Lenovo</option>
                    <option>MSI</option>
                </select>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-12 col-12 mt-3">
                <h5>Condition</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">New</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Used</label>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-3">
                <form class="form-inline my-2 my-lg-0" method="post">
                    <h5 class="w-100">Search</h5>
                    <input class="form-control mr-sm-2" name="searchProduct" type="search" placeholder="Something here" aria-label="Search">
                    <button class="btn btn-warning my-2 my-sm-0 " type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
        <table class="table table-hover mt-3">
            <thead class="bg-secondary text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Condition</th>
                    <th scope="col">Option</th>
                    <th scope="col">Release</th>
                    <th scope="col">Type</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                require_once("inc/database.php");
                $products = getProduct();
                foreach($products as $product):
            ?>
                <tr>
                    <td><?= $product["product_ID"] ?></td>
                    <td><?= $product["product_Name"] ?></td>
                    <td><?= $product["description"] ?></td>
                    <td><?= $product["conditions"] ?></td>
                    <td><a href="process/del_product.php?id=<?= $product["product_ID"] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
                    <td><?= $product["release_date"] ?></td>
                    <td><?= $product["brand_Name"] ?></td>
                    <td><?= $product["category_Name"] ?></td>
                    <td>$<?= $product["price"] ?></td>
                    <td><?= $product["year"] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

