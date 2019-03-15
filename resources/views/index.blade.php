@extends('layouts.site')

@section('content')

    <section id="content">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="row slider-position">
                        <div class="md-margin"></div><!-- space -->

                        <div class="col-md-3 col-sm-4 col-xs-12 sidebar">

                            <div class="widget">
                                <h3>Категории</h3>

                                <div class="list-group list-group-brand list-group-accordion">
                                    <a href="#" class="list-group-item">Стартер
                                        <!-- <span class="filter-icon filter-icon-fashion"></span> -->
                                    </a>
                                    <a href="#" class="list-group-item">Кольца поршневые
                                        <!-- <span class="filter-icon filter-icon-furniture"></span> -->
                                    </a>
                                    <a href="#" class="list-group-item">Проладки
                                        <!-- <span class="filter-icon filter-icon-electronics"></span> -->
                                    </a>
                                    <a href="#" class="list-group-item">Распылители
                                        <!-- <span class="filter-icon filter-icon-gifts"></span> -->
                                    </a>
                                </div><!-- End .list-group -->
                            </div>

                            <div class="widget">
                                <h3>Запчасти к </h3>

                                <div class="list-group list-group-brand">
                                    <a href="#" class="list-group-item">Дизелю 6чн21/21</a>
                                    <a href="#" class="list-group-item">Дизелю 6ч12/14</a>
                                    <!-- <a href="#" class="list-group-item">Christion Dior</a> -->
                                    <a href="#" class="list-group-item">Компрессору 2ОК1</a>
                                    <a href="#" class="list-group-item">Компрессору ПК 35</a>
                                    <!--   <a href="#" class="list-group-item">Givenchy</a>
                                      <a href="#" class="list-group-item">Donna Karan</a> -->
                                </div><!-- End .list-group -->
                            </div>

                            <!-- <div class="widget subscribe">
                                <h3>BE THE FIRST TO KNOW</h3>
                                <p> Get all the latest information on Events, Sales and Offers. Sign up for the Venedor store newsletter today.</p>
                                <form action="#" id="subscribe-form">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="subscribe-email" placeholder="Enter your email address">
                                    </div>
                                    <input type="submit" value="SUBMIT" class="btn btn-custom">
                                </form>
                            </div> -->


                        </div><!-- End .col-md-3 -->

                        <div class="col-md-9 col-sm-8 col-xs-12 main-content ">

                            <div class="md-margin"></div><!-- Space -->

                            <div class="md-margin"></div><!-- space -->

                            <div class="main-tab-container carousel-wrapper">
                                <!-- <ul id="products-tabs-list" class="tab-style-2 clearfix">
                                    <li class="active"><a href="#latest" data-toggle="tab">Latest</a></li>
                                    <li><a href="#featured" data-toggle="tab">Featured</a></li>
                                    <li><a href="#bestsellers" data-toggle="tab">Bestsellers</a></li>
                                    <li><a href="#special" data-toggle="tab">Special</a></li>
                                </ul> -->

                                <div id="products-tabs-content" class="tab-content row">
                                    <div class="tab-pane active tab-carousel-wrapper" id="latest">
                                        <div class="latest-tab-slider owl-carousel">
                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/КП 0330.11.050.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item2-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">330<span class="sub-price">.00 грн.</span></span>
                                                        </div><!-- End .item-price-container -->
                                                        <!-- <span class="new-rect">New</span> -->
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">

                                                        <h3 class="item-name"><a href="product.html">Кольцо поршневое 0330.11.050</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Добавить в корзину</span>
                                                            </a>

                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item1.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item1-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$120</span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="86"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    7 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->

                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item4.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item4-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="old-price">$200</span>
                                                            <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                        <span class="discount-rect">-20%</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="80"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item3.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$200</span>
                                                        </div><!-- End .item-price-container -->
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="90"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    1 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->

                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item5.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item5-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="20"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item8.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item8-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$80</span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="50"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->


                                        </div><!-- End .latest-tab-slider -->

                                    </div><!-- End .tab-pane -->

                                    <div class="tab-pane tab-carousel-wrapper" id="featured">

                                        <div class="carousel-controls">
                                            <div id="featured-tab-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                            <div id="featured-tab-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                        </div><!-- End .carousel-controllers -->

                                        <div class="featured-tab-slider owl-carousel">
                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item7.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item7-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$80<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="55"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item6.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item6-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$50</span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="86"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->

                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item5.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item5-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="old-price">$150</span>
                                                            <span class="item-price">$80<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->

                                                        <span class="discount-rect">-10%</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="80"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item4.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item4-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$500</span>
                                                        </div><!-- End .item-price-container -->
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="60"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    4 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->

                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item3.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="20"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item10.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item10-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$80</span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="50"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->

                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item2.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item2-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="80"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item3.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$200</span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="discount-rect">-10%</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="74"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    9 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->
                                        </div><!-- End .featured-tab-slider -->

                                    </div><!-- End .tab-pane -->

                                    <div class="tab-pane tab-carousel-wrapper" id="bestsellers">

                                        <div class="carousel-controls">
                                            <div id="bestsellers-tab-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                            <div id="bestsellers-tab-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                        </div><!-- End .carousel-controllers -->

                                        <div class="bestsellers-tab-slider owl-carousel">
                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item3.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="80"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item2.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item2-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$120</span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="86"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    7 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->

                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item8.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item8-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="old-price">$200</span>
                                                            <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                        <span class="discount-rect">-20%</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="80"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item2.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item2-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$200</span>
                                                        </div><!-- End .item-price-container -->
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="90"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    1 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->

                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item9.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item9-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="20"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item8.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item8-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$80</span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="50"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->

                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item2.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item2-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="80"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item3.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$200</span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="discount-rect">-10%</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="74"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    9 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->
                                        </div><!-- End .bestsellers-tab-slider -->

                                    </div><!-- End .tab-pane -->

                                    <div class="tab-pane tab-carousel-wrapper" id="special">

                                        <div class="carousel-controls">
                                            <div id="special-tab-slider-prev" class="carousel-btn carousel-btn-prev"></div><!-- End .carousel-prev -->
                                            <div id="special-tab-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div><!-- End .carousel-next -->
                                        </div><!-- End .carousel-controllers -->

                                        <div class="special-tab-slider owl-carousel">
                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item6.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item6-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$80<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="55"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item4.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item4-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$50</span>
                                                        </div><!-- End .item-price-container -->

                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="86"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->

                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item1.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item1-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="old-price">$150</span>
                                                            <span class="item-price">$80<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->

                                                        <span class="discount-rect">-10%</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="80"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item4.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item4-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$500</span>
                                                        </div><!-- End .item-price-container -->
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="60"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    4 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->

                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item3.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$99<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="20"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item10.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item10-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$80</span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="50"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    3 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->

                                            <div class="owl-single-col">
                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item2.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item2-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$160<span class="sub-price">.99</span></span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="new-rect">New</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="80"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    5 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->

                                                <div class="item item-hover">
                                                    <div class="item-image-wrapper">
                                                        <figure class="item-image-container">
                                                            <a href="product.html">
                                                                <img src="images/products/item3.jpg" alt="item1" class="item-image">
                                                                <img src="images/products/item3-hover.jpg" alt="item1  Hover" class="item-image-hover">
                                                            </a>
                                                        </figure>
                                                        <div class="item-price-container">
                                                            <span class="item-price">$200</span>
                                                        </div><!-- End .item-price-container -->
                                                        <span class="discount-rect">-10%</span>
                                                    </div><!-- End .item-image-wrapper -->
                                                    <div class="item-meta-container">
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-result" data-result="74"></div>
                                                            </div><!-- End .ratings -->
                                                            <span class="ratings-amount">
                                                                    9 Reviews
                                                                </span>
                                                        </div><!-- End .rating-container -->
                                                        <h3 class="item-name"><a href="product.html">Phasellus consequat</a></h3>
                                                        <div class="item-action">
                                                            <a href="#" class="item-add-btn">
                                                                <span class="icon-cart-text">Add to Cart</span>
                                                            </a>
                                                            <div class="item-action-inner">
                                                                <a href="#" class="icon-button icon-like">Favourite</a>
                                                                <a href="#" class="icon-button icon-compare">Checkout</a>
                                                            </div><!-- End .item-action-inner -->
                                                        </div><!-- End .item-action -->
                                                    </div><!-- End .item-meta-container -->
                                                </div><!-- End .item -->
                                            </div><!-- End .owl-single-col  -->
                                        </div><!-- End .special-tab-slider -->

                                    </div><!-- End .tab-pane -->


                                </div><!-- End #products-tabs-content -->

                            </div><!-- End .main-tab-container -->

                            <div class="xs-margin"></div><!-- Space -->

                            <!-- <div class="banner-hero">
                                <h2>Lookbook</h2>
                                <h3>Spring-Summer 2014</h3>
                                <p>Praesent arcu urna, cursus sit amet condimentum id, dapibus mauris. Sed ante massa pellentesque luctus, magna.</p>
                                <a href="#" class="btn btn-custom-2">Take Look</a>
                            </div> --><!-- End .banner-hero -->

                            <div class="lg-margin2x"></div><!-- Space -->

                            <div class="xlg-margin"></div><!-- Space -->

                            <div id="services-slider-container" class="carousel-wrapper">
                                <header class="content-title">
                                    <div class="title-bg">
                                        <h2 class="title">Наши услуги</h2>
                                    </div><!-- End .title-bg -->
                                </header>
                                <div class="carousel-controls">
                                    <div id="services-slider-prev" class="carousel-btn carousel-btn-prev">
                                    </div><!-- End .carousel-prev -->
                                    <div id="services-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                                    </div><!-- End .carousel-next -->
                                </div><!-- End .carousel-controllers -->
                                <div class="sm-margin"></div><!-- space -->
                                <div class="row">
                                    <div class="services-slider owl-carousel">
                                        <div class="services-box">
                                            <div class="service-icon service-icon-development"></div>
                                            <h3>
                                                <a href="#">Изготовление</a>
                                                <span class="small-bottom-border"></span>
                                            </h3>
                                            <p>Quisque ac quam id quam ullam lorem corper dignissim ullamcorper nisi. Cras ullamcorper ullamcorperultrices. Etiam diam est, adipiscing vitae nibh in, rhoncus laoreet nunc nulla facilisi.</p>
                                        </div><!-- End .services-box -->

                                        <div class="services-box">
                                            <div class="service-icon service-icon-branding"></div>
                                            <h3>
                                                <a href="#">Продажа</a>
                                                <span class="small-bottom-border"></span>
                                            </h3>
                                            <p>Proin eget sodales magna. Proin acest convallis, interdum odio vel, luctus nibh. Fusce iaculis sollicitudin metus, sed aliquet erat fringilla et. Nulla vel metus mattis odio porttitor dapibus vestibulum.</p>
                                        </div><!-- End .services-box -->

                                        <div class="services-box">
                                            <div class="service-icon service-icon-marketing"></div>
                                            <h3>
                                                <a href="#">Ремонт</a>
                                                <span class="small-bottom-border"></span>
                                            </h3>
                                            <p>Praesent gravida malesuada fabus.Etiam vehicula massa eget nislante, posuere, vel bibendum nisl elementum. Donec laoreet placerat nibh eget vulputate dui. Pellentesqu tincidunt convallis tempor.</p>
                                        </div><!-- End .services-box -->

                                        <!-- End .services-box -->

                                    </div><!-- End .services-slider -->
                                </div><!-- End .row -->
                            </div><!-- End .services-slider-container -->

                            <div class="md-margin2x"></div><!-- space -->



                            <div class="md-margin2x"></div><!-- Space -->
                        </div><!-- End .col-md-9 -->

                    </div><!-- End .row -->

                </div><!-- End .col-md-12 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

    </section><!-- End #content -->

@stop