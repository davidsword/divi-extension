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

    // middle-me
    resize_banner();
    function resize_banner() {
		jQuery('.divi-middle-me').each(function(){
			heightofself = jQuery(this).height()
			heightofparent = jQuery(this).parent().height()
			dif = Math.floor(((heightofparent) / 2) - (heightofself/2) )
			jQuery(this).css('margin-top',dif+'px')
		});
    }
    jQuery(window).bind('resizeEnd', function() { resize_banner(); });
    jQuery(window).resize(function() {
        if(this.resizeTO) clearTimeout(this.resizeTO);
        this.resizeTO = setTimeout(function() {
            jQuery(this).trigger('resizeEnd');
        }, 500);
    });


});
