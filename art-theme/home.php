<?php
get_header();
?>
<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
       <article>


           <h2><?php the_title() ?></h2>
        <?php the_content() ?>
        <a href="<?php the_permalink()?>">Lees Meer</a>
        </article>


    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;

?>
<?php
get_footer();
?>


