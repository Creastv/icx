<?php
$title = get_field('tytul_kli');
?>

<section id="klienci" class="klienci">
        <div class="row-flex">
            <div class="col-1 text-center ornament">
                <div class="title-section">
                    <h2 class="title"><?php echo $title; ?></h2>
                </div>
            </div>
        </div>
        <div class="row-flex">
            <div class="col-1">
                <?php if( have_rows('klienci') ): ?>
                <div class=" swiper carousel kl">
                    <div class="swiper-wrapper">
                    <?php while( have_rows('klienci') ): the_row(); 
                        $image = get_sub_field('logo'); ?>
                        <div class="swiper-slide">
                            <div class="logo">
                                 <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
</section>