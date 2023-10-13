$(document).ready(function() {
    $(document).on("click", "a", function(e) {
        e.preventDefault();
        //this == the link that was clicked
        var href = $(this).attr("href");
        $('#loadpage').css({ height: '100vh'});
        setTimeout(() => {
            if ($(this).attr('data-toggle')=='all-menu') {
              $('#loadpage').html(
                '<a>ggggggg</a>'
              );  
            } else {
                window.location.href = href;
                setTimeout(() => {
                    $('#loadpage').css({ height: '0vh'});
                    $('#loadpage').html('');  
                }, 2000);
            }
        }, 800);
    });
    $('#loadpage').css({ height: '0vh'});
    $('#loadpage').html(''); 

    $("#pinsu-main-slide").owlCarousel({
        items:1,
        loop:true,
        margin:0,
        responsiveClass:true,
        autoplay:true,
        autoplayHoverPause:false
    });
    $("#pinsu-company-slide").owlCarousel({
        items:1,
        loop:true,
        margin:0,
        responsiveClass:true,
        autoplay:true,
        autoplayHoverPause:false
    });

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