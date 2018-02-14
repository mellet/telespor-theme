<?php
/* Template Name: Price Template */

get_header();
?>

<div class="price-ekstra-info">
    <div class="mva-info">Alle priser er eks. mva.</div>
    <div class="mva-checkbox">Vis priser inkl. mva. <input id="mva-checkbox" type="checkbox" name="mva"></div>
</div>

<div class="jumbo price-jumbo">
    <h1>Priser</h1>
</div>

<div class="site-section-grey">

    <div class="telespor-wrap">

        <div class="price-old-info">
            Alle priser gjelder for våre nyeste enheter. Priser for eldre enheter og tilbehør finnes i <a href="http://nettbutikktelespor.mamutweb.com/">nettbutikken</a>.
        </div>

        <div class="ts-prices">

            <div class="ts-price-table">
                <h3>Radiobjella</h3>
                <div class="price"><span id="price-unit" class="big-price">999,-</span> / enhet</div>
                <div class="price-info">
                    <ul>
                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 1 batteri inkludert</li>
                        <li><em>Rabatterte priser tilgjengelig ved kjøp av flere enn 5 enheter. Bruk priskalkulator nederst på siden for å se priser.</em></li>
                    </ul>
                </div>
            </div>

            <div class="ts-price-table">
                <h3>Sesongabonnement</h3>
                <div class="price"><span id="price-season-sub" class="big-price">119,-</span> / enhet / sesong</div>
                <div class="price-info">
                    <ul>
                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 5 måneders abonnement</li>
                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Gratis support</li>
                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Brukerportal tilgang</li>
                    </ul>
                </div>
            </div>

            <div class="ts-price-table">
                <h3>Helårsabonnement</h3>
                <div class="price"><span id="price-year-sub" class="big-price">219,-</span> / enhet / år</div>
                <div class="price-info">
                    <ul>
                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 12 måneders abonnement</li>
                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Gratis support</li>
                        <li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Brukerportal tilgang</li>
                    </ul>
                </div>
            </div>

        </div>

        <h2 class="ts-extras-title">Tilbehør</h2>

        <div class="ts-price-extras">

            <div class="ts-price-table">
                <h3>Batteri</h3>
                <div class="price"><span id="price-battery" class="big-price">55,-</span> / stykk</div>
                <div class="price-info">
                    <ul>
                        <li>Varer i ca. 2000 målinger</li>
                    </ul>
                </div>
            </div>

            <div class="ts-price-table">
                <h3>SMS Varsling</h3>
                <div class="price"><span id="price-sms" class="big-price">150,-</span> / 50 meldinger</div>
                <div class="price-info">
                    <ul>
                        <li>Få SMS varsling dersom det går en alarm på radiobjella.</li>
                    </ul>
                </div>
            </div>

            <div class="ts-price-table">
                <h3>Peiler</h3>
                <div class="price"><span id="price-peiler" class="big-price">2 500,-</span> / enhet</div>
                <div class="price-info">
                    <ul>
                        <li>Dersom du trenger å finne et individ hvor radiobjella er vanskelig å lokalisere kan man bruke HF peiler for å finne nøyaktig posisjon.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="ts-price-cta-wrap">
            <a href="http://nettbutikktelespor.mamutweb.com/" target="_blank" class="ts-btn-simple">Bestill i nettbutikk</a>
        </div>

        <div class="ts-price-klaver">
            <h2>Klaver</h2>
            <p>I Norge er det 2 forskjellige leverandører med tilpassede klaver og vekter for Radiobjeller, vi anbefaler våre kunder derfor å ta kontakt med en av disse direkte for bestilling av halsbånd/klaver og motvekter.</p>

            <div class="klaver-wrap">
                <a href="http://osid.no" target="_blank" class="ts-btn-simple ts-btn-small">OS ID</a>
                <a href="http://moenbjollefabrikk.no" target="_blank" class="ts-btn-simple ts-btn-small">Moen Bjøllefabrikk</a>
            </div>



        </div>

    </div>

</div>

<div class="ts-price-calculator">
    <div class="telespor-wrap">
        <h2>Priskalkulator</h2>
        <form id="ts-price-calc">
            <div class="calc-name">Radiobjella m/batteri og abonnement</div>

            <div class="ts-price-calc-unit">

                <h3>Abonnement type</h3>
                <div class="calc-subsc">
                    <div class="calc-subsc-type"><input id="sub-season" type="radio" name="subscription" value="season" checked><span>Sesong</span></div>
                    <div class="calc-subsc-type"><input id="sub-year" type="radio" name="subscription" value="year"><span>Helårs</span></div>
                </div>

                <div class="calc-number">Antall <input id="calc-num" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="1"></input></div>
            </div>
            <div class="ts-btn-calc-submit">
                <input type="submit" id="calculate-prices" class="ts-btn" value="Kalkuler pris">
            </div>
        </form>

        <div class="price-results-max">
            <p>Kontakt telespor ved kjøp av over 250 enheter for egne priser.</p>
            <a href="<?php echo get_permalink( get_page_by_title( 'kontakt oss' ) ) ?>" class="ts-btn-simple contact-ts">Kontakt oss</a>
        </div>

        <div class="price-results">
            <!--<i class="fa fa-print print-icon" aria-hidden="true"></i>-->
            <h2>Priser</h2>


            <div class="price-results-section">
                <div class="price-section">
                    <span class="price-desc">Antall enheter</span><span class="price-sum pc-num-units">0</span>
                </div>
                <div class="price-section">
                    <span class="price-desc">Pris per enhet med batteri</span><span class="price-sum" id="pc-unit-price">0</span>
                </div>
                <div class="price-section">
                    <span class="price-desc">Pris per abonnement</span><span class="price-sum" id="pc-sub-price">0</span>
                </div>
            </div>


            <div class="price-results-section">
                <div class="price-section-title">
                    <h3> Pris 1. år </h3>
                    <em>Priser inkluderer enhet med batteri og abonnement.</em>
                </div>

                <div class="price-section">
                    <span class="price-desc"><span class="pc-num-units">-</span> Radiobjeller m/batteri</span><span class="price-sum" id="pc-first-unit">-</span>
                </div>
                <div class="price-section">
                    <span class="price-desc"><span class="pc-num-units">-</span> Abonnement</span><span class="price-sum" id="pc-first-sub">-</span>
                </div>
                <div class="price-section">
                    <span class="price-desc">Totalt (eks. mva)</span><span class="price-sum" id="pc-first-total">-</span>
                </div>
                <div class="price-section">
                    <span class="price-desc mva-desc">Mva</span><span class="price-sum" id="pc-first-mva">-</span>
                </div>
            </div>


            <div class="price-results-section">
                <div class="price-section-title">
                    <h3> Pris fra 2. år </h3>
                    <em>Priser inkluderer abonnement for alle enheten og batteriskift.</em>
                </div>

                <div class="price-section">
                    <span class="price-desc"><span class="pc-num-units">-</span> Abonnement</span><span class="price-sum" id="pc-second-sub">0</span>
                </div>

                <div class="price-section">
                    <span class="price-desc"><span class="pc-num-units">-</span> Batteri</span><span class="price-sum" id="pc-second-battery">0</span>
                </div>

                <div class="price-section">
                    <span class="price-desc">Totalt (eks. mva)</span><span class="price-sum" id="pc-second-total">0</span>
                </div>

                <div class="price-section">
                    <span class="price-desc">Mva</span><span class="price-sum" id="pc-second-mva">0</span>
                </div>

            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
