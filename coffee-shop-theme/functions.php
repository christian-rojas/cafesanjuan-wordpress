<?php
function coffee_shop_theme_setup() {
    // Add theme support for title tags
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'coffee_shop_theme_setup' );

function coffee_shop_enqueue_styles() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2', 'all' );

    // Enqueue Bootstrap JS
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true );

    // Enqueue Custom JS
    wp_enqueue_script('coffee-shop-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery', 'bootstrap-js'), null, true);
}
add_action( 'wp_enqueue_scripts', 'coffee_shop_enqueue_styles' );

// Mercado Pago Integration Setup
// require_once __DIR__ . '/vendor/autoload.php'; // If using Composer

// TODO: Replace with your actual Mercado Pago credentials
// define('MERCADOPAGO_PUBLIC_KEY', 'YOUR_PUBLIC_KEY');
// define('MERCADOPAGO_ACCESS_TOKEN', 'YOUR_ACCESS_TOKEN');

// MercadoPago\SDK::setAccessToken(MERCADOPAGO_ACCESS_TOKEN);

/**
 * Placeholder function to simulate creating a Mercado Pago payment preference.
 *
 * @param array|null $order_items Items in the order.
 * @param float|null $order_total Total amount of the order.
 * @return string Mock preference ID.
 */
function get_mercadopago_payment_preference($order_items, $order_total) {
    // Placeholder: In a real scenario, this would interact with the Mercado Pago SDK
    // MercadoPago\SDK::setAccessToken(MERCADOPAGO_ACCESS_TOKEN);
    // $preference = new MercadoPago\Preference();
    // ... set items, payer, back_urls ...
    // $preference->save();
    // return $preference->id; // or $preference->init_point;

    return "mock_preference_id_12345"; // Placeholder
}
