<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('assets') }}/" data-template="vertical-menu-template"
    data-style="light">

<head>
    @include('layouts.head')
</head>

<body>

    <div id="appCapsule">
        @include('layouts.sidebar')
        @yield('content')
    </div>

    @stack('myscript')
    @include('layouts.footer')

</body>

</html>
