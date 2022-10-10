<?php
$title = get_field('tytul_onas');
$opis = get_field('opis_onas');
$opis2= get_field('opis2_onas');
?>

<section id="o-nas" class="o-nas" data-aos="fade-right" data-aos-duration="1000">
    <div class="conteiner">
        <div class="row row-flex">
            <div class="col-2">
                <div class="wrap-content">
                    <div class="space"></div>
                    <div class="title-section">
                        <h2 class="title"><?php echo $title; ?></h2>
                    </div>
                </div>
            
                <div class="wrap-content">
                    <div class="content">
                        <p><?php echo $opis; ?></p>
                    </div>
                </div>
                 <div class="wrap-content">
                    <div class="space">
                        <span class="arrow"></span>
                    </div>
                    
                    <div class="content">
                        <p><?php echo $opis2; ?></p>
                    </div>
                 </div>
            </div>
            <div class="col-2">
                  <img class="img-o-nas" src="<?php echo get_template_directory_uri() ?>/src/img/o-nas.png" alt="Technologie dla Biznesu">
            </div>
        </div>
    </div>
    <svg class="border" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="963px"
        height="97.5px" viewBox="0 0 963 97.5" style="enable-background:new 0 0 963 97.5;" xml:space="preserve">
    <polygon fill='#FFFFFF' points="0,0.5 100,0.5 100,76.5 176.5,0 963,0 963,97.5 0,97.5 "/>
    </svg>
</section>