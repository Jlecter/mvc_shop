<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="/app/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/app/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/app/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/app/template/css/price-range.css" rel="stylesheet">
        <link href="/app/template/css/animate.css" rel="stylesheet">
        <link href="/app/template/css/main.css" rel="stylesheet">
        <link href="/app/template/css/responsive.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="/app/template/js/html5shiv.js"></script>
        <script src="/app/template/js/respond.min.js"></script>
        <![endif]-->       

    </head><!--/head-->

    <body>
        <div class="page-wrapper">


            <header id="header"><!--header-->
                <div class="header_top"><!--header_top-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="contactinfo">
                                    <ul class="nav nav-pills">
                                        <li><a href="#"><i class="fa fa-envelope"></i> er.illia.radchenko@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="social-icons pull-right">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header_top-->

                <div class="header-middle"><!--header-middle-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="logo pull-left">
                                    <a href="/catalog"><img src="/app/template/images/home/logo.png" alt="" /></a>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="shop-menu pull-right">
                                    <ul class="nav navbar-nav">
                                        <li><a href="/cart">
                                                <i class="fa fa-shopping-cart"></i> Shopping cart
                                                (<span id="cart-count"><?php //echo Cart::countItems(); ?></span>)
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header-middle-->



            </header><!--/header-->