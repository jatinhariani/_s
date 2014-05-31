<?php
/**
 * Thankyou page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce;

if ( $order ) : ?>

	<?php if ( in_array( $order->status, array( 'failed' ) ) ) : ?>

		<p><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction.', 'woocommerce' ); ?></p>

		<p><?php
			if ( is_user_logged_in() )
				_e( 'Please attempt your purchase again or go to your account page.', 'woocommerce' );
			else
				_e( 'Please attempt your purchase again.', 'woocommerce' );
		?></p>

		<p>
			<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
			<?php if ( is_user_logged_in() ) : ?>
			<a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'myaccount' ) ) ); ?>" class="button pay"><?php _e( 'My Account', 'woocommerce' ); ?></a>
			<?php endif; ?>
		</p>

	<?php else : ?>

		<p><?php _e( 'Thank you. Your order has been received.', 'woocommerce' ); ?></p>

        <table class="table order_details">
            <tr class="order">
                <td>
                    <?php _e( 'Order:', 'woocommerce' ); ?>
                </td>
                <td>
                    <?php echo $order->get_order_number(); ?>
                </td>
            </tr>
            <tr class="date">
                <td>
                    <?php _e( 'Date:', 'woocommerce' ); ?>
                </td>
                <td>
                    <?php echo date_i18n( get_option( 'date_format' ), strtotime( $order->order_date ) ); ?>
                </td>
            </tr>
            <tr class="total">
                <td>
                    <?php _e( 'Total:', 'woocommerce' ); ?>
                </td>
                <td>
                    <?php echo $order->get_formatted_order_total(); ?>
                </td>
            </tr>
            <?php if ( $order->payment_method_title ) : ?>
                <tr>
                    <td>
                        <?php _e( 'Payment method:', 'woocommerce' ); ?>
                    </td>
                    <td>
                        <?php echo $order->payment_method_title; ?>
                    </td>
                </tr>
            <?php endif; ?>
        </table>

	<?php endif; ?>

	<?php do_action( 'woocommerce_thankyou_' . $order->payment_method, $order->id ); ?>
	<?php do_action( 'woocommerce_thankyou', $order->id ); ?>

<?php else : ?>

	<p><?php _e( 'Thank you. Your order has been received.', 'woocommerce' ); ?></p>

<?php endif; ?>