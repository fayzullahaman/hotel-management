<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/front_assets/image/favicon.png" type="image/png">
    <title>Royal Hotel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/front_assets/css/bootstrap.css">
    <link rel="stylesheet" href="/front_assets/vendors/linericon/style.css">
    <link rel="stylesheet" href="/front_assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/front_assets/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/front_assets/vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/front_assets/vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="/front_assets/vendors/owl-carousel/owl.carousel.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="/front_assets/css/style.css">
    <link rel="stylesheet" href="/front_assets/css/responsive.css">
    <style type="text/css">
      #map {
        height: 400px;
      }
  </style>
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="/front_assets/image/Logo.png"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('about')}}">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('accomodation')}}">Accomodation</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('gallery')}}">Gallery</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{url('blog')}}">Blog</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('blog_details')}}">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{url('contact')}}">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('admin/dashboard')}}">Admin</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
