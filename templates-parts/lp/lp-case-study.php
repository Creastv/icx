<?php
$title = get_field('tytul_cs');
?>

<section id="case-study" class="case-study">
 <div class="container">
    <div class="row row-flex">
        <div class="col-1">
            <div class="title-section">
                <h2 class="title"><?php echo $title; ?></h2>
            </div>
        </div>
    </div>
    <div class="row row-flex">
        <div class="col-1">
            <?php if( have_rows('case_study') ): ?>
            <div class="swiper carousel cs ">
                <div class="swiper-wrapper">
                <?php while( have_rows('case_study') ): the_row(); 
                $image = get_sub_field('grafika');
                $tyt = get_sub_field('tutul');
                $opis = get_sub_field('opis');
                $pdf = get_sub_field('pdf');

                ?>
                    <div class="swiper-slide">
                        <div class="case">
                            <div class="wrap-case">
                                <div class="left">
                                    <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                                </div>
                                <div class="right">
                                    <div class="header">
                                    <h3><?php echo $tyt; ?></h3>
                                    </div>
                                    <p><?php echo $opis; ?></p>
                                    <a href="<?php echo $pdf['url']; ?>" target="_blank" class="btn">Pobierz PDF ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                 <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
 </div>
</section>