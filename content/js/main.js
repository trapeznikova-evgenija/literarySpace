$(function () {
    $('.autoplay').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true
    });

    $('.selectpicker').selectpicker();

    $('.gallery').lightGallery
    ({
        selector: 'a'
    });

    $('.feedback-form').on('submit', function () {
        console.log('Форма сабмитнулась');
    });

    console.log($('.back-link'));

    $('.back-link').on('click', function()
    {
        console.log('click happened');
        history.back();
    });
});