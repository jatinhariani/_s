<?php
/**
 * Edit account form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<?php wc_print_notices(); ?>

<form action="" method="post" class="form-horizontal">

    <div class="form-group">
        <label for="account_first_name" class="col-sm-4"><?php _e( 'First name', 'woocommerce' ); ?> <span class="required">*</span></label>
        <div class="col-sm-8">
            <input type="text" class="input-text form-control" name="account_first_name" id="account_first_name" value="<?php esc_attr_e( $user->first_name ); ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="account_last_name" class="col-sm-4"><?php _e( 'Last name', 'woocommerce' ); ?> <span class="required">*</span></label>
        <div class="col-sm-8">
            <input type="text" class="input-text form-control" name="account_last_name" id="account_last_name" value="<?php esc_attr_e( $user->last_name ); ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="account_email" class="col-sm-4"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
        <div class="col-sm-8">
            <input type="email" class="input-text form-control" name="account_email" id="account_email" value="<?php esc_attr_e( $user->user_email ); ?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="password_1" class="col-sm-4"><?php _e( 'Password (leave blank to leave unchanged)', 'woocommerce' ); ?></label>
        <div class="col-sm-8">
            <input type="password" class="input-text form-control" name="password_1" id="password_1" />
        </div>
    </div>
    <div class="form-group">
        <label for="password_2" class="col-sm-4"><?php _e( 'Confirm new password', 'woocommerce' ); ?></label>
        <div class="col-sm-8">
            <input type="password" class="input-text form-control" name="password_2" id="password_2" />
        </div>
    </div>
	<div class="clear"></div>

	<p><input type="submit" class="button btn btn-primary" name="save_account_details" value="<?php _e( 'Save changes', 'woocommerce' ); ?>" /></p>

	<?php wp_nonce_field( 'save_account_details' ); ?>
	<input type="hidden" name="action" value="save_account_details" />
</form>