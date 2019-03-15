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
                                Предприятия (поставщики)
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air" data-toggle="modal" data-target="#suppliers">
												<span>
													<i class="la la-plus"></i>
													<span>Новое предприятие</span>
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
                            <th>Название предприятия</th>
                            <th>Город</th>
                            <!-- <th>Адрес доставки</th> -->
                            <th>Контактное лицо</th>
                            <th>Телефон</th>
                            <th>Примечание</th>
                            <th>Тип</th>
                            <!-- <th>Статус заказа</th> -->
                            <!-- <th>Type</th> -->
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>ЮгДизель</td>
                            <td>Харьков</td>
                            <!-- <td>Новая почта отд. №1</td> -->
                            <td>Вася Пупкин</td>
                            <!-- <td>в наличии</td> -->
                            <td>0500000000</td>
                            <td>-</td>
                            <td>Покупатель</td>
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