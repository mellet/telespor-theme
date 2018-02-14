<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <article>
            <?php the_post_thumbnail(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="article_time"><?php the_time(); ?></p>
            <p><?php the_excerpt(); ?></p>
        </article>

<?php
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;

get_footer();

?>
