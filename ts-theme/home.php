<?php

get_header();
?>

<div class="jumbo">
    <h1>Nyheter</h1>
</div>

<div class="page-wrap news-list">

<?php

$newsArticles = new WP_Query( array('category_name' => 'Nyheter', 'posts_per_page' => 10) );


if ( $newsArticles->have_posts() ) :
    while ( $newsArticles->have_posts() ) : $newsArticles->the_post(); ?>

    <?php $thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>


        <article class="ts-news-item">
            <div class="ts-news-image" style="background-image:url(<?php echo $thumbnail[0]; ?>);background-repeat:no-repeat;background-size:cover;background-position:center;">
                <span class="darken-image"></span>
                <h2><a href="<?php echo get_permalink(); ?>" class="ts-news-link"><?php the_title(); ?></a></h2>
            </div>
            <p class="ts-news-article-time"><?php the_date('j. F Y'); ?></p>
            <?php the_excerpt(); ?>
        </article>

<?php
    endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
?>

</div>

<?php get_footer(); ?>
