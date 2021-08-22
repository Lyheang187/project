    <div class="container-fluid table-responsive">
        <div class="mt-3 d-flex justify-content-end">
            <form class="form-inline my-2 my-lg-0" method="post">
                <input class="form-control mr-sm-2" name="searchProduct" type="search" placeholder="Something here" aria-label="Search">
                <button class="btn btn-warning my-2 my-sm-0 " type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <table class="table table-hover mt-3">
            <thead class="bg-secondary text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Profile</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Option</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                require_once("inc/database.php");
                $users = getUser();
                foreach($users as $user):
            ?>
                <tr>
                    <td><?= $user["user_ID"] ?></td>
                    <td><?= $user["profile"] ?></td>
                    <td><?= $user["username"] ?></td>
                    <td><?= $user["email"] ?></td>
                    <td> <a href="process/delUser.php?id=<?= $user["user_ID"] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
                    <td><?= $user["phone"] ?></td>
                    <td><?= $user["address"] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>