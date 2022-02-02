<?php
get_header();
?>
<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <?php if(has_post_thumbnail()):?>
            <img src="<?php echo get_the_post_thumbnail();?>" />
        <?php endif ?>
        <h2><?php the_title() ?></h2>
        <?php the_content() ?>
        <a href="<?php the_permalink()?>">Lees Meer</a>
        <hr>

    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;

?>
<?php
get_footer();
?>


