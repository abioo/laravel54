<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.header')
    @yield('head')
</head>

<body>
    <!-- Main navbar -->
    @include('partials.navbar')
    <!-- /Main navbar -->
    
    <!-- Main content -->
    @yield('body')
    <!-- /main content -->
    @include('partials.footer')
    @yield('foot')
</body>
</html>