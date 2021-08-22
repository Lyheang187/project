<div class="container-fluid table-responsive">
        <table class="table table-hover mt-3">
            <thead class="bg-secondary text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Product</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                require_once("inc/database.php");
                $orders = getOrder();
                foreach($orders as $order):
            ?>
                <tr>
                    <td><?= $order["order_ID"] ?></td>
                    <td><?= $order["customer"] ?></td>
                    <td><?= $order["product_Name"] ?></td>
                    <td><?= $order["date"] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>
<?php include_once("partial/footer.php") ?>
