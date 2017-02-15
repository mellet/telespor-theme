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
            <h4>GPS Sporing</h4>
            <p>Radiobjella sender sin posisjon slik at du kan se hvor dyret ditt er og hvor det har vært.
            Du velger selv hvor ofte du vil at posisjonen skal oppdateres, fra hvert 5. min og oppover.</p>
        </div>

        <div class="product-feature">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/sheepsync.svg" alt="" width="150px" />
            <h4>Toveis kommunikasjon</h4>
            <p>Du kan når som helst endre på hvor ofte radiobjella skal send sin posisjon eller hvor sensitiv alarmene skal være. Hver gang radiobjella sender sin posisjon vil den hente de oppdaterte innstillingene du har valgt.</p>
        </div>

        <div class="product-feature">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/mobile.svg" alt="" width="150px" />
            <h4>SMS Varsling</h4>
            <p>Velg og bli varslet via SMS dersom det skjer noe med radiobjella. Velg selv om du vil bli varslet om lavt batteri, ingen bevegelse eller at dyret er utenfor dekning.</p>
        </div>

        <div class="product-feature">
            <img src="<?php echo get_bloginfo('template_directory');?>/images/icons/water.svg" alt="" width="120px" />
            <h4>Vanntett</h4>
            <p>Radiobjella er vanntett og tåler all slags vær eller om dyret ditt bestemmer seg for å ta seg en svømmetur.</p>
        </div>

    </div>
</div>


<div class="product-info-section">
    <div class="telespor-wrap">
        <div class="info-description">
            <div class="description">
                <h2>Bevegelsessensor</h2>
                <p>Hver enhet har innbygd bevegelsessensor som utløses dersom noe uventet skulle skje.</p>

                <p>Radiobjella er utstyrt med 3 alarmer:</p>
                <p class="alert-types">
                    <span class="alert-type"><i class="fa fa-plus" aria-hidden="true"></i><span>Dyret har ikke beveget seg de siste 3 timene.</span></span>
                    <span class="alert-type"><i class="fa fa-plus" aria-hidden="true"></i><span>Dyret har vært på samme posisjon i en lengre periode.</span></span>
                    <span class="alert-type"><i class="fa fa-plus" aria-hidden="true"></i><span>Radiobjella har ikke klart å sende sin posisjon de siste 2 rapportene.</span></span>
                </p>

                <p>Følsomheten på disse kan man justere dersom et dyr er naturlig mindre aktiv.<br />
                Du velger selv om du vil bli varslet via e-post eller SMS<sup>*</sup> dersom en alarm blir utløst.</p>
                <p class="astrix-notice">* Ved SMS medfølger ekstra gebyrer.</p>
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
