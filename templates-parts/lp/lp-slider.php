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
                    <h1 ><?php echo $title; ?></h1>
                    <span class="line"></span>
                    <p ><?php echo $subtitle; ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="bg" style="background-image: url(<?php echo $zd; ?>);"></div> -->
    <!-- <img class="bg-slider" src="<?php echo get_template_directory_uri() ?>/src/img/slider.png" alt="Technologie dla Biznesu"> -->
    <svg class="border" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="963px"
        height="97.5px" viewBox="0 0 963 97.5" style="enable-background:new 0 0 963 97.5;" xml:space="preserve">
    <polygon fill='#FFFFFF' points="0,0.5 100,0.5 100,76.5 176.5,0 963,0 963,97.5 0,97.5 "/>
    </svg>
    
</section>
