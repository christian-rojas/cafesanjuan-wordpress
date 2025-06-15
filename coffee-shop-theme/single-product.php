<?php get_header(); ?>
<main class="container py-5">
    <?php if (have_posts()) : while (have_posts()) : the_post();
            global $product; ?>
            <div class="row align-items-center g-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="bg-white rounded-4 shadow-sm p-3">
                        <?php echo $product->get_image('large', ['class' => 'img-fluid rounded-4 w-100']); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-3" style="color:#7c4f1d;"><?php the_title(); ?></h1>
                    <p class="lead text-muted mb-4"><?php echo $product->get_short_description(); ?></p>
                    <div class="mb-4">
                        <span class="h4 fw-bold text-success me-2"><?php echo $product->get_price_html(); ?></span>
                    </div>
                    <!-- <div class="mb-4">
                        <?php //woocommerce_template_single_add_to_cart(); 
                        ?>
                    </div> -->
                    <form action="<?php echo esc_url($product->add_to_cart_url()); ?>" method="post" enctype="multipart/form-data">
                        <?php do_action('woocommerce_before_add_to_cart_button'); ?>
                        <?php woocommerce_template_single_add_to_cart(); ?>
                        <?php do_action('woocommerce_after_add_to_cart_button'); ?>
                    </form>

                    <div class="bg-light rounded-3 p-3 mt-4">
                        <h5 class="fw-semibold mb-2">Descripción completa</h5>
                        <p class="mb-0 text-muted"><?php echo $product->get_description(); ?></p>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</main>
<?php get_footer(); ?>