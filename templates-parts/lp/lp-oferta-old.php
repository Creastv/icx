<?php
$title = get_field('tytul_oferta');

$args = array(
	'post_type'      => 'oferta',
	'posts_per_page' => -1,
	'order'          => 'asc',
)
?>

<section id="oferta" class="oferta" data-aos="fade-right" data-aos-duration="1000">
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
            $i = 1;
                $oferty = new WP_Query( $args );
				while ( $oferty->have_posts() ):
                $oferty->the_post();
            ?>
            <div class="col-4" data-aos="fade-up" data-aos-duration="1000">
                <article class="card-oferta">
                    <header>
                        <h2><?php the_title(); ?></h2>
                    </header>
                    <div class="content">
                        <div class="img">
                            <a href="<?php the_permalink(); ?>">
                            <?php echo the_post_thumbnail('oferta'); ?>
                            </a>
                        </div>
                       <?php the_excerpt(); ?>
                    </div>
                    <div class="cta">
                        <a href="<?php the_permalink(); ?>" class="btn"><span>Więcej</span> <span> ></span></a>
                    </div>
                </article>
            </div>
            <?php
            $i++;
            endwhile;
            
			wp_reset_query();
            ?>
        </div>
    </div>
</section>