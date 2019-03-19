<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>Административная панель | ДЕКО-ТРАНС</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="{{URL::to('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <link href="{{URL::to('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="{{URL::to('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />


    <link href="{{URL::to('css/admin/main.css')}}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="{{URL::to('assets/demo/default/media/img/logo/favicon.ico')}}" />

</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">

    <!-- BEGIN: Header -->
    <header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
            <div class="m-stack m-stack--ver m-stack--desktop">

                <!-- BEGIN: Brand -->
                <div class="m-stack__item m-brand  m-brand--skin-dark ">
                    <div class="m-stack m-stack--ver m-stack--general">
                        <div class="m-stack__item m-stack__item--middle m-brand__logo">
                            <a href="index.html" class="m-brand__logo-wrapper">
                                <img alt="" src="assets/demo/default/media/img/logo/logo_default_dark.png" />
                            </a>
                        </div>
                        <div class="m-stack__item m-stack__item--middle m-brand__tools">

                            <!-- BEGIN: Left Aside Minimize Toggle -->
                            <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                            <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Responsive Header Menu Toggler -->
                            <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                <span></span>
                            </a>

                            <!-- END -->

                            <!-- BEGIN: Topbar Toggler -->
                            <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                <i class="flaticon-more"></i>
                            </a>

                            <!-- BEGIN: Topbar Toggler -->
                        </div>
                    </div>
                </div>

                <!-- END: Brand -->
                <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

                    <!-- BEGIN: Horizontal Menu -->
                    <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                    <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
                        <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i
                                            class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-text">Действия</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                    <ul class="m-menu__subnav">
                                        <li class="m-menu__item " aria-haspopup="true">
                                            <a href="#" class="m-menu__link" data-toggle="modal" data-target="#m_modal_4">
                                                <i class="m-menu__link-icon flaticon-file"></i>
                                                <span class="m-menu__link-text">Новая отработка</span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " aria-haspopup="true">
                                            <a href="#" class="m-menu__link" data-toggle="modal" data-target="#product">
                                                <i class="m-menu__link-icon flaticon-file"></i>
                                                <span class="m-menu__link-text">Новый товар</span>
                                            </a>
                                        </li>
                                        <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="#" class="m-menu__link " data-toggle="modal" data-target="#buyers"><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Новый заказчик</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i
                                            class="m-menu__link-icon flaticon-paper-plane"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Новые запросы</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--brand m-badge--wide">new</span></span>
												</span></span>
                                    <!-- <i class="m-menu__ver-arrow la la-angle-right"></i> -->
                                </a>
                                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i
                                            class="m-menu__link-icon flaticon-user-add"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Заявки на регистрацию</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--brand m-badge--wide">new</span></span>
												</span></span>
                                    <!-- <i class="m-menu__ver-arrow la la-angle-right"></i> -->
                                </a>
                                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- END: Horizontal Menu -->

                    <!-- BEGIN: Topbar -->
                    <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                        <div class="m-stack__item m-topbar__nav-wrapper">
                            <ul class="m-topbar__nav m-nav m-nav--inline">
                                <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                                    m-dropdown-toggle="click">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
												</span>
                                        <span class="m-topbar__username m--hide">Nick</span>
                                    </a>
                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                                <div class="m-card-user m-card-user--skin-dark">
                                                    <div class="m-card-user__pic">
                                                        <img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />

                                                        <!--
                <span class="m-type m-type--lg m--bg-danger"><span class="m--font-light">S<span><span>
                -->
                                                    </div>
                                                    <div class="m-card-user__details">
                                                        <span class="m-card-user__name m--font-weight-500">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                                                        <a href="" class="m-card-user__email m--font-weight-300 m-link">{{ Auth::user()->email }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-dropdown__body">
                                                <div class="m-dropdown__content">
                                                    <ul class="m-nav m-nav--skin-light">
                                                        <li class="m-nav__section m--hide">
                                                            <span class="m-nav__section-text">Section</span>
                                                        </li>
                                                        <li class="m-nav__item">
                                                            <a href="{{action('Admin\ProfileController@profile', Auth::user()->id)}}" class="m-nav__link">
                                                                <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                <span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">Мой профиль</span>
																				<span class="m-nav__link-badge">
                                                                                    {{--<span class="m-badge m-badge--success">2</span>--}}
                                                                                </span>
																			</span>
																		</span>
                                                            </a>
                                                        </li>

                                                        <li class="m-nav__item">

                                                            <a href="{{ route('logout') }}" class="btn m-btn--pill
                                                            btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder"
                                                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                Выйти</a>
                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="m_quick_sidebar_toggle" class="m-nav__item">
                                    <a href="#" class="m-nav__link m-dropdown__toggle">
                                        <span class="m-nav__link-icon"><i class="flaticon-grid-menu"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- END: Topbar -->
                </div>
            </div>
        </div>
    </header>

    <!-- END: Header -->

    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

            <!-- BEGIN: Aside Menu -->
            <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">
									<span class="m-menu__link-wrap">
										<span class="m-menu__link-text">Отработка</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
                                        <!-- <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span> -->
											</span>
										</span>
                            </span>
                        </a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{action('Admin\IndexController@index')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Все</span></a></li>

                                <li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">В работе</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Отмененные</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Завершенные</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Архив</span></a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-list"></i><span class="m-menu__link-text">
									<span class="m-menu__link-wrap">
										<span class="m-menu__link-text">Товары</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
                                        <!-- <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span> -->
											</span>
										</span>
                            </span>
                        </a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{action('Admin\IndexController@products')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Все товары</span></a></li>

                                <li class="m-menu__item " aria-haspopup="true"><a href="{{action('Admin\IndexController@categories')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Категории товаров</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{action('Admin\IndexController@spareParts')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Товары к</span></a></li>
                                <!-- <li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Завершенные</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Архив</span></a></li> -->
                            </ul>
                        </div>
                    </li>

                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
                        <a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-folder-1"></i><span class="m-menu__link-text">
									<span class="m-menu__link-wrap">
										<span class="m-menu__link-text">Контрагенты</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
                                        <!-- <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span> -->
											</span>
										</span>
                            </span>
                        </a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{action('Admin\IndexController@companies')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Все контрагенты</span></a></li>

                                <li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Поставщики</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Покупатели</span></a></li>
                                <!-- <li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Завершенные</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Архив</span></a></li> -->
                            </ul>
                        </div>
                    </li>


                </ul>
            </div>

            <!-- END: Aside Menu -->
        </div>

        <!-- END: Left Aside -->

        @yield('content')

    <!-- begin::Footer -->
        <footer class="m-grid__item		m-footer ">
            <div class="m-container m-container--fluid m-container--full-height m-page__container">
                <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                    <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2019 &copy; ООО "ДЕКО-ТРАНС"</a>
							</span>
                    </div>
                </div>
            </div>
        </footer>

        <!-- end::Footer -->
    </div>

    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
        <i class="la la-arrow-up"></i>
    </div>

    <!-- end::Scroll Top -->

    <!--begin::Global Theme Bundle -->
    <script src="{{URL::to('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{URL::to('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Vendors -->
    <script src="{{URL::to('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>

    <!--end::Page Vendors -->

    <!--begin::Page Scripts -->
    <script src="{{URL::to('assets/app/js/dashboard.js')}}" type="text/javascript"></script>

    <script src="{{URL::to('assets/app/js/my-script.js')}}" type="text/javascript"></script>

    <script src="{{URL::to('js/admin/main.js')}}" type="text/javascript"></script>

    <!--end::Page Scripts -->
</div>
</body>

<!-- модальное окно новая отработка -->
<div class="modal fade show" id="m_modal_4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Новая отработка</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="value" class="form-control-label">Сумма заказа:</label>
                        <input type="text" name="article" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="city" class="form-control-label">Город отгузки:</label>
                        <select id="city" class="form-control" size="1" name="city">
                            <option selected disabled value>Выберете город</option>
                            <option value="Kiev">Киев</option>
                            <option value="Kramatorsk">Краматорск</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="company" class="form-control-label">Компания:</label>
                        <select class="company form-control" size="1" name="company">
                            <option selected disabled value>Выберете компанию</option>
                            <option value="NKMZ">НКМЗ</option>
                            <option value="Azovstal">Азовсталь</option>
                            <option value="SKMZ">СКМЗ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="adres" class="form-control-label">Адрес отгрузки:</label>
                        <select class="adres form-control" size="1" name="adress">
                            <option selected disabled value>Выберете адрес</option>
                            <option value="NP">Новая почта отд. №1</option>
                            <option value="street">Орджоникидзе, 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date" class="form-control-label">Дата отгрузки:</label>
                        <input type="date" name="date" class="form-control">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </div>
</div>
<!-- Конец модального окна -->

<!-- модальное окно продукты -->

<div class="modal fade show" id="product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавление нового товара</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="m-scrollable m-scroller ps ps--active-y" data-scrollbar-shown="true" data-scrollable="true" data-height="400" style="height: 400px; overflow: hidden;">
                    <form>
                        <div class="form-group">
                            <label for="article" class="form-control-label">Артикул:</label>
                            <input type="text" name="article" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name" class="form-control-label">Наименование:</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="price" class="form-control-label">Цена:</label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        <div class="form-group">
                            <label for="cateory" class="form-control-label">Категория:</label>
                            <select class="form-control" size="1" name="cateory">
                                <option selected value>Насосы</option>
                                <option value>Кольца</option>
                            </select>
                            <a href="#" class="m-menu__link" data-toggle="modal" data-target="#categories">Добавить новую категорию</a>
                        </div>
                        <div class="form-group">
                            <label for="parts_to" class="form-control-label">Зачасть к:</label>
                            <select class="form-control" size="1" name="cateory">
                                <option selected value>Дизелю 211Д3</option>
                                <option value>Дизелю Д49</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="availability" class="form-control-label">Наличие:</label>
                            <select class="form-control" size="1" name="availability">
                                <option selected value>В наличии</option>
                                <option value>Нет в наличии</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity" class="form-control-label">Количество:</label>
                            <input type="text" class="form-control" name="quantity">
                        </div>
                        <div class="form-group">
                            <label for="unit" class="form-control-label">Ед. измерения:</label>
                            <select class="form-control" size="1" name="unit">
                                <option selected value>шт.</option>
                                <option value>компл.</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="unit" class="form-control-label">Поставшик:</label>
                            <select class="form-control" size="1" name="unit">
                                <option selected value>ДЕКО-ТРАНС</option>
                                <option value>ЮгДизель</option>
                            </select>
                            <a href="#" class="m-menu__link" data-toggle="modal" data-target="#buyers">Добавить нового поставщика</a>
                        </div>
                        <!-- <div class="form-group">
                            <label for="message-text" class="form-control-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div> -->
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </div>
</div>
<!-- конец модального окна -->

<!-- модальное окно категории -->
<div class="modal fade show" id="categories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавление новой категории</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

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
                    <p>Данные добавлены. Добавить ещё одну категорию? <button class="new-category-button btn btn-primary">Да</button>
                        <button class="reset-category-button btn btn-primary" data-toggle="{{action('Admin\IndexController@categories')}}">Нет</button></p>
                </div><br />
            </div>

            <form method="post" action="{{action('Admin\CategoryController@addCategory')}}" class="category_form">
                {{csrf_field()}}
                <div class="modal-body">

                    <div class="form-group">
                        <label for="short_name" class="form-control-label">Имя URL:</label>
                        <input type="text" name="short_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-control-label">Название:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="submit" class="category-add btn btn-primary">Добавить</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- конец модального окна -->

<!-- модальное окно категории (Запчасти к ... ) -->
<div class="modal fade show" id="sparePartsTo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавление новой категории (запчасти к ...)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="url" class="form-control-label">Имя URL:</label>
                        <input type="text" name="url" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-control-label">Название:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <!-- <div class="form-group">
                        <label for="message-text" class="form-control-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div> -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </div>
</div>
<!-- конец модального окна -->

<!-- модальное окно добавления покупателя -->
<div class="modal fade show" id="buyers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none; padding-right: 17px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавление нового предприятия</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="m-scrollable m-scroller ps ps--active-y" data-scrollbar-shown="true" data-scrollable="true" data-height="400" style="height: 400px; overflow: hidden;">
                    <form>
                        <div class="form-group">
                            <label for="type" class="form-control-label">Тип предриятия:</label>
                            <select class="form-control" size="1" name="cateory">
                                <option selected value>Покупатель</option>
                                <option value>Поставщик</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name" class="form-control-label">Название предприятия/ЕДРПОУ:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ur_adress" class="form-control-label">Юридический адрес:</label>
                            <input type="text" name="ur_adress" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="f_adress" class="form-control-label">Фактический адрес/адрес доставки:</label>
                            <input type="text" name="f_adress" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-control-label">Город:</label>
                            <input type="text" class="form-control" name="city">
                        </div>
                        <div class="form-group">
                            <label for="zip" class="form-control-label">Индекс:</label>
                            <input type="text" class="form-control" name="zip">
                        </div>
                        <div class="form-group">
                            <label for="contact" class="form-control-label">Контактное лицо:</label>
                            <input type="text" class="form-control" name="contact">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-control-label">Телефон:</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="unit" class="form-control-label">Примечание:</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <!-- <div class="form-group">
                            <label for="message-text" class="form-control-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div> -->
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </div>
</div>
<!-- конец окна -->

<!-- end::Body -->
</html>