<?php get_header(); ?>
<div id="error" class="container-fluid">
    <div class="row">
        <div class="col col-1 text-center">
            <img class="hamster" src="<?php echo get_template_directory_uri() ?>/src/img/error.png" alt="">
            <h2><?php _e( 'Upss. Chyba się zgubiłeś?', 'cr' ); ?></h2>
            <a class="btn btn-main" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php _e( 'Wróć do strony głównej', 'cr' ); ?></a>
        </div>
    </div>
</div>
<?php get_footer();