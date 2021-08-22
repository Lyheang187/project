<div class="laptop" style="background:rgba(236,239,241 ,1);">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-3">
                <h5>Type</h5>
                    <select name="type" class="form-control">
                    <option value="12">Software</option>
                    <option value="13">Game</option>
                </select>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-3">
                <form class="form-inline my-2 my-lg-0" method="post">
                    <h5 class="w-100">Search</h5>
                    <input class="form-control mr-sm-2" name="searchSoft" type="search" placeholder="Something here" aria-label="Search">
                    <button class="btn btn-warning my-2 my-sm-0 " type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-12 col-12 mt-3">
                <h5>Create</h5>
                <a href="process/software/add_soft.php"><button type="button" class="btn btn-secondary">Add post</button></a>
            </div>
        </div>
        <hr>
        <!-- Accessory -->
        <div class="row">
            <?php 
                require_once("inc/database.php");
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $software = searchSoft($_POST);
                }else{
                    $software = getSoftware();
                }
                foreach($software as $soft):
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-3 mb-3">
                <div class="card h-100">
                <?php if(($_SESSION["username"])== "Admin"): ?>
                    <div class="action p-2 d-flex justify-content-end" >
                        <a href="process/software/edit_soft.php?id=<?= $soft["product_ID"] ?>" class="btn btn-warning btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                        <a href="process/software/del_soft.php?id=<?= $soft["product_ID"] ?>" class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></a>
                    </div>
                <?php endif; ?>
                    <div class="inner p-3 d-flex justify-content-center align-item-center">
                        <a href="process/detial.php?id=<?= $soft["product_ID"] ?>">
                            <img class="mw-100" src="upload/<?= $soft["image"] ?>">
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-info border-bottom"><?= $soft["product_Name"] ?></h5>
                        <p class="card-text"><?= $soft["release_date"] ?></p>
                        <h5 class="text-danger align-self-baseline pb-0">$<?= $soft["price"] ?></h5>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>            
        </div>
    </div>
</div>
