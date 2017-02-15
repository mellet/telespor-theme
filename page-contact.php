<?php
/* Template Name: Contact Template */

get_header();
?>

<div class="jumbo contact-jumbo">
    <h1>Kontakt oss</h1>
</div>

<div class="site-section-grey">

    <div class="telespor-wrap">
        <div class="ts-grid margin-t-b-50">
            <div class="ts-1of2">
                <div class="contact-box contact-phone">
                    <div class="contact-box-title">
                        <h2>Telefon Support</h2>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>

                    <p>Åpent mandag - fredag, 08.00 - 16.00</p>
                    <p class="phone-number"><span class="country-code">+47</span> 90 47 46 00</p>
                    <p class="warning">NB! Vi kan ikke motta SMS.</p>
                </div>

                <div class="contact-box contant-mail">
                    <div class="contact-box-title">
                        <h2>Postadresse</h2>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <p>Sykehusveien 23<br />
                    Postboks 6427<br />
                    9294 Tromsø</p>
                </div>
            </div>
            <div class="ts-2of2">
                <div class="ts-contact-form">
                    <?php the_field('contact_form') ?>
                </div>
            </div>
        </div>
    </div>

</div>

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBB67ypVyfV3-nukbVKFj21Rb4Z8dCFNig'></script>

<div style='overflow:hidden;height:400px;width:100%;'>
    <div id='gmap_canvas' style='height:400px;width:100%;'></div>
    <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
</div>

<script type='text/javascript'>
    function init_map(){
        var myOptions = {
            zoom:15,
            scrollwheel: false,
            navigationControl: false,
            mapTypeControl: false,
            scaleControl: false,
            streetViewControl: false,
            center:new google.maps.LatLng(69.6816054,18.987787000000026),
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [{"featureType":"all","stylers":[{"saturation":0},{"hue":"#e7ecf0"}]},{"featureType":"road","stylers":[{"saturation":-70}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"visibility":"simplified"},{"saturation":-60}]}]
        };

        map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);

        marker = new google.maps.Marker({
            map: map,position: new google.maps.LatLng(69.6816054,18.987787000000026)
        });

        infowindow = new google.maps.InfoWindow({
            content:'<strong>Telespor AS</strong>'});
            google.maps.event.addListener(marker, 'click', function(){
                infowindow.open(map,marker);
            });
    }
    google.maps.event.addDomListener(window, 'load', init_map);

</script>

<?php get_footer(); ?>
