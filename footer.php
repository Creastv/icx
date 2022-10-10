</div>
    <div id="kontakt" class="row row-flex">
        <div class="col-1">
            <div class="title-section">
                <h2 class="title">Kontakt</h2>
            </div>
        </div>
    </div>

</main>
 <footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
        <div class="container">
            <div class="row-left row-flex left-right">
                <div class="col-2 left">
                    <div class="row-flex">
                        <div class="col-2">
                            <div class="wrap-footer-inf">
                                <?php do_action( 'before_sidebar' ); ?>
                                <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?><?php endif; ?>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="wrap-footer-inf">
                                <?php do_action( 'before_sidebar' ); ?>
                                <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?><?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 right">
                    <?php echo do_shortcode('[contact-form-7 id="14" title="Formularz 1"]'); ?> 
                </div>
            </div>
        </div>
</footer>
<span id="go-to-top" ></span>
<?php wp_footer(); ?>
<script>
    const setMarginSection = function(){
        const border = document.querySelector('svg.border').clientHeight;
        const onas = document.querySelector('.o-nas');
        onas.style.marginTop = - border+ 'px';
        console.log(border)
    }
    setMarginSection();
   
    window.addEventListener('resize', setMarginSection);
</script>
</body>
</html>