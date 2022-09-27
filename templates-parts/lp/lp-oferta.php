<?php
$title = get_field('tytul_oferta');

$args = array(
	'post_type'      => 'oferta',
	'posts_per_page' => -1,
	'order'          => 'asc',
)
?>

<section id="oferta" class="oferta">
    <div class="container">
        <div class="row row-flex">
            <div class="col-1">
                <div class="title-section">
                    <h2 class="title"><?php echo $title; ?></h2>
                </div>
            </div>
        </div>
        <div class="row row-flex">
            <?php 
                $oferty = new WP_Query( $args );
				while ( $oferty->have_posts() ):
                $oferty->the_post();
            ?>
            <div class="col-4">
                <article class="card-oferta">
                    <header>
                        <h2><?php the_title(); ?></h2>
                    </header>
                    <div class="content">
                        <div class="img">
                            <?php echo the_post_thumbnail('oferta'); ?>
                        </div>
                       <?php the_excerpt(); ?>
                    </div>
                    <div class="cta">
                        <a href="<?php the_permalink(); ?>" class="btn">Więcej ></a>
                    </div>
                </article>
            </div>
            <?php endwhile;
			wp_reset_query(); ?>
        </div>
        
    </div>
</section>