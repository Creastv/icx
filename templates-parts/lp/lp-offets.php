<?php if( have_rows('oferty') ): ?>

    <?php while( have_rows('oferty') ): the_row(); 
        $title = get_sub_field('tytul');
        $desc = get_sub_field('opis');
        $anchor = get_sub_field('anchor');
        ?>

        <section class="offer" id="<?php echo $anchor; ?>">
            <div class="offer__header">
                <h2><?php echo $title; ?></h2>
            </div>
            <div class="offer__content">
                <?php echo $desc; ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>