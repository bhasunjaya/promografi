<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> {{--
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    @stack('css')

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>@yield('page_title','Promo Diskon Terbaru Di Seluruh Mall Jakarta') - Promografi.id</title>
    <meta name="keywords" content="@yield('page_keywords','promo,promosi,discount,diskon,jakarta,mall')">
    <meta name="description" content="@yield('page_description','Promografi adalah sebuah info promosi, promo dan discount terlengkap untuk seluruh mall di jakarta')">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110999096-1"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag() { dataLayer.push(arguments); }gtag('js', new Date());gtag('config', 'UA-110999096-1');</script>


</head>

<body>


    <!-- preloader -->
    <div id="preloader"></div>
    <!-- end preloader -->
    @include('components.sidebar')


    <!-- wrap content -->
    <div class="wrap-content pusher">


        <!-- navbar -->
        <div class="navbar">
            <div class="ui container">
                <div class="ui grid">
                    <!-- navbar toggle left -->
                    <div class="five wide column">
                        <div class="navbar-toggle-left navbar-icon">
                            <i class="fa fa-navicon"></i>
                        </div>
                    </div>
                    <!-- navbar logo -->
                    <div class="six wide column">
                        <div class="navbar-logo">
                            <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="Promografi diskon promo"></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end navbar -->
        <div class="dalem">
            @yield('content')
        </div>

        <!-- footer -->
        <footer class="footer">
            <div class="ui container">
                <div class="content">
                    <img src="{{asset('images/logo.png')}}" alt="Promografi Logo" class="logo">
                    <p>Address: New York, United States 090</p>
                    <p>Email: contact@yourstore.com</p>
                    <p>Phone: +19993394</p>
                    <div class="social-link">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-google"></i></a>
                    </div>
                </div>
            </div>
            <div class="reserved">
                <p>Copyright © All Right Reserved</p>
            </div>
        </footer>
        <!-- end footer -->

    </div>
    <!-- end wrap content -->

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/semantic.min.js')}}"></script>

    @stack('scripts')

    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

</body>

</html>
