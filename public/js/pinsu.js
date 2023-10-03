$(document).ready(function() {
    // Function to update screen width and height
    function updateScreenInfo() {
        var screenWidth = $(window).width();
        var screenHeight = $(window).height();
        // $("#screen-info").text("Screen Width: " + screenWidth + "px, Screen Height: " + screenHeight + "px");
        if (screenWidth <= 1180) {
            $('.pinsu-nav .pinsu-nav-menu .pinsu-nav-item').each(function(){
                if ($(this).hasClass('pxl')) {
                    $(this).hide();
                };
            });
            $('.pinsu-navbar-logo').css('margin-left','5%');
            $('.pinsu-nav-menu').css('margin-right','5%');
        } else {
            $('.pinsu-nav .pinsu-nav-menu .pinsu-nav-item').each(function(){
                if ($(this).hasClass('pxl')) {
                    $(this).show();
                };
            });
            $('.pinsu-navbar-logo').css('margin-left','10%');
            $('.pinsu-nav-menu').css('margin-right','10%');
        }
    }

    // Initial screen info
    updateScreenInfo();

    // Attach the resize event handler
    $(window).resize(function() {
        // Update screen info when the window is resized
        updateScreenInfo();
    });
});