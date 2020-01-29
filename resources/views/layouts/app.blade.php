<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Goon ')}}</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <script src="{{asset('css/src/js/jquery-3.3.1.slim.min.js')}}"></script>
        <script src="{{asset('css/src/js/popper.min.js')}}"></script>
        <script src="{{asset('css/src/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('css/src/js/bs-custom-file-input.js')}}"></script>
        <script src="{{asset('css/src/js/gijgo.min.js')}}" type="text/javascript"></script>
        <link href="{{asset('css/gijgo.min.css')}}" rel="stylesheet" type="text/css" />

    </head>
    <body>
        @include('inc.nav')

        <main role="main" style="margin-top:150px;">
            <div class="container-fluid">
                @include('inc.messages')
                @yield('content')
            </div>
        </main>
    </body>
</html>
