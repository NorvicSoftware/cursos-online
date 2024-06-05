<html>
<header>
    <title>@yield('header')l</title>
</header>
<body>
<div>
    <ul>
        <li><a href="{{ route('teachers.index') }}">Profesor</a></li>
        <li><a href="{{ route('students.index') }}">Estudientes</a></li>
    </ul>
</div>
<div>
    @yield('content')
</div>
<footer>
    @yield('footer')
</footer>
</body>
</html>

