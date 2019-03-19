@extends('layouts.admin.admin')

@section('content')

    <div class="m-content">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="m-portlet m-portlet--full-height  ">
                    <div class="m-portlet__body">
                        <div class="m-card-profile">
                            <div class="m-card-profile__title m--hide">
                                Ваш профиль
                            </div>
                            <div class="m-card-profile__pic">
                                <div class="m-card-profile__pic-wrapper">
                                    <img src="../assets/app/media/img/users/user4.jpg" alt="" />
                                </div>
                            </div>
                            <div class="m-card-profile__details">
                                <span class="m-card-profile__name">{{$user->first_name}}{{$user->last_name}}</span>
                                <a href="" class="m-card-profile__email m-link">{{$user->email}}</a>
                            </div>
                        </div>
                        <ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
                            <li class="m-nav__separator m-nav__separator--fit"></li>
                            <li class="m-nav__section m--hide">
                                <span class="m-nav__section-text">Section</span>
                            </li>
                            <li class="m-nav__item">
                                <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                    <span class="m-nav__link-title">
														<span class="m-nav__link-wrap">
															<span class="m-nav__link-text">Мой профиль</span>
                                                            <!-- <span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span> -->
														</span>
														</span>
                                    </span>
                                </a>
                            </li>
                            <!-- <li class="m-nav__item">
                                <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-share"></i>
                                    <span class="m-nav__link-text">Activity</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-text">Messages</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-graphic-2"></i>
                                    <span class="m-nav__link-text">Sales</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-time-3"></i>
                                    <span class="m-nav__link-text">Events</span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                    <span class="m-nav__link-text">Support</span>
                                </a>
                            </li> -->
                        </ul>
                        <div class="m-portlet__body-separator"></div>

                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-tools">
                            <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                                        <i class="flaticon-share m--hide"></i>
                                        Личные данные
                                    </a>
                                </li>
                                <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab">
                                        Данные компании
                                    </a>
                                </li>

                            </ul>
                        </div>

                    </div>
                    <div class="tab-content">

                        <div class="info">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br />
                            @endif
                                <div class="alert alert-info">
                                    <p>Данные обновлены</p>
                                </div>

                                <div class="alert alert-success">
                                    <p>Данные добавлены</p>
                                </div><br />
                        </div>

                        <div class="tab-pane active" id="m_user_profile_tab_1">
                            <form method="post" action="{{action('Admin\ProfileController@updateUser', $user->id)}}" class="m-form m-form--fit m-form--label-align-right">
                                @csrf
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group m--margin-top-10 m--hide">
                                        <div class="alert m-alert m-alert--default" role="alert">
                                            The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <div class="col-10 ml-auto">
                                            <h3 class="m-form__section">1. Персональные данные</h3>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Имя</label>
                                        <div class="col-7">
                                            <input name="first_name" class="form-control m-input" type="text" value="{{$user->first_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Фамилия</label>
                                        <div class="col-7">
                                            <input name="last_name" class="form-control m-input" type="text" value="{{$user->last_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Должность</label>
                                        <div class="col-7">
                                            <input name="position" class="form-control m-input" type="text" value="{{$user->position}}">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Телефон</label>
                                        <div class="col-7">
                                            <input name="phone" class="form-control m-input" type="text" value="{{$user->phone}}">
                                        </div>
                                    </div>
                                    <!-- <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div> -->

                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <div class="row">
                                            <div class="col-2">
                                            </div>
                                            <div class="col-7">
                                                <button type="submit" class="update-profile btn btn-accent m-btn m-btn--air m-btn--custom">Сохранить</button>&nbsp;&nbsp;
                                                <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Отменить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                        <div class="tab-pane" id="m_user_profile_tab_2" >
                            @if(empty($company))
                            <form method="post" action="{{action('Admin\ProfileController@createCompany', $user->id)}}" class="m-form m-form--fit m-form--label-align-right">
                                @csrf
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group m--margin-top-10 m--hide">
                                        <div class="alert m-alert m-alert--default" role="alert">
                                            The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
                                        </div>
                                    </div>

                                    <!-- <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div> -->
                                    <div class="form-group m-form__group row">
                                        <div class="col-10 ml-auto">
                                            <h3 class="m-form__section">2. Адрес</h3>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Название компании</label>
                                        <div class="col-7">
                                            <input name="comp_name" class="form-control m-input" type="text" value="">
                                            {{--<span class="m-form__help">If you want your invoices addressed to a company. Leave blank to use your full name.</span>--}}
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Название компании на английском</label>
                                        <div class="col-7">
                                            <input name="short_name" class="form-control m-input" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Юридический адрес</label>
                                        <div class="col-7">
                                            <input name="adress_u" class="form-control m-input" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Фактический адрес</label>
                                        <div class="col-7">
                                            <input name="adress_f" class="form-control m-input" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Город</label>
                                        <div class="col-7">
                                            <input name="city" class="form-control m-input" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Индекс</label>
                                        <div class="col-7">
                                            <input name="zip" class="form-control m-input" type="text" value="">
                                        </div>
                                    </div>

                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">Страна</label>
                                        <div class="col-7">
                                            <select id="country" name="country" class="form-control m-input">
                                                <option  value="Украина">Украина</option>
                                                <option  value="Беларусь">Беларусь</option>
                                                <option  value="Россия">Россия</option>
                                            </select>
                                        </div>
                                        <!-- End .large-selectbox-->

                                    </div><!-- End .input-group -->
                                    <!-- <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div> -->

                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <div class="row">
                                            <div class="col-2">
                                            </div>
                                            <div class="col-7">
                                                <button type="submit" class="btn m-btn m-btn--air m-btn--custom">Добавить</button>&nbsp;&nbsp;
                                                <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Отменить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                @else
                                <form method="post" action="{{action('Admin\ProfileController@updateCompany', $user->id)}}" class="m-form m-form--fit m-form--label-align-right">
                                    <div class="m-portlet__body">
                                        <div class="form-group m-form__group m--margin-top-10 m--hide">
                                            <div class="alert m-alert m-alert--default" role="alert">
                                                The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
                                            </div>
                                        </div>

                                        <!-- <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div> -->
                                        <div class="form-group m-form__group row">
                                            <div class="col-10 ml-auto">
                                                <h3 class="m-form__section">2. Адрес</h3>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Название компании</label>
                                            <div class="col-7">
                                                <input name="comp_name" class="form-control m-input" type="text" value="{{$company->comp_name}}">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Название компании на английском</label>
                                            <div class="col-7">
                                                <input name="short_name" class="form-control m-input" type="text" value="{{$company->short_name}}">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Юридический адрес</label>
                                            <div class="col-7">
                                                <input name="adress_u" class="form-control m-input" type="text" value="{{$company->adress_u}}">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Фактический адрес</label>
                                            <div class="col-7">
                                                <input name="adress_f" class="form-control m-input" type="text" value="{{$company->adress_f}}">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Город</label>
                                            <div class="col-7">
                                                <input name="city" class="form-control m-input" type="text" value="{{$company->city}}">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Индекс</label>
                                            <div class="col-7">
                                                <input name="zip" class="form-control m-input" type="text" value="{{$company->zip}}">
                                            </div>
                                        </div>

                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">Страна</label>
                                            <div class="col-7">
                                                <select id="country" name="country" class="form-control m-input">
                                                    <option  selected value="{{$company->country}}">{{$company->country}}</option>
                                                    <option  value="Украина">Украина</option>
                                                    <option  value="Беларусь">Беларусь</option>
                                                    <option  value="Россия">Россия</option>
                                                </select>
                                            </div>
                                            <!-- End .large-selectbox-->

                                        </div><!-- End .input-group -->
                                        <!-- <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div> -->

                                    </div>
                                    <div class="m-portlet__foot m-portlet__foot--fit">
                                        <div class="m-form__actions">
                                            <div class="row">
                                                <div class="col-2">
                                                </div>
                                                <div class="col-7">
                                                    <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">Добавить</button>&nbsp;&nbsp;
                                                    <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Отменить</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endif
                        </div>
                        <div class="tab-pane " id="m_user_profile_tab_2">
                        </div>
                        <div class="tab-pane " id="m_user_profile_tab_3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@stop