/*
 * 1.0 COMMON FUNCTIONS
 */

// Price calculator
function calculate_price(unitprice, subprice, batterypric, num_units) {
    var price = (unitprice + subprice + batterypric) * num_units;
    return price;
}

// Check if number is float
function isFloat(n){
    return Number(n) === n && n % 1 !== 0;
}

function pricify(price) {
    var new_price;
    /* If float set to 2 decimals */
    if (isFloat(price)){
        new_price = price.toFixed(2);
        new_price = new_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");  // Add spacing to thousans
        new_price = new_price.replace(".", ",");
    } else {
        new_price = price;
        new_price = new_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");  // Add spacing to thousans
        new_price = new_price + ',-';  // Add moneymarker
    }

    return new_price;
}

function add_mva(price){
    return pricify(price * 1.25);
}

/*
 * 2.0 NAVIGATION
 */

function showNav(){
    event.stopPropagation(); // Stop clicks down the chain
    jQuery(".telespor-header-main-nav").css("right", "0px");
    jQuery("body").css("position", "fixed");
    jQuery("body").css("right", "0");
    jQuery("body").css("left", "0");
    jQuery("body").addClass("nav-open");
}

function hideNav(){
    event.stopPropagation(); // Stop clicks down the chain
    jQuery(".telespor-header-main-nav").css("right", "-250px");
    jQuery("body").css("position", "relative");
    jQuery('body').removeClass('nav-open');
}

// NAV Clocse Click
jQuery( ".telespor-close-nav" ).click(function() {
    hideNav();
});

// On open click
jQuery( ".telespor-mobile-hamburger" ).click(function() {
    showNav();
});


jQuery('body').on('click touchstart',function(){
    if (jQuery("body").hasClass("nav-open")){
        hideNav();
    }
});


jQuery('.telespor-header-main-nav').on('click touchstart touchmove',function(e){
    e.stopPropagation();
});


/*
 * 3.0 PRICE CALCULATOR
 */

// Price list
var price_unit = 999;
var price_season_sub = 119;
var price_year_sub = 175;
var price_battery = 55;
var price_sms = 150;
var price_peiler = 2500;

// MVA Enable/Disable
jQuery('#mva-checkbox').click(function() {

    if(jQuery('#mva-checkbox').is(':checked')) {
        jQuery('#price-unit').text(add_mva(price_unit));
        jQuery('#price-season-sub').text(add_mva(price_season_sub));
        jQuery('#price-year-sub').text(add_mva(price_year_sub));
        jQuery('#price-battery').text(add_mva(price_battery));
        jQuery('#price-sms').text(add_mva(price_sms));
        jQuery('#price-peiler').text(add_mva(price_peiler));
    }
    else {
        jQuery('#price-unit').text(pricify(price_unit));
        jQuery('#price-season-sub').text(pricify(price_season_sub));
        jQuery('#price-year-sub').text(pricify(price_year_sub));
        jQuery('#price-battery').text(pricify(price_battery));
        jQuery('#price-sms').text(pricify(price_sms));
        jQuery('#price-peiler').text(pricify(price_peiler));
    }

});

// Allow pressing enter to submit form
jQuery('#calc-num').keypress(function (e) {
  if (e.which === 13) {
      jQuery('#calculate-prices').focus().click();
      jQuery("#calculate-prices").blur();
  }
});

// Calculate price form
jQuery('#ts-price-calc').submit(function() {
    var unit_total, sub_total, battery_total, first_year_total, first_year_mva;

    jQuery('.price-results').hide();
    jQuery('.price-results-max').hide();

    var current_price = 0;
    var sub_price = 0; // 1 = Season, 2 = Year
    var num_units = jQuery('#calc-num').val();

    //Detect subscription type
    if(jQuery('#sub-season').is(':checked')) { sub_price = 119; }
    else { sub_price = 175; }

    jQuery('.price-results').show();

    // Select price for currently selected number of units
    if (num_units > 99)         {current_price = 850;} // 100+
    else if (num_units > 49)    {current_price = 899.1;} // 50+
    else if (num_units > 24)    {current_price = 924.08;} // 25+
    else if (num_units > 9)     {current_price = 949;} // 10+
    else if (num_units > 4)     {current_price = 969;} // 5+
    else                        {current_price = 999;} // Normal price

    unit_total = calculate_price(current_price, 0, 0, num_units);
    sub_total = calculate_price(0, sub_price, 0, num_units);
    battery_total = calculate_price(0, 0, price_battery, num_units);

    first_year_total = unit_total + sub_total;
    first_year_mva = ((unit_total + sub_total) * 0.25);

    /* Info */
    jQuery('.pc-num-units').text(num_units);
    jQuery('#pc-unit-price').text( pricify(current_price) );
    jQuery('#pc-sub-price').text( pricify(sub_price) );

    /* First year price */
    jQuery('#pc-first-unit').text( pricify(unit_total) );
    jQuery('#pc-first-sub').text( pricify(sub_total) );
    jQuery('#pc-first-total').text( pricify(first_year_total) );
    jQuery('#pc-first-mva').text( pricify(first_year_mva) );

    /* Second year price */
    jQuery('#pc-second-sub').text( pricify(sub_total) );
    jQuery('#pc-second-battery').text( pricify(battery_total) );
    jQuery('#pc-second-total').text( pricify(sub_total+battery_total) );
    jQuery('#pc-second-mva').text( pricify((sub_total+battery_total) * 0.25) );

    return false;
});
