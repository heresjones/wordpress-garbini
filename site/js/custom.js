/**
 * Created by cjones on 2/17/16.
 */

var parallax = new Parallax('.parallax', {});
parallax.on('image:loaded', function () {
    console.log(arguments)
});
parallax.on('images:loaded', function () {
    console.log(arguments)
});
parallax.init();

$(window).load(function () {

    $('.main-nav li a').bind('click', function (event) {
        var $anchor = $(this);

        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 75
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});


$(window).load(function () {


    var $container = $('.portfolioContainer'),
        $body = $('body'),
        colW = 375,
        columns = null;


    $container.isotope({
        // disable window resizing
        resizable: true,
        masonry: {
            columnWidth: colW
        }
    });

    $(window).smartresize(function () {
        // check if columns has changed
        var currentColumns = Math.floor(( $body.width() - 30 ) / colW);
        if (currentColumns !== columns) {
            // set new column count
            columns = currentColumns;
            // apply width to container manually, then trigger relayout
            $container.width(columns * colW)
                .isotope('reLayout');
        }

    }).smartresize(); // trigger resize to set container width
    $('.portfolioFilter a').click(function () {
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

            filter: selector,
        });
        return false;
    });

});


wow = new WOW(
    {
        animateClass: 'animated',
        offset: 100
    }
);
wow.init();
document.getElementById('').onclick = function () {
    var section = document.createElement('section');
    section.className = 'wow fadeInDown';
    this.parentNode.insertBefore(section, this);
};


$(document).ready(function (e) {
    $('#test').scrollToFixed();
    $('.res-nav_click').click(function () {
        $('.main-nav').slideToggle();
        return false

    });

});

$(document).on('click', '.navbar-collapse.in', function (e) {
    if ($(e.target).is('a')) {
        $(this).collapse('hide');
    }
});
