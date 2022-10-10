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
    
    
</section>
