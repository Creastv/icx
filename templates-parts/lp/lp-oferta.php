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
        <?php if($title) { ?>
        <div class="row row-flex">
            <div class="col-1">
                <div class="title-section">
                    <h2 class="title"><?php echo $title; ?></h2>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="row row-flex">
        <?php if( have_rows('oferty') ): ?>
        <?php while( have_rows('oferty') ): the_row(); 
            $image = get_sub_field('zdjecie');
            $title = get_sub_field('tytul');
            $desc = get_sub_field('opis');
            $link = get_sub_field('link');
        ?>
        <div class="col-4">
            <article class="card-oferta">
                <header>
                    <h2><?php echo $title; ?></h2>
                </header>
                <div class="content">
                        <div class="img">
                            <a href="<?php echo $link; ?>">
                            <?php
                                if( $image ) {
                                    echo wp_get_attachment_image( $image, 'oferta' );
                                }
                            ?>
                            </a>
                        </div>
                       <?php echo $desc; ?>
                </div>
                <div class="cta">
                    <a href="<?php echo $link; ?>" class="btn"><span>Więcej</span> <span> ></span></a>
                </div>
            </article>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>