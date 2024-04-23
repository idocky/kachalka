<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->
<head>
    <title>G2O Gym | Bootstrap Theme by WebThemez</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Gym website, Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Bootstrap 4 Template by WebThemez">
    <meta name="author" content="webthemez.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/font-awesome/css/fontawesome-all.min.css') }}">
    {{--    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/slick-carousel/slick.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/magnific-popup/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hovereffects.css') }}">
    <!-- Theme Styles -->
    <link href="{{ asset('css/scrolling-nav.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<!-- End Head -->

<body>


<!-- Header -->
<header id="top">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">G2O Gym</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu text-primary"></span>
            </button>

        </div>
    </nav>
    <!-- End Navbar -->
    <section class="wt-section hero-large hero mt-md-5">
        <div class="hero-img bg-overlay" data-overlay="0" style="background-image: url({{asset('img/intro/img5.jpg')}});"></div>
        <div class="container">
            <div class="row align-items-center text-white">
                <div class=" col-md-6">
                    <h1 class="text-uppercase display-3 font-weight-bolder" data-aos="fade-right">
                        Ultimate Fitness
                    </h1>
                    <!-- heading -->

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="email">Електронна пошта</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Введіть електронну пошту">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Пароль</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Введіть пароль">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Зареєструватися</button>
                            </form>
                        </div>


                     </div>
            </div>

        </div>
    </section>

</header>
<!-- End Header -->



<!-- Footer -->
<footer class="bg-dark py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
                <small class="text-white">&copy; All Rights Reserved</small>
            </div>

            <div class="col-md-4 align-self-center">
                <ul class="list-inline text-center text-md-right mb-0">
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <a class="text-white" target="_blank" href="https://www.facebook.com/Maxi">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                        <a class="text-white" target="_blank" href="https://www.instagram.com/Maxi">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <a class="text-white" target="_blank" href="https://twitter.com/Maxi">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- JS Script Files -->
<script src="{{ asset('vendors/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/jquery.migrate.min.js') }}"></script>
<script src="{{ asset('vendors/popper.min.js') }}"></script>
<script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Components Vendor  -->
<script src="{{ asset('vendors/slick-carousel/slick.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="{{ asset('vendors/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('vendors/counters/waypoint.min.js') }}"></script>
<script src="{{ asset('vendors/counters/counterup.min.js') }}"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('js/scrolling-nav.js') }}"></script>
<!--Plugin Initialize-->
<script src="{{ asset('js/global.js') }}"></script>

<!-- Theme Components and Settings -->
<script src="{{ asset('vendors/carousel.js') }}"></script>
<script src="{{ asset('vendors/counters.js') }}"></script>

<!-- END JAVASCRIPTS -->

</body>
<!-- End Body -->
</html>

