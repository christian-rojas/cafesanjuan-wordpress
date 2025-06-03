<?php get_header(); ?>

<main class="container mt-5">
    <div class="p-5 mb-4 bg-light rounded-3 hero-section">
        <div class="container-fluid py-5 text-center">
            <h1 class="display-4 fw-bold">Discover Your Perfect Coffee</h1>
            <p class="fs-5 text-muted col-md-10 mx-auto">Freshly roasted beans, expertly brewed drinks, and delicious pastries await. Start your day right with us!</p>
            <a href="<?php echo esc_url(home_url('/all-products')); ?>" class="btn btn-primary btn-lg mt-3">
                <i class="bi bi-cup-hot-fill"></i> Browse Our Products
            </a>
        </div>
    </div>

    <div class="row text-center mb-5">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-award"></i> Quality Beans</h5>
                    <p class="card-text">Sourced from the best coffee growing regions.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-people-fill"></i> Expert Baristas</h5>
                    <p class="card-text">Crafting your perfect cup with passion.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-patch-check-fill"></i> Cozy Atmosphere</h5>
                    <p class="card-text">The perfect spot to relax and enjoy.</p>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
