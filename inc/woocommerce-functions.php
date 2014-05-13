<?php

add_filter( 'woocommerce_enqueue_styles', '__return_false' );

add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
    function loop_columns() {
        return 3; // 3 products per row
    }
}

function _s__woocommerce_scripts() {
    //product archive page styling
    if(is_post_type_archive('product')) {
        wp_enqueue_style('archive-product', get_template_directory_uri().'/css/woocommerce/archive-product.css');
    }
}
add_action( 'wp_enqueue_scripts', '_s__woocommerce_scripts' );

add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 12 );
