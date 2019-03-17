@extends('layouts.site')

@section('content')

    <section id="content">
        <div id="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Login</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="content-title">
                        <h1 class="title">Войти или зарегистрироваться</h1>
                        <div class="md-margin"></div><!-- space -->
                    </header>

                    <div class="row">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h2>Новый покупатель</h2>

                            <p>Создав учетную запись в нашем магазине, вы сможете быстрее пройти через процесс оформления заказа, сохранить несколько адресов доставки, просматривать и отслеживать свои заказы в своей учетной записи и многое другое.</p>
                            <div class="md-margin"></div><!-- space -->
                            <a href="{{route('register')}}" class="btn btn-custom-2">Зарегистрироваться</a>
                            <div class="lg-margin"></div><!-- space -->
                        </div><!-- End .col-md-6 -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h2>Зарегистрированные клиенты</h2>
                            <p>Если у вас есть аккаунт, пожалуйста, войдите.</p>
                            <div class="xs-margin"></div>

                            <form id="login-form" method="post" action="{{route('login')}}">
                                {{csrf_field()}}
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="input-icon input-icon-email"></span>
                                        <span class="input-text">Email&#42;</span>
                                    </span>
                                    <input type="text" required class="form-control input-lg {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           value="{{ old('email') }}" name="email" placeholder="Ваш Email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div><!-- End .input-group -->
                                <div class="input-group xs-margin">
                                    <span class="input-group-addon">
                                        <span class="input-icon input-icon-password"></span>
                                        <span class="input-text">Пароль&#42;</span>
                                    </span>
                                    <input type="password" required class="form-control input-lg {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" placeholder="Ваш пароль">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div><!-- End .input-group -->
                                {{--<span class="help-block text-right"><a href="#">Забыли пароль?</a></span>--}}
                                <button type="submit" class="btn btn-custom-2">Войти</button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Забыли пароль?') }}
                                    </a>
                                @endif
                            </form>
                            <div class="sm-margin"></div><!-- space -->
                        </div><!-- End .col-md-6 -->

                    </div><!-- End.row -->

                </div><!-- End .col-md-12 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

    </section><!-- End #content -->

@stop