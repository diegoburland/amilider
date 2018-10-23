$(document).ready(function () {
    
    
    $('.carousel').carousel();

    var lastWidth = $(window).width();

$(window).resize(function(){
   if($(window).width() > 768){
      //execute code here.
      // Custom function which toggles between sticky class (is-sticky)
    var stickyToggle = function (sticky, stickyWrapper, scrollElement) {

        var stickyHeight = sticky.outerHeight();

        var stickyTop = stickyWrapper.offset().top;
        if (scrollElement.scrollTop() >= stickyTop) {
            stickyWrapper.height(stickyHeight);
            sticky.addClass("is-sticky");
            $('.container-nav').addClass('container-nav-i');
            $('.menu-collapse-db').addClass('navbar-collapse-t');
            $('.brand-logo').addClass('ini');
            $('.brand-menu').addClass('ini');
            $('.navar-db').addClass('box-shadow');
            $('.navbar-collapse').css({'border-top': 'none'})
        }
        else {
            sticky.removeClass("is-sticky");
            stickyWrapper.height('auto');
            $('.container-nav').removeClass('container-nav-i');
            $('.menu-collapse-db').removeClass('navbar-collapse-t');
            $('.brand-logo').removeClass('ini');
            $('.brand-menu').removeClass('ini');
            $('.navar-db').removeClass('box-shadow');
            $('.navbar-collapse').css({'border-top': 'solid 2px #002685'})
        }
    };

    // Find all data-toggle="sticky-onscroll" elements
    $('[data-toggle="sticky-onscroll"]').each(function () {
        var sticky = $(this);
        var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
        sticky.before(stickyWrapper);
        sticky.addClass('sticky');

        // Scroll & resize events
        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
            stickyToggle(sticky, stickyWrapper, $(this));
        });

        // On page load
        stickyToggle(sticky, stickyWrapper, $(window));
    });

   }
}) 
});