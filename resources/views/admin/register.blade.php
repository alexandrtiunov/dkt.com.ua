@extends('layouts.site')

@section('content')

    <section id="content">
        <div id="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="#">Главная</a></li>
                    <li class="active">Register Account</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="content-title">
                        <h1 class="title">Регистрация нового пользователя</h1>
                        <p class="title-desc">Если у Вас уже есть аккаунт, пожалуйста войдите <a href="{{route('login')}}">Войти</a>.</p>
                    </header>
                    <div class="xs-margin"></div><!-- space -->
                    <form action="{{ route('register') }}" method="post" id="register-form" >
                        {{csrf_field()}}
                        <div class="row">

                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <fieldset>
                                    <h2 class="sub-title">личные данные</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Имя&#42;</span></span>
                                        <input type="text" name="first_name" required class="form-control input-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Имя">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div><!-- End .input-group -->
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Фамилия&#42;</span></span>
                                        <input type="text" name="last_name" required class="form-control input-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Фамилия">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div><!-- End .input-group -->
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Должность&#42;</span></span>
                                        <input type="text" name="position" required class="form-control input-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Должность">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div><!-- End .input-group -->
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>
                                        <input type="text" name="email" required class="form-control input-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Email">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div><!-- End .input-group -->
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-phone"></span><span class="input-text">Телефон&#42;</span></span>
                                        <input type="text" name="phone" required class="form-control input-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Телефон">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div><!-- End .input-group -->
                                    <!-- End .input-group -->

                                </fieldset>

                                <fieldset>
                                    <h2 class="sub-title">пароль</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Пароль&#42;</span></span>
                                        <input type="password" name="password" required class="form-control input-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Пароль">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div><!-- End .input-group -->
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Пароль&#42;</span></span>
                                        <input type="password" required class="form-control input-lg {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                               name="password_confirmation" placeholder="Повторить пароль">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div><!-- End .input-group -->
                                </fieldset>


                            </div><!-- End .col-md-6 -->

                            {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                                {{--<fieldset>--}}
                                    {{--<h2 class="sub-title">Адрес</h2>--}}
                                    {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon"><span class="input-icon input-icon-company"></span><span class="input-text">Компания&#42;</span></span>--}}
                                        {{--<input type="text" name="comp_name" required class="form-control input-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Компания">--}}
                                        {{--@if ($errors->has('name'))--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div><!-- End .input-group -->--}}
                                    {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon"><span class="input-icon input-icon-address"></span><span class="input-text">Адрес&#42;</span></span>--}}
                                        {{--<input type="text" name="adress_u" class="form-control input-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Юридический адрес">--}}
                                        {{--@if ($errors->has('name'))--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div><!-- End .input-group -->--}}
                                    {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon"><span class="input-icon input-icon-address"></span><span class="input-text">Адрес&#42;</span></span>--}}
                                        {{--<input type="text" name="adress_f" required  class="form-control input-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Фактический адрес">--}}
                                        {{--@if ($errors->has('name'))--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div><!-- End .input-group -->--}}
                                    {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon"><span class="input-icon input-icon-city"></span><span class="input-text">Город&#42;</span></span>--}}
                                        {{--<input type="text" name="city" required class="form-control input-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Город">--}}
                                        {{--@if ($errors->has('name'))--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div><!-- End .input-group -->--}}
                                    {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon"><span class="input-icon input-icon-postcode"></span><span class="input-text">Индекс&#42;</span></span>--}}
                                        {{--<input type="text" name="zip" required class="form-control input-lg {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Индекс">--}}
                                        {{--@if ($errors->has('name'))--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div><!-- End .input-group -->--}}

                                    {{--<div class="input-group">--}}
                                        {{--<span class="input-group-addon"><span class="input-icon input-icon-country"></span><span class="input-text">Страна*</span></span>--}}
                                        {{--<div class="large-selectbox clearfix">--}}
                                            {{--<select id="country" name="country" class="selectbox {{ $errors->has('name') ? ' is-invalid' : '' }}">--}}
                                                {{--<option  value="Ukraine">Украина</option>--}}
                                                {{--<option  value="Belorussia">Беларусь</option>--}}
                                                {{--<option  value="Russia">Россия</option>--}}
                                            {{--</select>--}}
                                        {{--</div><!-- End .large-selectbox-->--}}
                                        {{--@if ($errors->has('name'))--}}
                                            {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                    {{--</span>--}}
                                        {{--@endif--}}
                                    {{--</div><!-- End .input-group -->--}}

                                {{--</fieldset>--}}
                            {{--</div><!-- End .col-md-6 -->--}}

                        </div><!-- End .row -->

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <fieldset class="half-margin">

                                    <div class="input-group custom-checkbox">
                                        <input type="checkbox"> <span class="checbox-container">
									 <i class="fa fa-check"></i>
									 </span>
                                        I have reed and agree to the <a href="#">Privacy Policy</a>.

                                    </div><!-- End .input-group -->
                                </fieldset>

                                <input type="submit" value="Создать аккаунт" class="btn btn-custom-2 md-margin">
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </form>
                </div><!-- End .col-md-12 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

    </section><!-- End #content -->

@stop