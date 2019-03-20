@extends('layouts.admin.admin')

@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <!-- END: Subheader -->
        <div class="m-content">

            <div class="alert alert-info">
                <p>Данные обновлены</p>
            </div>

            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Категории товаров
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air" data-toggle="modal" data-target="#categories">
												<span>
													<i class="la la-plus"></i>
													<span>Новая категория</span>
												</span>
                                </a>

                            </li>
                            <li class="m-portlet__nav-item"></li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">

                    <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Имя URL</th>
                            <th>Название</th>

                            <th>Actions</th>
                        </tr>
                        </thead>
                        @foreach($categories as $category)
                        <tbody>
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->short_name}}</td>
                            <td>{{$category->name}}</td>

                            <td nowrap="">
                                <span class="dropdown">
                                    <a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                                        <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="la la-edit"></i> Редактировать</a>
                                    </div>
                                </span>

                                <a href="{{action('Admin\CategoryController@editCategory', $category['id'])}}"
                                   class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View"
                                   data-toggle="modal" data-target="#edit{{$category['id']}}">
                                    <i class="la la-edit"></i>
                                </a>

                                {{--Модальное окно обновления категории--}}
                                <div class="modal fade show" id="edit{{$category['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 17px;">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Обновить категорию: {{$category->name}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>

                                            <div class="alert alert-info">
                                                <p>Данные обновлены</p>
                                            </div>

                                            <form method="post" action="{{action('Admin\CategoryController@updateCategory', $category['id'])}}" id="upd-category_form"
                                                  class="upd-category_form {{$category['id']}}">
                                                {{csrf_field()}}
                                                <div class="modal-body">

                                                    <div class="form-group">
                                                        <label for="short_name" class="form-control-label">Имя URL:</label>
                                                        <input type="text" name="short_name" class="form-control" value="{{$category->short_name}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name" class="form-control-label">Название:</label>
                                                        <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                                    <button type="submit" class="category-upd btn btn-primary" data-toggle="{{action('Admin\IndexController@categories')}}">
                                                        Обновить</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                {{--конец модального окна--}}

                            </td>
                        </tr>
                        </tbody>
                            @endforeach
                    </table>
                </div>
            </div>

            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    </div>

@stop
