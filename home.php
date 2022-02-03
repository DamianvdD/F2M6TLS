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
<div class="OpeningsTijd">
    <bold><h2>Openings Tijden</h2></bold>
    Dagelijks: 10.00 - 17.00 uur<br>

    Openingstijden feestdagen<br>

    -Vrijdag 24 december: 10.00 - 17.00 uur<br>

    -Zaterdag 25 december: 11.00 - 17.00 uur<br>

    -Zondag 26 december: 10.00 - 17.00 uur<br>

    -oudjaarsdag: 10.00 - 17.00 uur<br>

    -nieuwjaarsdag: 11.00 - 17.00 uur<br>
</div>
<?php
get_footer();
?>


