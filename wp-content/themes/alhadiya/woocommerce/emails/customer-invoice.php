<?php
/**
 * Customer invoice email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-invoice.php.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Executes the e-mail header.
 *
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php /* translators: %s: Customer first name */ ?>
<p><?php printf( esc_html__( 'Hi %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?></p>

<?php if ( $order->needs_payment() ) { ?>
    <p>
    <?php
    printf(
        wp_kses(
            /* translators: %1$s Site title, %2$s Order pay link */
            __( 'An Enquiry has been created for you on %1$s. Your invoice is below, with a link to make payment when you’re ready: %2$s', 'woocommerce' ),
            array(
                'a' => array(
                    'href' => array(),
                ),
            )
        ),
        esc_html( get_bloginfo( 'name', 'display' ) ),
        '<a href="' . esc_url( $order->get_checkout_payment_url() ) . '">' . esc_html__( 'Pay for this order', 'woocommerce' ) . '</a>'
    );
    ?>
    </p>

<?php } else { ?>
    <p>
    <?php
    /* translators: %s Order date */
    printf( esc_html__( 'Here are the details of your Enquiry placed on %s:', 'woocommerce' ), esc_html( wc_format_datetime( $order->get_date_created() ) ) );
    ?>
    </p>
    <?php
}

/**
 * Hook for the woocommerce_email_order_details.
 *
 * @hooked WC_Emails::order_details() Shows the order details table.
 */
?>
<table class="td" cellspacing="0" cellpadding="6" style="width: 100%; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;" border="1">
    <thead>
        <tr>
            <th class="td" scope="col" style="text-align:left;"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
            <th class="td" scope="col" style="text-align:left;"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ( $order->get_items() as $item_id => $item ) {
            $product = $item->get_product();
            ?>
            <tr>
                <td class="td" scope="col" style="text-align:left;">
                    <?php echo $product->get_name(); ?>
                </td>
                <td class="td" scope="col" style="text-align:left;">
                    <?php echo $item->get_quantity(); ?>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

<?php

/**
 * Hook for the woocommerce_email_order_meta.
 *
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

/**
 * Show user-defined additional content - this is set in each email's settings.
 */
if ( $additional_content ) {
    echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}

/**
 * Executes the email footer.
 *
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );
