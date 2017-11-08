<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/frontend/css/common/main.css')}}" type="text/css">

        <script src="{{asset('js/jquery-3.2.1.js')}}"></script>
    </head>
    <body>
        <div class="widget-header">
            @include('frontend::layouts.header')
        </div>
        @yield('content')
    </body>
    @yield('scripts')
</html>
