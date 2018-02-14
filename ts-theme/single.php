<?php

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

    <div class="jumbo jumbo-single-post" style="background-image: url('<?php echo $thumb['0'];?>');background-size: cover;background-position: center;">
        <div class="jumbo-darken"></div>
        <div class="jubo-content">
            <div class="telespor-wrap">
                <h2><?php the_title(); ?></h2>
                <p class="article-time"><?php the_time('j. F Y'); ?></p>
            </div>
        </div>

    </div>

    <div class="telespor-wrap">

            <article class="single-news-article">
                <p><?php the_content(); ?></p>
            </article>

    </div>
<?php endwhile; ?>

<?php get_footer(); ?>
