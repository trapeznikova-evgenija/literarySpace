$(function () {

    var files;
    $('input[type=file]').change(function(){
        files = this.files;
    });

    $('.add_writer_form').on('submit', function (event) {
        event.preventDefault();

        var $that = $(this);
        $that.addClass('was-validated');

        if(!this.checkValidity())
        {
            return;
        }

        var data = new FormData($that.get(0));

        $.each(files, function( key, value ){
            data.append( key, value );
        });

        $.ajax({
            type: "POST",
            url: 'parseWriterData.php',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data) {
                console.log('Привет,я отправилась успешно');
                console.log(data);
            },
            error: function () {
                console.log('Данные не отправлены');
            },
            complete: function () {
                $that.trigger('reset');
                $that.removeClass('was-validated');
                $('input[type=file]').empty();
            }
        });
    });
});