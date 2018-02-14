<?php

get_header();
?>

<div class="jumbo">
    <h1><?php the_title(); ?></h1>
</div>

<div class="site-section">

    <div class="telespor-wrap">
    <?php

    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>

            <article>
                <p><?php the_content(); ?></p>
            </article>

    <?php
        endwhile;
        else :
            _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
        endif;
    ?>
    </div>

</div>

<?php get_footer(); ?>
