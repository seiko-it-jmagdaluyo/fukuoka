<!doctype html>
<!-- <html lang="{{ app()->getLocale() }}"> -->
<html lang="en">
    <head>
        @include('partials._head')
        @include('partials._stylesheets')
        @yield('css')
    </head>
    <body>
        @include('partials._header')

        @include('partials._topnav')
        
        @if(Request::is("/") or Request::is("en-fta") or Request::is("cn-fta"))
            @yield('carousel')
        @else
            @yield('titlebar')
        @endif

        <div class="container">
            @yield('content')
        </div>

        @include('partials._footer')
        @include('partials._javascripts')
        @yield('js')
    </body>
</html>
