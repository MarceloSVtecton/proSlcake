@include('/layouts/head')
@include('/layouts/header')
@include('/layouts/nav')
<!DOCTYPE html>
    @yield('cabeçalho')
<body>
    @yield('content')
    @yield('navegar')
</body>
</html>