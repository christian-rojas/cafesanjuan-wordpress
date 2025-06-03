<?php /* Template Name: Cart */ ?>
<?php get_header(); ?>

<main class="container mt-5">
    <h1 class="text-center mb-4">Your Shopping Cart</h1>
    <div class="row">
        <div class="col-lg-8">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 15%;">Product</th>
                            <th scope="col" style="width: 30%;">Name</th>
                            <th scope="col" style="width: 15%;">Price</th>
                            <th scope="col" style="width: 15%;">Quantity</th>
                            <th scope="col" style="width: 15%;">Total</th>
                            <th scope="col" style="width: 10%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i <= 2; $i++): // Loop for 2 placeholder cart items ?>
                        <tr>
                            <td><img src="placeholder.jpg" alt="Product Image <?php echo $i; ?>" class="img-fluid" style="max-width: 50px;"></td>
                            <td>Product Name <?php echo $i; ?></td>
                            <td>$<?php echo $price = rand(10, 30); ?>.99</td>
                            <td><input type="number" class="form-control form-control-sm" value="<?php echo $qty = rand(1,3); ?>" style="width: 70px;"></td>
                            <td>$<?php echo $price * $qty; ?>.99</td>
                            <td><button class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></button></td>
                        </tr>
                        <?php endfor; ?>
                         <tr>
                            <td><img src="placeholder.jpg" alt="Product Image 3" class="img-fluid rounded" style="max-width: 50px;"></td>
                            <td>Another Product</td>
                            <td>$15.50</td>
                            <td><input type="number" class="form-control form-control-sm" value="1" style="width: 70px;"></td>
                            <td>$15.50</td>
                            <td><button class="btn btn-outline-danger btn-sm"><i class="bi bi-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-end mt-3">
                <a href="<?php echo esc_url(home_url('/all-products')); ?>" class="btn btn-outline-secondary"><i class="bi bi-arrow-left"></i> Continue Shopping</a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">Cart Totals</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Subtotal
                            <span>$78.47</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            Shipping
                            <span>$5.00</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center fw-bold px-0">
                            Total
                            <span class="h5 mb-0">$83.47</span>
                        </li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/checkout')); ?>" class="btn btn-success w-100 mt-4 btn-lg">
                        Proceed to Checkout <i class="bi bi-arrow-right-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
