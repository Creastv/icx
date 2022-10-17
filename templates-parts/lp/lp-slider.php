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
            <svg class="tringle" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="964px"
                    height="961px" viewBox="0 0 964 961" style="enable-background:new 0 0 964 961;" xml:space="preserve">
                <style type="text/css">
                    .st0{opacity:0.78;fill:#09468E;}
                </style>
                <defs>
                </defs>
                <path class="st0" d="M0,0h964L3,961C3,961,3-3,0,0z"/>
                </svg>
        </div>
    </div>
    <!-- <div class="bg" style="background-image: url(<?php echo $zd; ?>);"></div> -->
    <!-- <img class="bg-slider" src="<?php echo get_template_directory_uri() ?>/src/img/slider.png" alt="Technologie dla Biznesu"> -->
    
    <!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In  -->


</section>
