<?php
/**
 * Template part for displaying the header Search Modual
 *
 * @package kadence
 */

namespace Kadence;

?>
<div class="site-header-item site-header-focus-item" data-section="kadence_customizer_header_search">
	<?php
	/**
	 * Kadence Header Search
	 *
	 * Hooked Kadence\header_search
	 */
	echo do_shortcode( '[asearch]' );
	?>
</div><!-- data-section="header_search" -->
