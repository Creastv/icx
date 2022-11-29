<?php
$title = get_field('tytul_onas');
$opis = get_field('opis_onas');
$opis2= get_field('opis2_onas');
?>

<section id="o-nas" class="o-nas" data-aos="fade-right" data-aos-duration="1000">
    <div class="conteiner">
        <div class="row row-flex">
            <div class="col-2">
                 <?php if($title) {?>
                <div class="wrap-content">
                    <div class="space"></div>
                    <div class="title-section">
                        <h2 class="title"><?php echo $title; ?></h2>
                    </div>
                </div>
                <?php } ?>
                <?php if($opis) {?>
                <div class="wrap-content">
                    <div class="content">
                        <p><?php echo $opis; ?></p>
                    </div>
                </div>
                <?php } ?>
                <?php if($opis2) {?>
                 <div class="wrap-content">
                    <div class="space">
                        <span class="arrow"></span>
                    </div>
                    
                    <div class="content">
                        <p><?php echo $opis2; ?></p>
                    </div>
                 </div>
                <?php } ?>
            </div>
            <div class="col-2">
                  <img class="img-o-nas" src="<?php echo get_template_directory_uri() ?>/src/img/o-nas.png" alt="Technologie dla Biznesu">
            </div>
        </div>
    </div>
</section>