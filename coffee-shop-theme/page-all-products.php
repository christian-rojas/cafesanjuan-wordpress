<?php /* Template Name: All Products */ ?>
<?php get_header(); ?>

<main class="container mt-5 py-5">
    <h1 class="text-center mb-5 display-4">Nuestros Productos</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1,
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
            <div class="col">
                <div class="card h-100 shadow-sm hover-shadow-lg">
                    <img src="<?php echo esc_url($image_url); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text text-muted"><?php echo $product->get_short_description(); ?></p>
                        <p class="card-text h5 mt-2 mb-3 text-success fw-bold"><?php echo $price; ?></p>
                        <a href="<?php echo esc_url($permalink); ?>" class="btn btn-outline-primary mt-auto">
                            <i class="bi bi-eye"></i> Ver más
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile;
        wp_reset_query(); ?>
    </div>
</main>

<?php get_footer(); ?>

<style>
    .hover-shadow-lg {
        transition: box-shadow .2s ease-in-out;
    }

    .hover-shadow-lg:hover {
        box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .15) !important;
    }

    .card img {
        height: 250px;
        width: 100%;
        object-fit: cover;
        background: #f5f5f5;
    }
</style>