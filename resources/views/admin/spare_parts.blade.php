@extends('layouts.admin.admin')

@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">

        <!-- END: Subheader -->
        <div class="m-content">
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Категории товаров (запчасти к ...)
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air" data-toggle="modal" data-target="#sparePartsTo">
												<span>
													<i class="la la-plus"></i>
													<span>Добавить</span>
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
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>diesel_211d3</td>
                            <td>Дизель 211Д3</td>
                            <td nowrap="">
                        						<span class="dropdown">
                            						<a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              						<i class="la la-ellipsis-h"></i>
                            						</a>
						                            <div class="dropdown-menu dropdown-menu-right">
						                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Редактировать</a>
						                            </div>
                        						</span>
                                <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                                    <i class="la la-edit"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>diesel_d50</td>
                            <td>Дизель D50</td>
                            <td nowrap="">
                        						<span class="dropdown">
                            						<a href="#" class="btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="true">
                              						<i class="la la-ellipsis-h"></i>
                            						</a>
						                            <div class="dropdown-menu dropdown-menu-right">
						                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Редактировать</a>
						                            </div>
                        						</span>
                                <a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                                    <i class="la la-edit"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
    </div>

@stop