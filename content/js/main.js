$(function () {
    $('.autoplay').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrow: true
    });

    $('.grid').masonry({
        itemSelector: '.grid-item',
        gutter: 10
    });

    $('.selectpicker').selectpicker();

    $('.gallery').lightGallery
    ({
        selector: 'a'
    });

    $('.feedback-form').on('submit', function () {
        console.log('Форма сабмитнулась');
    });

    $('#buttonSignIn').on('click', function () {
        $('.button-sign-in').hide();
        console.log('ВНУТРИ');
    });


    // $('.auth-form').on('submit', function () {
    //     console.log('Я здесь');
    //    event.preventDefault();
    //
    //     var $that = $(this);
    //     $that.addClass('was-validated');
    //
    //     if(!this.checkValidity())
    //     {
    //         return;
    //     }
    //
    //     var data = new FormData($that.get(0));
    //
    //     $.ajax({
    //         type: "POST",
    //         url: 'add_writer.php',
    //         data: data,
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         success: function (data) {
    //             console.log('Привет,я отправилась успешно');
    //             console.log(data);
    //         },
    //         error: function () {
    //             console.log('Данные не отправлены');
    //         },
    //         complete: function () {
    //             $that.trigger('reset');
    //             $that.removeClass('was-validated');
    //         }
    //     });
    // });

    $('.back-link').on('click', function()
    {
        console.log('click happened');
        history.back();
    });
});