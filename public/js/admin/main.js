$(document).ready(function () {

    $('.btn.btn-accent').click(function (e) {
        e.preventDefault();

        var form = $('.m-form.m-form--fit.m-form--label-align-right');
        console.log(form.attr('action'));
        var data = form.serialize();

        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: data,
            success: function (response) {
                var new_blog = $(response).find('.tab-pane.active').html();
                console.log(new_blog);
                $('.tab-pane.active').html(new_blog);
            },
            complete: function () {
                $('.alert.alert-info').css('display', 'block');
                $('.nav-item.m-tabs__item').click(function () {
                    $('.alert.alert-info').css('display', 'none');
                })
            }
        });

       console.log($(this));
    });

}); //end ready