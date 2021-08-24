<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark sticky-top shadow-sm" style="background-color: #44749E">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h2>LOGO</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{url('/jobs')}}">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{url('/companies')}}">Companies</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{url('/about-us')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="{{url('/contact-us')}}">Contact Us</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="btn btn-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                </a>
                            
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    
        <main>
            @yield('frontend-content')
        </main>
    
        <footer class="page-footer font-small" style="background-color: #DEDEDE">
            <div class="container text-center text-md-left">
                <div class="row">
                    <div class="col-md-3 mx-auto">
                        <h2 class="font-weight-bold text-uppercase mt-3 mb-4">Logo</h2>
                    </div>
                    
                    <div class="col-md-3 mx-auto">
                        <h5 class="font-weight-bold text-uppercase text-primary mt-3 mb-4">Links</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="text-dark">link 1</a>
                            </li>
                            <li>
                                <a href="#" class="text-dark">link 2</a>
                            </li>
                            <li>
                                <a href="#" class="text-dark">link 3</a>
                            </li>
                        </ul> 
                    </div>

                    <div class="col-md-3 mx-auto">
                        <h5 class="font-weight-bold text-uppercase text-primary mt-3 mb-4">Links</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="text-dark">link 1</a>
                            </li>
                            <li>
                                <a href="#" class="text-dark">link 2</a>
                            </li>
                            <li>
                                <a href="#" class="text-dark">link 3</a>
                            </li>
                        </ul> 
                    </div>
                    
                    <div class="col-md-3 mx-auto">
                        <h5 class="font-weight-bold text-uppercase text-primary mt-3 mb-4">Links</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#" class="text-dark">link 1 </a>
                            </li>
                            <li>
                                <a href="#" class="text-dark">link 2</a>
                            </li>
                            <li>
                                <a href="#" class="text-dark">link 3</a>
                            </li>
                        </ul> 
                    </div>
                </div> 
            </div>
            <hr>
            <div class="footer-copyright text-center py-2 ">© 2020 Copyright:
                <a href="#" class="text-dark">khinezinthaw@gmail.com</a>
            </div> 
        </footer>
    </div>
</body>
</html>