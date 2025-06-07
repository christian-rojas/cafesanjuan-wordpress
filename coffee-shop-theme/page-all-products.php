<?php /* Template Name: All Products */ ?>
<?php get_header(); ?>

<main class="container mt-5 py-5">
    <h1 class="text-center mb-5 display-4">Our Products</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <?php for ($i = 1; $i <= 8; $i++): // Loop for 8 placeholder products ?>
        <div class="col">
            <div class="card h-100 shadow-sm hover-shadow-lg">
                <img src="placeholder.jpg" class="card-img-top" alt="Product Image <?php echo $i; ?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Product Name <?php echo $i; ?></h5>
                    <p class="card-text text-muted">A brief description of the product.</p>
                    <p class="card-text h5 mt-2 mb-3 text-success fw-bold">$<?php echo rand(10, 50); ?>.99</p>
                    <a href="#" class="btn btn-outline-primary mt-auto">
                        <i class="bi bi-eye"></i> View Product
                    </a>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</main>

<?php get_footer(); ?>


<style>
.hover-shadow-lg {
    transition: box-shadow .2s ease-in-out;
}
.hover-shadow-lg:hover {
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
}
</style>
