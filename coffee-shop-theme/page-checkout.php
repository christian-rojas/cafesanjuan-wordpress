<?php /* Template Name: Checkout */ ?>
<?php get_header(); ?>

<main class="container mt-5">
    <h1 class="text-center mb-4">Checkout</h1>
    <form>
        <div class="row">
            <div class="col-md-6">
                <h2>Billing Details</h2>
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastName" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="state" class="form-label">State</label>
                        <input type="text" class="form-control" id="state" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="zip" class="form-label">Zip Code</label>
                        <input type="text" class="form-control" id="zip" required>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <h2>Shipping Details</h2>
                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="ship-to-different-address-checkbox">
                    <label class="form-check-label" for="ship-to-different-address-checkbox">Ship to a different address?</label>
                </div>
                <div id="shipping-address-form" class="d-none"> {/* Initially hidden */}
                    <div class="mb-3">
                        <label for="shippingFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="shippingFirstName">
                    </div>
                    <div class="mb-3">
                        <label for="shippingLastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="shippingLastName">
                    </div>
                    <div class="mb-3">
                        <label for="shippingAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="shippingAddress">
                    </div>
                    <div class="mb-3">
                        <label for="shippingCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="shippingCity">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="shippingState" class="form-label">State</label>
                            <input type="text" class="form-control" id="shippingState">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="shippingZip" class="form-label">Zip Code</label>
                            <input type="text" class="form-control" id="shippingZip">
                        </div>
                    </div>
                </div> {/* End of #shipping-address-form */}
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Order Summary</h2>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Product Name 1</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$12.00 x 1</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <h6 class="my-0">Product Name 2</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        <span class="text-muted">$8.00 x 2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Subtotal (USD)</span>
                        <strong>$28.00</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Shipping</span>
                        <strong>$5.00</strong>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>$33.00</strong>
                    </li>
                </ul>
                <div class="card p-2">
                    <!-- Mercado Pago payment button will be rendered here -->
                    <div class="cho-container"></div>
                    <p class="mb-0">Payment options will be here.</p> <!-- This can be removed or kept as fallback text -->
                </div>
                <button class="w-100 btn btn-primary btn-lg mt-4" type="submit">
                    <i class="bi bi-credit-card"></i> Place Order
                </button>
            </div>
        </div>
    </form>
</main>

<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
// const mp = new MercadoPago('MERCADOPAGO_PUBLIC_KEY'); // Replace with actual public key
// TODO: Get preferenceId from backend (e.g., via an AJAX call or passed via wp_localize_script)
// const preferenceId = '<?php echo get_mercadopago_payment_preference(null, null); ?>'; // Example
// if (preferenceId && document.querySelector('.cho-container')) {
//   mp.checkout({
//     preference: {
//       id: preferenceId
//     },
//     render: {
//       container: '.cho-container', // Class name where the payment button will be displayed
//       label: 'Pay with Mercado Pago', // Text shown on the button
//     }
//   });
// }
</script>

<?php get_footer(); ?>
