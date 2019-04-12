<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fasthousing') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="canonical" href="index.html" />
    <link rel="shortcut icon" type="image/png" href="img/logo1.png" />
    

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="css/loader.css">
    


    <!--            Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->

    <style>
    
    a:hover{
        color:rgb(245, 105, 9)!important;
    }
    .card{
        background-color: #ffffff1a!important;
    }
    #app{
        
    background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url(../img/home.jpg);
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: cover;
    -webkit-box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, .5);
    box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, .5);
    color: #fff;
    text-align: left;
    height: 500px;
    }
    @media only screen and (max-width: 767px) {
        .navbar{
            background-color:#ffffff1a;
        }
        #app{
            height: 780px;
        }
        .card{
            margin-top: 4rem;
        }
    }  
    @media screen and (max-width:361px) and (min-width: 290px){

        .card{
            width: 18rem;
        }

    }

  

    </style>
    
</head>
<body>
    <div id="app">

        <!-- Navbar -->

        <!-- <div id="loader-wrapper">
            <div id="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

      </div>  
        -->
       
        <nav class="navbar navbar-expand-lg  navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('img/logo1.png')}}" style="height: 2.5rem;;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon" style="color:white;"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    
                    <ul class="navbar-nav ml-auto">
                       
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="color: white">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color: white">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> 

        <main style="padding-bottom:4rem;">
            @yield('content')

            
           
        </main>
    </div>
     <div class="foot">
     @include('layouts.footer')
    </div>
    <!--     Scripts-->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    
    <script>

    $(document).ready(function() {
            
            setTimeout(function(){
            $('body').addClass('loaded');
            
            }, 2000);
            
        });

    </script>
</body>
</html>
