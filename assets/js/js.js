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

$(document).ready(function () {
    $("#login-form").submit(function (e) {
        e.preventDefault();
        $.post("core/auth.php", {
            action: "login",
            email: $("#login-email").val(),
            password: $("#login-password").val()
        }, function (response) {
            alert(response.message);
            if (response.success) {
                window.location.href = "?p=home";
            }
        }, "json");
    });

    $("#register-form").submit(function (e) {
        e.preventDefault();
        $.post("core/auth.php", {
            action: "register",
            email: $("#register-email").val(),
            password: $("#register-password").val()
        }, function (response) {
            alert(response.message);
            if (response.success) {
                window.location.href = "?p=login";
            }
        }, "json");
    });
});
