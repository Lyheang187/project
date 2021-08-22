<?php
    session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light position-sticky sticky-top" style="background:#6c757d">
    <a class="navbar-brand" href="http://localhost/project/?page=home"><img src="http://localhost/project/img/htech.png" alt="" style="height:5vh; width:auto;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="http://localhost/project/?page=home"><i class="fa fa-home" aria-hidden="true"></i> Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://localhost/project/?page=laptop"><i class="fa fa-laptop" aria-hidden="true"></i> Laptop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://localhost/project/?page=accessory"><i class="fa fa-keyboard-o" aria-hidden="true"></i> Accessory</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://localhost/project/?page=software"><i class="fa fa-gamepad" aria-hidden="true"></i> Software</a>
            </li>
            <?php if(isset($_SESSION["username"])): ?>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://localhost/project/?page=order"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Orders</a>
            </li>
            <?php endif; ?>
            <?php if(($_SESSION["username"])== "Admin"): ?>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://localhost/project/?page=all_product"><i class="fa fa-table" aria-hidden="true"></i> Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="http://localhost/project?page=all_user"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
            </li>
            <?php endif; ?>
        </ul>
        <h6 class="m-2 text-white"><?= $_SESSION["username"] ?></h6>
        <?php if(!isset($_SESSION["username"])): ?>
        <form class="form-inline my-2 my-lg-0">
            <a href="http://localhost/project/?page=register_ui"><button class="btn btn-outline-light my-2 my-sm-0 " type="button"> Register</button></a>
            <a href="http://localhost/project/?page=login_ui"><button type="button" class="btn btn-warning mr-2 ml-2"><i class="fa fa-user" aria-hidden="true"></i> Login</button></a>    
        </form>
        <?php endif; ?>
        <form class="form-inline my-2 my-lg-0">
            <a href="http://localhost/project/?page=register_ui"><button class="btn btn-outline-light my-2 my-sm-0 " type="button"> Register</button></a>
            <a href="http://localhost/project/?page=login_ui"><button type="button" class="btn btn-warning mr-2 ml-2"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button></a>    
        </form>
    </div>
</nav>
<?php 