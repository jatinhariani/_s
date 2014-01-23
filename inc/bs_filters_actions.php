<?php

add_filter('next_posts_link_attributes', '_s_posts_link_attributes');
add_filter('previous_posts_link_attributes', '_s_posts_link_attributes');

function _s_posts_link_attributes() {
    return 'class="btn btn-default"';
}

add_filter( 'the_content', '_s_add_custom_table_class' );
function _s_add_custom_table_class( $content ) {
    return str_replace( '<table>', '<table class="table">', $content );
}