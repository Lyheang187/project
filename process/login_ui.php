<!-- L0gin -->
    <div class="p-5" style="background:rgba(236,239,241 ,1); height: 91vh;">
    <?php
        require_once("inc/database.php");
        $message = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $ifLogin = login($_POST);
            $username = $_POST["username"];
            $_SESSION["username"] = $username;
            if($ifLogin){
                header("Location: http://localhost/project/?page=home");
            }else{
                $message = "Email or password doesn't exist";
            }
        }
    ?>
        <form action="#" method="post" class="rounded-lg col-lg-4 col-md-4 col-sm-6 col-12 m-auto bg-white p-3">
            <div class="text-center">
                <h4>Login to your account</h4>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" name="password" class="form-control" id="pass" placeholder="Password">
            </div>
            <small class="text-danger"><?= $message; ?></small>
            <button type="submit" class="btn btn-warning w-100">Login</button>
        </form>
    </div>
<?php include_once("partial/footer.php") ?>
