$(document).ready(function(){
    var windowWidth = $(window).width();

    if(windowWidth > 1025)
    {
        $(window).scroll(function(){
            var sticky = $('.sticky'),
                scroll = $(window).scrollTop();

            if (scroll >= 140) sticky.addClass('fixed');
            else sticky.removeClass('fixed');
        });

    }

});