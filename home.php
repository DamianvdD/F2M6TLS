<?php
get_header();
?>
<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
       <article>
           <h2><?php the_title() ?></h2>
           <?php the_content() ?>
           <a href="/f2m6tls/wordpress/shop"><button class="btn btn1">Reserveer Hier!</button></a>
           <br>
           <br>
       </article>
        <br>
        <br>


    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;

?>
<div class="footer">
    <div class="OpeningsTijd"
        <bold><h2>Openings Tijden</h2></bold>
        Dagelijks: 10.00 - 17.00 uur<br><br>

        Openingstijden Feestdagen<br>

        - Vrijdag 24 december: 10.00 - 17.00 uur<br>

        - Zaterdag 25 december: 11.00 - 17.00 uur<br>

        - Zondag 26 december: 10.00 - 17.00 uur<br>

        - oudjaarsdag: 10.00 - 17.00 uur<br>

        - nieuwjaarsdag: 11.00 - 17.00 uur<br>
    <div class="Info"
        <bold><h2>Bedrijfsuitje Prijzen</h2></bold>
        Tour:  14,99 p.p.<br>
        Tour en lunch:   39,99 p.p<br>
        Tour, lunch en schilder workshop: 89,99 p.p<br><br>

        <bold><h2>BLIJF OP DE HOOGTE</h2></bold>
        Krijg nu korting wanneer je je aanmeld voor de nieuwsbrief. Ook ben je zo op de hoogte van alle nieuwtjes
    </div>
    </div>
<div class="onderMenu">
    <div class="Online">
    <h1>ONLINE →</h1>
    </div>
    <div class="actueleTen">
        <h1>ACTUELE TENTOONSTELLING →</h1>
    </div>
    <div class="boekTicket">
        <h1>BOEK TICKET →</h1>
    </div>
</div>

</div>
<?php
get_footer();
?>


