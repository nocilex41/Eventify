$(document).ready(function(){
    $('.your-class').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1
    });

    $('.your-class').on('afterChange', function(event, slick, currentSlide, nextSlide){
        console.log(currentSlide);
      });
});




$(document).ready(function() {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 100) {
            $('#nav').addClass('scroll');
        } else {
            $('#nav').removeClass('scroll');
        }
    });
});