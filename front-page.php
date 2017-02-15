<?php

get_header(); ?>

<section class="telespor-front-page-jumbo">

    <div class="telespor-jumbo-wrapper">
        <div class="telespor-description">
            <h1><?php the_field('welcomeTextFat') ?> <span><?php the_field('welcomeTextSkinny') ?></span></h1>
            <p>Telespor AS utvikler og selger produkter og tjenester
                for elektronisk overvåkning av husdyr på beite.</p>
            <a href="<?php echo get_permalink( get_page_by_title( 'produkt' ) ) ?>" class="produkt-cta">VÅRE PRODUKTER</a>
        </div>
    </div>

</section>

<section class="telespor-features">

    <h2><?php the_field('feature_title') ?></h2>

    <div class="feature-wrapper">

        <div class="single-feature">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/gps.svg" alt="" />
            <div class="single-feature-description">
                <?php the_field('feature_one') ?>
            </div>
        </div>

        <div class="single-feature">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/pulse.svg" alt="" />
            <div class="single-feature-description">
                <?php the_field('feature_two') ?>
            </div>
        </div>

        <div class="single-feature">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/sync.svg" alt="" />
            <div class="single-feature-description">
                <?php the_field('feature_three') ?>
            </div>
        </div>

        <div class="single-feature">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/sms.svg" alt="" />
            <div class="single-feature-description">
                <?php the_field('feature_four') ?>
            </div>
        </div>

        <div class="single-feature">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/weather.svg" alt="" />
            <div class="single-feature-description">
                <?php the_field('feature_five') ?>
            </div>
        </div>

        <div class="single-feature">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/support.svg" alt="" />
            <div class="single-feature-description">
                <?php the_field('feature_six') ?>
            </div>
        </div>

    </div>

    <div class="product-cta-wrapper">
        <a href="<?php echo get_permalink( get_page_by_title( 'produkt' ) ) ?>" class="ts-btn-simple">Les mer om radiobjella</a>
    </div>


</section>

<section class="telespor-news">

    <h2>Nyheter</h2>

    <div class="telespor-wrap news-list">
        <?php
        $newsArticles = new WP_Query( array('category_name' => 'Nyheter', 'posts_per_page' => 3) );

        if ($newsArticles->have_posts() ) :
            while ($newsArticles->have_posts() ) : $newsArticles->the_post(); ?>
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


</section>

<div class="user-dashboard-wrap">
    <a href="http://telespor.org" class="ts-btn ts-btn-big">Innlogging til sporingsside</a>
</div>

<?php

get_footer();

?>
