<?php
/**
 * Single Product tabs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Filter tabs and allow third parties to add their own
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>

	<div class="woocommerce-tabs">
        <ul class="nav nav-tabs">
            <?php $tabCount = 0; ?>
            <?php foreach ( $tabs as $key => $tab ) : ?>

                <li class="<?php echo $key ?>_tab <?php echo ($tabCount == 0 ) ? 'active' : ''; ?>">
                    <a href="#tab-<?php echo $key ?>" data-toggle="tab">
                        <?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', $tab['title'], $key ) ?>
                    </a>
                </li>
                <?php $tabCount++; ?>
            <?php endforeach; ?>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <?php $tabCount = 0; ?>
            <?php foreach ( $tabs as $key => $tab ) : ?>

                <div class="tab-pane entry-content <?php echo ($tabCount == 0 ) ? 'active' : ''; ?>" id="tab-<?php echo $key ?>">
                    <?php call_user_func( $tab['callback'], $key, $tab ) ?>
                </div>

                <?php $tabCount++; ?>
            <?php endforeach; ?>
        </div>

	</div>

<?php endif; ?>