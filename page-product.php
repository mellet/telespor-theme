<?php
/* Template Name: Product Template */

get_header();
?>

<div class="jumbo product-jumbo">
    <h1>Produkt</h1>
</div>

<div class="product-information">

    <div class="telespor-wrap">

        <div class="product-info-wrap">

            <h2>Radiobjella</h2>

            <div class="product-image">
                <?php

                $image = get_field('product_image');

                if( !empty($image) ): ?>

                	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
            </div>

        </div>

    </div>

</div>

<div class="product-feature-section">
    <div class="product-mini-feature-wrap telespor-wrap">
        <div class="product-feature">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/satelite.svg" alt="" width="150px" />
            <?php the_field('info_gps') ?>
        </div>

        <div class="product-feature">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/sheepsync.svg" alt="" width="150px" />
            <?php the_field('info_communication') ?>
        </div>

        <div class="product-feature">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/mobile.svg" alt="" width="150px" />
            <?php the_field('info_sms') ?>
        </div>

        <div class="product-feature">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/water.svg" alt="" width="120px" />
            <?php the_field('info_water') ?>
        </div>

    </div>
</div>


<div class="product-info-section">
    <div class="telespor-wrap">
        <div class="info-description">
            <div class="description">
                <?php the_field('product_description') ?>
            </div>
        </div>
    </div>
</div>

<div class="product-specifications">

    <div class="telespor-wrap">

        <div class="product-specs">

            <h2 class="spec-title">Tekniske spesifikasjoner</h2>
            <div class="spec-wrap">
                <div class="spec-section">
                    <div class="spec-mini-section spec-size">
                        <h3>Størrelse</h3>
                        <div class="spec-size-ilu">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/enhets_maal.png">
                            <span class="spec-size-height">4.9cm</span>
                            <span class="spec-size-depth">5.9cm</span>

                            <span class="spec-size-width">3.5cm</span>

                            <span class="spec-size-bandwidth">6.0cm</span>
                            <span class="spec-size-bandheight">0.36cm</span>
                        </div>
                        <p>Vekt: 110 gram (m/batteri)</p>
                    </div>

                    <div class="spec-mini-section spec-sensor">
                        <h3>Sensorer</h3>
                        <ul>
                            <li>GPS</li>
                            <li>Bevegelsessensor</li>
                            <li>HF</li>
                        </ul>
                    </div>
                </div>

                <div class="spec-section">
                    <div class="spec-mini-section spec-battery">
                        <h3>Batteri</h3>
                        <p>Enheten er utstyrt med utskiftbart batteri.<br>
                        Vi anbefaler at du bytter batteri etter endt sesong.</p>
                        <ul>
                            <li>Levetid: Omtrent 2000 målinger</li>
                            <li>Type: Lithium</li>
                            <li>Størrelse: A</li>
                        </ul>
                    </div>

                    <div class="spec-mini-section spec-weather">
                        <h3>Vanntett</h3>
                        <ul>
                            <li>Vanntett inntil 1m dybde</li>
                        </ul>
                    </div>

                    <div class="spec-mini-section spec-weather">
                        <h3>Krav til omgivelser</h3>
                        <ul>
                            <li>Driftstemperatur: -32°C til 60°C</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<?php get_footer(); ?>
