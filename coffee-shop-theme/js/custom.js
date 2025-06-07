jQuery(document).ready(function($) {
    // Toggle shipping address form on checkout page
    var $shippingCheckbox = $('#ship-to-different-address-checkbox');
    var $shippingForm = $('#shipping-address-form');

    // Initial state
    if ($shippingCheckbox.length && $shippingForm.length) {
        if ($shippingCheckbox.is(':checked')) {
            $shippingForm.show();
        } else {
            $shippingForm.hide(); // Ensure it's hidden if not checked by default
        }

        $shippingCheckbox.on('change', function() {
            if ($(this).is(':checked')) {
                $shippingForm.slideDown();
            } else {
                $shippingForm.slideUp();
            }
        });
    }

    // Add any other general JS enhancements here
    // For example, activating Bootstrap tooltips if used:
    // $('[data-bs-toggle="tooltip"]').tooltip();
});
