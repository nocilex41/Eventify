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


$(document).ready(function () {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        function (position) {
          const latitude = position.coords.latitude;
          const longitude = position.coords.longitude;
          console.log(latitude);
          console.log(longitude);

          // Envoi des coordonnées au serveur via AJAX
        //   $.ajax({
        //     url: 'handle-location.php',
        //     method: 'GET',
        //     data: {
        //       lat: latitude,
        //       lon: longitude,
        //     },
        //     success: function (response) {
        //       // Affichage des événements retournés par le serveur
        //       const events = JSON.parse(response);
        //       let eventsList = '';
        //       events.forEach(event => {
        //         eventsList += `<li>${event.name} - ${event.distance.toFixed(2)} km</li>`;
        //       });
        //       $('#events').html(eventsList);
        //     },
        //     error: function () {
        //       alert('Impossible de récupérer les événements.');
        //     },
        //   });
        },
        function (error) {
          alert('Erreur lors de la géolocalisation : ' + error.message);
        }
      );
    } else {
      alert('La géolocalisation n’est pas supportée par votre navigateur.');
    }
  });