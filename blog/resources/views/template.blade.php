<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}"/>
    </head>  
    <body>
        @yield('navbar')
        
        @yield('content')
        
        @yield('footer')
        
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>

        <script src="{{asset('js/bootstrap.js')}}" type="text/javascript"></script>
        
        @yield('scripts')
    </body>  
</html>
