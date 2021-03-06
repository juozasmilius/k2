<!DOCTYPE html>
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
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     
</head>
<body>
    <div id="_app">
        
        
                @auth
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            @include('inc.leftsidebar')
                        </div>
                        <div class="col">
                            @include('inc.navbar')
                            <main class="py-4">
                                <div class="container">
                                        @yield('content')
                                </div>
                            </main>
                        </div>
                        
                    </div>
                </div>
                @else
                @include('inc.navbar')
                <main class="py-4">
                    <div class="container">
                        @yield('content')
                    </div>
                </main>
                @endauth
    </div>
</body>

</html>
