<html>
<header>
    <title>Laravel</title>
</header>
<body>
<div>
    <ul>
        <li><a href="{{ route('teachers.index') }}">Profesor</a></li>
        <li><a href="{{ route('students.index') }}">Estudientes</a></li>
    </ul>
</div>
<div>
    {{ $slot }}
</div>
</body>
</html>


