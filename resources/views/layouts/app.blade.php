<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ URL::asset('style.css') }} ">
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid ">
                <a class="navbar-brand text-light" href="{{ url('/') }}">
                    <span style="color:blue;width:500px;">&#10094;</span> JOB ADS <span style="color:blue">∕❯</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                    @if($currentLocale=="en")
                                    <span class="nav-link text-secondary">EN</span>
                                    @else
                                    <a class="nav-link text-primary" href="{{ route('lang', ['locale' => 'en']); }}">EN</a>
                                    @endif
        
                                </li>
                                <li class="nav-item">
                                    @if($currentLocale=="sr")
                                    <span class="nav-link text-secondary">SR</span>
                                    @else
                                    <a class="nav-link text-primary" href="{{ route('lang', ['locale' => 'sr']); }}">SR</a>
                                    @endif
                                </li>
                            </ul>

                            {{-- <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                   
                                    <a class="nav-link text-light" href="{{ route('lang', ['locale' => 'en']); }}">EN</a>
                                    
        
                                </li>
                                <li class="nav-item">
                                   
                                    <a class="nav-link text-light" href="{{ route('lang', ['locale' => 'sr']); }}">SR</a>
                                    
                                </li>
                            </ul> --}}



                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">

                                    <a class="nav-link text-light" href="{{ route('login') }}"><i
                                            class="fa-solid fa-arrow-right-to-bracket"></i>{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}"><i
                                            class="fa-solid fa-user-plus"></i>{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-light" href="{{ route('manage') }}"><i class="fa fa-cog"></i>
                                    {{ __('Manage listings') }}</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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

        <main class="py-4">

            @if (session('alertMsg'))

            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show"
                class="alert alert-{{ session('alertType') }} alert-dismissible fade show" role="alert">
                <p>{{ session('alertMsg') }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

            </div>


            @endif

            @yield('content')
        </main>
    </div>
    <br><br><br><br><br><br>

    <footer class="fixed-bottom text-center text-white" style="background-color: #0a4275;">
        <div class="container p-4 pb-0">

            <section class="">
                @auth


                    <p class="d-flex justify-content-center align-items-center">
                        <a href="/listings/create"
                            class="btn btn-secondary text-decoration-none text-white justify-center fs-4">{{__('Post Job')}}</a>
                    </p>
                @endauth
            </section>
            <p> Copyright &copy; 2023, All Rights reserved</p>
        </div>
    </footer>

</body>
<script src="//unpkg.com/alpinejs" defer></script>

</html>
