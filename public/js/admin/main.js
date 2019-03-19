$(document).ready(function () {


    // Update данных пользователя
    $('.update-profile').click(function (e) {
        e.preventDefault();

        var form = $('.m-form.m-form--fit.m-form--label-align-right');
        // console.log(form.attr('action'));
        var data = form.serialize();

        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: data,
            success: function (response) {
                var new_blog = $(response).find('.tab-pane.active').html();
                // console.log(new_blog);
                $('.tab-pane.active').html(new_blog);
            },
            complete: function () {
                $('.alert.alert-info').css('display', 'block');
                $('.nav-item.m-tabs__item').click(function () {
                    $('.alert.alert-info').css('display', 'none');
                })
            }
        });
    });


    // Добавление новой категории
    $('.category-add').click(function (e) {
        e.preventDefault();

        var form = $('.category_form');
        var data = form.serialize();

        // добавляем в БД данные из формы
        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: data,
            success: function (response) {

            },
            complete: function () {
                $('.alert.alert-success').css('display', 'block'); // показываем информацию о добавлении

                // Если нажать "Да" информация скрывается, форма очищается
                $('.new-category-button').click(function () {
                    $('.alert.alert-success').css('display', 'none');
                    $('.category_form')[0].reset();
                });

                // Если нажать "Нет" => закрывается модальное окно, очищается форма и отправляется запрос на обновление
                // Данных в таблице
                $('.reset-category-button').click(function () {
                    $('#categories').modal('toggle');
                    $('.category_form')[0].reset();

                    var url = $('.reset-category-button').attr('data-toggle');

                    $.ajax({
                        url: url,
                        method: 'get',
                        // data: data,
                        success: function (response) {
                            var new_blog = $(response).find('#m_table_1').html();
                            $('#m_table_1').html(new_blog);
                        }
                    });
                });
            }
        });

    });

    //обновление категории
    $('.category-upd').click(function (e) {
        e.preventDefault();

        var form = $('.upd-category_form');
        var data = form.serialize();

        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: data,
            success: function (response) {
                $('#edit').modal('toggle');
                $('.category_form')[0].reset();

                var url = $('.reset-category-button').attr('data-toggle');

                $.ajax({
                    url: url,
                    method: 'get',
                    // data: data,
                    success: function (response) {
                        var new_blog = $(response).find('#m_table_1').html();
                        $('#m_table_1').html(new_blog);
                    }
                });
            }
        });

    });

}); //end ready