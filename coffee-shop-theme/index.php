<?php get_header(); ?>

<main class="container-fluid px-0">
    <!-- Hero Section -->
    <section class="bg-light py-5 position-relative">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="col-md-6 mb-4 mb-md-0">
                <h1 class="fw-bold display-4">Un delicioso<br>café para disfrutar</h1>
                <p class="text-muted mb-4">granos finamente seleccionados de Costa Rica</p>
                <a href="#" class="btn btn-dark px-4 py-2">Comprar</a>
            </div>
            <div class="col-md-5 text-center">
                <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=400&q=80" alt="Coffee Cup" class="img-fluid shadow">
                <div class="mt-3">
                    <!-- <img src="" alt="Coffee Beans" style="width: 40px;"> -->
                </div>
            </div>
        </div>
    </section>

    <!-- Offer Section -->
    <section class="text-center py-5">
        <h2 class="fw-bold mb-3">Nuestra etiqueta de calidad</h2>
        <p class="text-muted mb-5">.</p>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-4">
                <div class="mb-2"><i class="bi bi-cup-hot display-5"></i></div>
                <h5>Variedad de granos</h5>
                <p class="small text-muted">Grano entero y molido, selecciona el que más te guste.</p>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <div class="mb-2"><i class="bi bi-bezier display-5"></i></div>
                <h5>Niveles</h5>
                <p class="small text-muted">Grano tostado</p>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <div class="mb-2"><i class="bi bi-cup-straw display-5"></i></div>
                <h5>Preparaciones</h5>
                <p class="small text-muted">Este café es ideal para: ColdBrew, Espresso y V60</p>
            </div>
        </div>
    </section>

    <!-- Featured Product Section -->
    <section class="bg-light py-5">
        <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
            <div class="col-md-5 text-center mb-4 mb-md-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/3-coffes-scaled.jpg" alt="Coffee Cup" class="img-fluid shadow">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold">Un aroma original</h3>
                <p class="text-muted">Descubre el auténtico sabor de Costa Rica en cada taza. Nuestro café en grano y molido, cultivado en las fértiles tierras costarricenses, ofrece una experiencia aromática y llena de cuerpo. Disfruta de la frescura y calidad premium en cada paquete, ideal para los verdaderos amantes del café. ¡Lleva a casa el mejor café costarricense y vive el placer de un café excepcional todos los días!</p>
                <div class="mb-2">
                    <!-- <span class="fw-bold"><i class="bi bi-download"></i> Download price</span><br> -->
                    <!-- <span class="text-dark">3-068-387-01-39</span> -->
                </div>
                <a href="#" class="btn btn-outline-dark me-2">Leer más</a>
                <!-- <a href="#" class="btn btn-dark">SHOP NOW</a> -->
            </div>
        </div>
    </section>

    <!-- Popular Menu Section -->
    <section class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #e0e7ef 100%);">
        <div class="container">
            <h2 class="fw-bold text-center mb-3" style="color: #4b2e05;">Catálogo</h2>
            <p class="text-muted text-center mb-5">Traemos el mejor grano de Costa Rica<br></p>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row g-4">
                        <?php
                        // Query 4 WooCommerce products
                        $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => 4,
                            'orderby' => 'menu_order',
                            'order' => 'ASC'
                        );
                        $loop = new WP_Query($args);
                        while ($loop->have_posts()) : $loop->the_post();
                            global $product;
                            $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium')[0];
                            $price = $product->get_price_html();
                            $permalink = get_permalink();
                        ?>
                            <div class="col-12 col-sm-6 col-md-3">
                                <a href="<?php echo esc_url($permalink); ?>" class="text-decoration-none text-dark">
                                    <div class="card h-100 shadow-lg border-0 rounded-4 bg-white menu-card" style="transition: transform 0.2s, box-shadow 0.2s;">
                                        <img src="<?php echo esc_url($image_url); ?>" class="card-img-top rounded-top-4" alt="<?php the_title(); ?>" style="object-fit:cover; height:180px; background:#f5f5f5;">
                                        <div class="card-body text-center">
                                            <h5 class="card-title fw-bold" style="color: #7c4f1d;"><?php the_title(); ?></h5>
                                            <p class="card-text fw-bold text-primary mb-2" style="font-size:1.2rem;"><?php echo $price; ?></p>
                                            <span class="badge rounded-pill bg-warning text-dark">Popular</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile;
                        wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .menu-card:hover {
                transform: translateY(-8px) scale(1.03);
                box-shadow: 0 8px 32px rgba(124, 79, 29, 0.15), 0 1.5px 6px rgba(0, 0, 0, 0.08);
            }
        </style>
    </section>
</main>

<?php get_footer(); ?>