<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Activity</title>
    @include('layout.links')
    @yield('styles')
</head>

<body class="p-5">
    @yield('main-content')
</body>
    @include('layout.script')
    @yield('scripts')

</html>
