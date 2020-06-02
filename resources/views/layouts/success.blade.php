<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @stack('prependstyle')
    @include('includes.style')
    @stack('addonstyle')
</head>

<body>

    @include('includes.navbar2')

    @yield('content')

    @stack('prependscript')
    @include('includes.script')
    @stack('addonscript')
</body>

</html>


