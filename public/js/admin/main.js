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

    // Добавление новой запчасть к
    $('.spare-part-add').click(function (e) {
        e.preventDefault();

        var form = $('.spare-parts-form');
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
                $('.new-spare-button').click(function () {
                    $('.alert.alert-success').css('display', 'none');
                    $('.spare-parts-form')[0].reset();
                });

                // Если нажать "Нет" => закрывается модальное окно, очищается форма и отправляется запрос на обновление
                // Данных в таблице
                $('.reset-spare-button').click(function () {
                    $('#sparePartsTo').modal('toggle');
                    $('.spare-parts-form')[0].reset();

                    var url = $('.reset-spare-button').attr('data-toggle');

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

    $('.add-product').click(function (e) {
        e.preventDefault();

        var data = $(this).parents('div').prev().children()[1];

        var newSelect = $('.product').append('<select class="new_select form-control" size="1" name="product[]">');
        var newInput = $('.product').append('<input type="number" class="form-control" name="quantity[]">');

        $.each(data, function(key, value)
        {
            $('.new_select').append('<option value="' + key + '">' + value.innerHTML + '</option>');
        });
    });

    // меняет курсор
    $('.choose').css( 'cursor', 'pointer' );
    // при клике отрывает checkbox для выбора на удаление

    $('.choose').on('click', function (e) {
        e.preventDefault();

        $('.checkPhoto').css('display', 'block');
    });

    // меняетт css кнопки на видимо в модальном окне загрузки/удалении фото
    $('.choosePhoto').on('click', function (e) {
        var targetValues=$('input:checkbox:checked').map(function() {
            return this.value;
        }).get(); // в массив записуем все value отмеченых checkbox фото
        if(e.target.checked === true || targetValues.length >= 1){  // Если отмечено >= 1 checkbox кнопка удаления остается активной
            $('.btn.btn-outline-danger').css('display', 'block');
        }else if(e.target.checked === false){ // Если checkbox не отмечены, кнопка скрывается
            $('.btn.btn-outline-danger').css('display', 'none');
        }

    });
    //обновление категории
    // $('.category-upd').click(function (e) {
    //     e.preventDefault();
    //
    //     var form = $('.upd-category-form');
    //
    //     // for (var i = 0; i < form.length; i++){
    //     //     console.log(form[i].innerHTML);
    //     // }
    //     var data = form.serialize();
    //
    //     // console.log(data);
    //
    //     $.ajax({
    //         url: form.attr('action'),
    //         method: 'POST',
    //         data: data,
    //         success: function (response) {
    //             // console.log(response);
    //
    //         },
    //         complete: function () {
    //             var url = $(this).attr('data-toggle');
    //
    //             $.ajax({
    //                 url: url,
    //                 method: 'get',
    //                 // data: data,
    //                 success: function (response) {
    //                     var new_blog = $(response).find('#m_table_1').html();
    //                     $('#m_table_1').html(new_blog);
    //                 }
    //             });
    //         }
    //     });
    // });

}); //end ready