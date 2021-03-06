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

    <script language='javascript' src='https://banners.adnetmedia.lt/keytarget/keytarget_async.js' async></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     
</head>
<body>
    <div id="app">
        
        
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
<script id='ibbTagEngine' language='javascript' src='//bbcdn-static.bbelements.com/scripts/ibb-async/stable/tag.js'></script>
<script language='javascript'>
	var adserver = ibbAds.tag.useAdProvider('BbmEu');
	if(window.innerWidth >= 981){
		adserver.manageAdSlot('KP00_pixel', '25593.1.9.2');
		adserver.manageAdSlot('KP01_1160x250', '25593.1.1.1');
		adserver.manageAdSlot('KP02_300x600_1', '25593.1.2.3');
		adserver.manageAdSlot('KP03_300x600_2', '25593.1.3.3');
		adserver.manageAdSlot('KP04_798x200_1', '25593.1.4.1');
		adserver.manageAdSlot('KP05_798x200_2', '25593.1.6.1');
	}
	if(window.innerWidth <= 980){
		adserver.manageAdSlot('KP06_Mobile_Pixel', '25593.2.3.2');
		adserver.manageAdSlot('KP07_Mobile_300x250_1', '25593.2.1.3');
		adserver.manageAdSlot('KP08_Mobile_300x250_2', '25593.2.2.3');
	}
</script>

</html>
