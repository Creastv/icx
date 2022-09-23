<?php
get_header();
 if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    get_template_part( 'templates-parts/content', 'index' );
    endwhile;
    else :
    echo "<h1 class='text-center'>Nic nie znaleziono</h1> ";
 endif;
get_footer();
