<div class="home" style="background:rgba(236,239,241 ,1);">
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="" data-slide-to="0" class="active"></li>
                <li data-target="" data-slide-to="1"></li>
                <li data-target="" data-slide-to="2"></li>
                <li data-target="" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/cv3.jpg" class="d-block w-100" alt="vc2">
                </div>
                    <div class="carousel-item">
                    <img src="img/cv2.jpg" class="d-block w-100" alt="vc3">
                </div>
                <div class="carousel-item">
                    <img src="img/cv1.jpg" class="d-block w-100" alt="cv1">
                </div>
                <div class="carousel-item">
                    <img src="img/cv4.jpg" class="d-block w-100" alt="cv4">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
        <ul class="list-unstyled row">
            <li class="col-lg-2 col-md-3 col-sm-3 col-3 mt-3 mb-3">
                <a href="">
                    <img class="img-responsive w-100" src="img/acer.png">
                </a>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-3 col-3 mt-3 mb-3">
                <a href="">
                    <img class="img-responsive w-100" src="img/asus.png">
                </a>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-3 col-3 mt-3 mb-3">
                <a href="">
                    <img class="img-responsive w-100" src="img/huawei.png">
                </a>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-3 col-3 mt-3 mb-3">
                <a href="">
                    <img class="img-responsive w-100" src="img/microsoft.png">
                </a>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-3 col-3 mt-3 mb-3">
                <a href="">
                    <img class="img-responsive w-100" src="img/lenovo.png">
                </a>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-3 col-3 mt-3 mb-3">
                <a href="">
                    <img class="img-responsive w-100" src="img/msi.png">
                </a>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-3 col-3 mt-3 mb-3">
                <a href="">
                    <img class="img-responsive w-100" src="img/adobe.png">
                </a>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-3 col-3 mt-3 mb-3">
                <a href="">
                    <img class="img-responsive w-100" src="img/apple.png">
                </a>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-3 col-3 mt-3 mb-3">
                <a href="">
                    <img class="img-responsive w-100" src="img/amd.png">
                </a>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-3 col-3 mt-3 mb-3">
                <a href="">
                    <img class="img-responsive w-100" src="img/dell.png">
                </a>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-3 col-3 mt-3 mb-3">
                <a href="">
                    <img class="img-responsive w-100" src="img/razer.png">
                </a>
            </li>
            <li class="col-lg-2 col-md-3 col-sm-3 col-3 mt-3 mb-3">
                <a href="">
                    <img class="img-responsive w-100" src="img/intel.png">
                </a>
            </li>
        </ul>
    </div>
    <!-- post -->
    <div class="container-fluid mt-3">
        <!-- Laptop -->
        <div class="row">
            <?php 
                require_once("inc/database.php");
                $fourLaptop = fourLaptop();
                foreach($fourLaptop as $laptop):
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-3 mb-3">
                <div class="card h-100">
                <div class="inner" style="padding:20px">
                    <a href="process/detial.php?id=<?= $laptop["product_ID"] ?>">
                        <img src="upload/<?= $laptop["image"] ?>" class="card-img-top" alt="...">
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-info border-bottom"><?= $laptop["product_Name"] ?></h5>
                    <p class="btn btn-danger btn-sm pr-3 pl-3 mt-1 mb-2"><?= $laptop["conditions"] ?></p>
                    <h5 class="text-danger">$<?= $laptop["price"] ?></h5>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
</body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>

