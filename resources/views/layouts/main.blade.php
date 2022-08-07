<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.partials.head')

</head>
<body dir="{{ App::isLocale('fa') ? "rtl" : "ltr"}}">

    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    @include('layouts.partials.scripts')

</body>
</html>
