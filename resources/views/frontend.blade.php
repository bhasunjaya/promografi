<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msvalidate.01" content="D53999EBD8F94EE25AB4A9ED57F6C3BA" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> @stack('css')

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>@yield('page_title','Promo, Diskon dan Info Sale Seluruh Mall di Jakarta') - Promografi.id</title>
    <meta name="keywords" content="@yield('page_keywords','promo,promosi,discount,diskon,jakarta,mall')">
    <meta name="description" content="@yield('page_description','Temukan info promo, diskon, sale dan potongan harga paling murah untuk setiap mall dan pusat belanja di jakarta. ')">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110999096-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() { dataLayer.push(arguments); } gtag('js', new Date());
    gtag('config', 'UA-110999096-1');
    </script>


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
                            <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" alt="Promografi diskon promo" title="Promografi diskon promo info"></a>
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
            <div class="reserved">

                <div class="ui container">
                    <div class="ui grid">
                        <div class="content">
                            <div class="four column">
                                <img src="{{asset('images/logo.png')}}" alt="Promografi Logo" class="logo" title="logo diskon promo untuk promografi">
                                @if(isset($frontpage))
                                <h1>Platform untuk menemukan info promo, diskon, sale dan potongan harga paling murah untuk setiap mall dan pusat belanja di Jakarta</h1>
                                @else
                                <h2>Platform untuk menemukan info promo, diskon, sale dan potongan harga paling murah untuk setiap mall dan pusat belanja di Jakarta</h2>
                                @endif

                                <p>Email: admin@promografi.id</p>
                            </div>
                        </div>
                    </div>


                </div>
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
