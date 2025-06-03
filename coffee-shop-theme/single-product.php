<?php get_header(); ?>

<main class="container mt-5 py-5">
    <div class="row">
        <div class="col-md-6 mb-4 mb-md-0">
            <img src="placeholder.jpg" alt="Product Image" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-md-6">
            <h1 class="display-5">Product Name</h1>
            <p class="lead text-muted">Detailed product description goes here. It should be engaging and informative, highlighting the key features and benefits of the product.</p>
            <p class="h4 my-3">Price: <span class="fw-bold text-success">$19.99</span></p>
            <div class="d-grid gap-2 d-md-block mt-4">
                <button class="btn btn-primary btn-lg" type="button">
                    <i class="bi bi-cart-plus"></i> Add to Cart
                </button>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
