<!DOCTYPE html>
<html class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

    @if (App::isLocale('ar'))
    <link rel="stylesheet" type="text/css" href="css/rtl.css"/>
@endif

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mirza:400,700" rel="stylesheet">
    <title>Welcome To Rana</title>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="h-100" data-spy="scroll" data-target="#myScrollspy" data-offset="1">
<!-- Header Section !-->
<header class="header align-items-center m-0 p-0 position-absolute w-100" id="header">
    <div class="w90">
        <nav class="navbar navbar-expand-md navbar-light p-0" id="myScrollspy"><a class="navbar-brand logo"
                                                                                  href="#"><img class="logo-default"
                                                                                                src="images/logo.png"/><img
                class="logo-sticky" src="images/logo-sticky.png"/></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end h-100 align-items-center p-0"
                 id="navbarSupportedContent">
                <ul class="navbar-nav h-100 align-items-center">
                    <li class="nav-item align-items-center"><a
                            class="nav-link align-items-center d-flex h-100 hvr-underline-from-left active"
                            href="#slideshow">{{ trans('language.Home') }}</a></li>
                    <li class="nav-item align-items-center"><a
                            class="nav-link align-items-center d-flex h-100 hvr-underline-from-left"
                            href="#about">{{ trans('language.About') }}</a></li>
                    <li class="nav-item align-items-center"><a
                            class="nav-link align-items-center d-flex h-100 hvr-underline-from-left " href="#cmc">
                            {{ trans('language.CMC Riyadh') }}</a></li>
                    <li class="nav-item align-items-center"><a
                            class="nav-link align-items-center d-flex h-100 hvr-underline-from-left "
                            href="#news">{{ trans('language.News') }}</a></li>
                    <li class="nav-item align-items-center"><a
                            class="nav-link align-items-center d-flex h-100 hvr-underline-from-left " href="#careers">
                            {{ trans('language.Careers') }}</a>
                    </li>
                    <li class="nav-item align-items-center"><a
                            class="nav-link align-items-center d-flex h-100 hvr-underline-from-left " href="#contact">
                            {{ trans('language.Contact us') }}</a></li>
                    <li class="nav-item align-items-center">
                            @if (App::isLocale('en'))
                            <a class="nav-link align-items-center d-flex h-100 hvr-underline-from-left " href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">العربية</a>
                            @else 
                            <a class="nav-link align-items-center d-flex h-100 hvr-underline-from-left " href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">English</a>
                            @endif
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<div class="clearfix"></div>