<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') - Jasiri Sacco</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css">

    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>
<body>

@include('partials.sub_header')


<div class="page-header" style="background: url(assets/img/banner.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-xs-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="product-title">@yield('title')</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home /</a></li>
                    <li class="current">@yield('title')</li>
                </ol>
            </div>
        </div>
    </div>
</div>

@yield('content')

<footer id="footer" class="footer-area section-padding">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="footer-titel">Products</h3>
                    <ul>
                        <li><a href="#">UIdeck</a></li>
                        <li><a href="#">Graygrids</a></li>
                        <li><a href="#">WPBean</a></li>
                        <li><a href="#">LineIcons</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="footer-titel">Company</h3>
                    <ul>
                        <li><a href="#">Press Releases</a></li>
                        <li><a href="#">Mission</a></li>
                        <li><a href="#">Strategy</a></li>
                        <li><a href="#">Works</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="footer-titel">About</h3>
                    <ul>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <h3 class="footer-titel">Find us on</h3>
                    <div class="social-icon">
                        <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                        <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
                        <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                        <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
                    </div>
                    <form method="post" id="subscribe-form" name="subscribe-form" class="validate">
                        <div class="form-group is-empty">
                            <input type="email" value="" name="Email" class="form-control" id="EMAIL" placeholder="Email address" required="">
                            <button type="submit" name="subscribe" id="subscribes" class="btn btn-common sub-btn"><i class="lni-check-box"></i></button>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright © 2018 <a rel="nofollow" href="https://uideck.com/">UIdeck</a> All Right Reserved</p>
            </div>
        </div>
    </div>
</section>

<a href="#" class="back-to-top">
    <i class="lni-arrow-up"></i>
</a>

<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>


<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.mixitup.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/nivo-lightbox.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
</body>

</html>
