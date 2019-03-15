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
                                Товары
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air" data-toggle="modal" data-target="#product">
												<span>
													<i class="la la-plus"></i>
													<span>Новый товар</span>
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
                            <th>Артикул</th>
                            <th>Наименование</th>
                            <th>Категория</th>
                            <th>Запчасть к</th>
                            <th>Наличие</th>
                            <th>Количество</th>
                            <th>Ед. измерения</th>
                            <th>Цена</th>
                            <th>Поставшик</th>
                            <th>Статус</th>
                            <!-- <th>Статус заказа</th> -->
                            <!-- <th>Type</th> -->
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>0210</td>
                            <td>Насос</td>
                            <td>Насосы</td>
                            <td>Дизелю 211Д3</td>
                            <td>
                                <span class="m-badge  m-badge--success m-badge--wide">в наличии</span>
                            </td>
                            <!-- <td>в наличии</td> -->
                            <td>5</td>
                            <td>шт.</td>
                            <td>15500</td>
                            <td>ДЕКО-ТРАНС</td>
                            <td>1</td>
                            <!-- <td>
                                <span class="m-badge m-badge--primary m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-primary">Retail</span>
                            </td> -->
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