<?php /* Template Name: Cart */ ?>
<?php get_header(); ?>

<?php
if (function_exists('WC')) {
    $cart = WC()->cart;
    $cart_items = $cart->get_cart();
}
?>
<div class="container py-5">
    <h2 class="fw-bold mb-4 text-center">Carro de compras</h2>
    <?php if (empty($cart_items)) : ?>
        <div class="text-center py-5">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cafe_shipping.jpg" alt="Empty Cart" style="max-width:220px; opacity:0.8;">
            <h4 class="mt-4 text-muted">tu carrito está vacío!</h4>
            <a href="/all-products/" class="btn btn-primary mt-3">Buscar productos</a>
        </div>
    <?php else : ?>
        <div class="table-responsive">
            <table class="table align-middle table-bordered shadow-sm bg-white rounded-4">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Quitar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart_items as $cart_item_key => $cart_item) :
                        $product = $cart_item['data'];
                        $product_id = $cart_item['product_id'];
                        $product_permalink = get_permalink($product_id);
                        $thumbnail = get_the_post_thumbnail_url($product_id, 'thumbnail');
                    ?>
                        <tr>
                            <td><img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($product->get_name()); ?>" style="width:60px; height:60px; object-fit:cover; border-radius:8px;"></td>
                            <td><a href="<?php echo esc_url($product_permalink); ?>" class="text-decoration-none text-dark fw-semibold"><?php echo esc_html($product->get_name()); ?></a></td>
                            <td><?php echo wc_price($product->get_price()); ?></td>
                            <td><?php echo esc_html($cart_item['quantity']); ?></td>
                            <td><?php echo wc_price($cart_item['line_total']); ?></td>
                            <td>
                                <form method="post" action="">
                                    <button type="submit" name="remove_cart_item" value="<?php echo esc_attr($cart_item_key); ?>" class="btn btn-sm btn-outline-danger">&times;</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-end align-items-center mt-4">
            <h5 class="me-3">Total: <span class="fw-bold text-primary"><?php echo $cart->get_cart_total(); ?></span></h5>
            <a href="/checkout/" class="btn btn-success btn-lg">Proceder a pagar</a>
        </div>
    <?php endif; ?>
</div>