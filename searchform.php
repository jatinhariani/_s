<?php
/**
 * The template for displaying search forms in _s
 *
 * @package _s
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="search" class="form-control search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', '_s' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	  	<span class="input-group-btn">
			<input type="submit" class="btn btn-default search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', '_s' ); ?>">
	  	</span>
	</div><!-- /input-group -->
</form>