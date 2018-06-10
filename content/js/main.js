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

    $('.button-sign-out').on('click', function () {
       location.href = 'logout.php';
    });


    $('.auth-form').on('submit', function () {
       event.preventDefault();

        var $that = $(this);
        $that.addClass('was-validated');

        if(!this.checkValidity())
        {
            return;
        }

        var wrongDataBlock = $('.wrong-data');
        var data = new FormData($that.get(0));

        $.ajax({
            type: "POST",
            url:'login.php',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                console.log('Привет,я отправилась успешно. Auth-form submit');
                console.log(data);

                wrongDataBlock.hide();

                if (data)
                {
                    location.href = 'add_writer.php';
                    $('.button-sign-in').hide();
                } else
                {
                   showAndHide(wrongDataBlock);
                }
            },
            error: function () {
                console.log('Данные не отправлены');
            },
            complete: function () {
                $that.trigger('reset');
                $that.removeClass('was-validated');
            }
        });
    });

    $('.back-link').on('click', function()
    {
        history.back();
    });
});

function showAndHide(wrongDataBlock) {
    wrongDataBlock.show(1000, function(){
        setTimeout(function(){
            wrongDataBlock.hide(500);
        }, 3000);
    });
}