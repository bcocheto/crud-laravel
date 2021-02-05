<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD Laravel 7</title>

        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
<style>
            body{
	margin:0;
	color:#6a6f8c;
	background:#c8c8c8;
	font:600 16px/18px 'Open Sans',sans-serif;
}

        </style>
    </head>
    <body>


                @yield('content')

    <div class="content">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class=" links">
                    @auth
                        <a href="{{ url('/home') }}"></a>
                    @else
                        <a href="{{ route('login') }}"></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"></a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
    </body>
</html>
