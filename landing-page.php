<?php
/**
*
* Template name: Landingpage
* Template Post Type:  page
*/
get_header();
echo '<article>';
get_template_part( 'templates-parts/lp/lp', 'slider' );
get_template_part( 'templates-parts/lp/lp', 'o-nas' );
get_template_part( 'templates-parts/lp/lp', 'oferta' );
get_template_part( 'templates-parts/lp/lp', 'klienci_v2' );
get_template_part( 'templates-parts/lp/lp', 'case-study' );
echo '</article>';
get_footer();
