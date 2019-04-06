<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Default')</title>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact us to learn more</a></li>
    </ul>
    @yield('content')
</body>
</html>