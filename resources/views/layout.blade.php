<!DOCTYPE html>
<html>
    <head>
        @stack('head')
    </head>
    <body>
        @yield('content')
        @stack('scripts')
    </body>
</html>