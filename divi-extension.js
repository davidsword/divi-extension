jQuery(window).ready(function() {

    // in the DIVI theme, add a dynamic YEAR in the footer
    if (jQuery('#footer-info').length > 0) {
        var currentTime = new Date();
        jQuery('#footer-info').html( jQuery('#footer-info').html().replace('%%YEAR%%',currentTime.getFullYear()) );
    }

    // Change the heading on the DIVI theme to be better on 404's
    if (jQuery('body').hasClass('error404 et_divi_theme')) {
        jQuery('article .entry h1').html("ERROR 404 - Page Not Found");
    }

});
