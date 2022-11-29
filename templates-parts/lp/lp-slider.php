<?php 
$zdj = get_field('zdjecie_hero');
$title = get_field('tytul_hero');
$subtitle = get_field('subtytul_hero');

if($zdj){
     $zd = $zdj;
    
} else {
    $zd = get_template_directory_uri().'/src/img/slider.png';
}
?>
<section id="" class="slider" style="background-image: url(<?php echo $zd; ?>);"  data-aos="fade-right" data-aos-duration="300">
    <div class="container">
        <div class="row">
            <div class="content-wraper">
                <div class="content">
                    <?php if($title) { ?>
                    <h1 ><?php echo $title; ?></h1>
                    <span class="line"></span>
                    <?php } ?>
                    <?php if($subtitle) { ?>
                    <p ><?php echo $subtitle; ?></p>
                    <?php } ?>
                </div>
            </div>
            <svg class="tringle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="964px"
                    height="961px" viewBox="0 0 964 961" style="enable-background:new 0 0 964 961;" xml:space="preserve">
                <path fill="#09468E" opacity="0.78" d="M0,0h964L3,961C3,961,3-3,0,0z"/>
            </svg>
        </div>
    </div>
</section>
