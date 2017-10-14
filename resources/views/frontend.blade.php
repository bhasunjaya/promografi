<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <!-- <link rel="stylesheet" href="assets/fonts/font-awesome.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="assets/css/selectize.css" type="text/css"> -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/user.css')}}">

    <title>Craigs - Easy Buy </title>

</head>

<body>

    <div class="page home-page">
        <header class="hero has-dark-background">
            <div class="hero-wrapper">
                <!--============ Main Navigation ====================================================================-->
                <div class="main-navigation">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{asset('images/logo.png')}}" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar">
                                <!--Main navigation list-->
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Home</a>
                                    </li>
                                </ul>
                                <!--Main navigation list-->
                            </div>
                            <!--end navbar-collapse-->
                        </nav>
                        <!--end navbar-->
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Main Navigation ================================================================-->

                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>Listing List Full Width</h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <div class="background">
                    <div class="background-image">
                        <img src="{{asset('images/hero-background-image-01.jpg')}}" alt="">
                    </div>
                    <!--end background-image-->
                </div>
                <!--end background-->



            </div>
        </header>

        <section class="content">
            @yield('content')

        </section>
    </div>



    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>

</body>
</html>
