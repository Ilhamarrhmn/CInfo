<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ Storage::url('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ Storage::url('assets/datatables/datatablecss.min.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="storage/assets/img/cinfo_logo.png" loading="lazy"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                                    <a class="dropdown-item" href="/home">{{ __('User') }}</a>
                                    <a class="dropdown-item" href="/admingambar">{{ __('Gambar') }}</a>
                                    <a class="dropdown-item" href="/adminupload">{{ __('Artikel') }}</a>

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

        <main class="container mt-5">
            @yield('content')
        </main>
    </div>

    <!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
    <script src = "{{asset ('assets/js/bootstrap.min.js')}}"> </script> -->
    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script type="text/javascript" src="{{ Storage::url('assets/datatables/jquery-3.5.1.js') }}"></script>
	<script type="text/javascript" src="{{ Storage::url('assets/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ Storage::url('assets/datatables/jquery.dataTables.min.js') }}"></script>
	<script type="text/javascript" src="{{ Storage::url('assets/datatables/datatable.bootstrap4.min.js') }}"></script>

    @stack('js')
</body>
</html>
