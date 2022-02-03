<?php
get_header();
?>
<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
       <article>


           <h2><?php the_title() ?></h2>
        <?php the_content() ?>
        <a href="<?php the_permalink()?>"><button class="btn btn1">Reserveer Hier!</button></a>
           <br>
           <br>
       </article>


    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;

?>
<?php
get_footer();
?>


