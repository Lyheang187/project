<!-- Register -->
    <?php
        include_once("inc/database.php");
        $message = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST['username'];
            $password = $_POST["pass"];
            $cfpassword = $_POST["cfpassword"];
            $regex = "/^[a-zA-Z]+$/";
            if(!preg_match($regex, $password)){
                $message = "Not in order!";
            }else{
                if($password != $cfpassword){
                    $message = "Not match";
                }else{
                    $isCanAdd = createUser($_POST);
                    if($isCanAdd){
                        $_SESSION["username"] = $username;
                        header("Location: http://localhost/project/?page=home");
                    }else{
                        $message="Email already exist!";
                    }
                }
            }
        }
    ?>
    <div class="p-4" style="background:rgba(236,239,241 ,1);">
        <form action="#" method="post" class="rounded-lg col-lg-4 col-md-4 col-sm-6 col-12 m-auto bg-white p-3">
            <div class="text-center">
                <h4>Register to buy products</h4>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" required class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" required class="form-control" id="pass" placeholder="Password" >
                </div>
                <div class="col form-group">
                    <label for="cfpassword">Confirm password</label>
                    <input type="password" name="cfpassword" required class="form-control" id="cfpass" placeholder="Password" >
                </div>
            </div>
            <small>Password must be text</small>
            <small class="text-danger"><?= $message;?></small>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" required class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" required class="form-control" id="address" placeholder="Enter address">
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="profile">Profile</label>
                    <input type="text" name="profile" class="form-control" id="profile" placeholder="URL image with size 1:1">
                </div>
                <div class="col form-group">
                    <label>Role</label>
                    <select class="form-control">
                        <option>Customer</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" name="phone" required class="form-control" id="phone" placeholder="Enter phone">
            </div>
            <div>
                <button type="submit" class="btn btn-secondary w-100">Register</button>
            </div>
        </form>
    </div>

