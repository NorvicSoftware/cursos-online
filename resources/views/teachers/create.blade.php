<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profesores</title>
</head>
<body>
    <form action="{{ route("teachers.store") }}" method="POST">
        @csrf
        <label> Nombre del profesor</label>
        <input type="text" name="full_name" id="full_name" /><br>
        <label> Profesión</label>
        <input type="text" name="profession" id="profession" /><br>
        <label> Grado academico</label>
        <input type="text" name="grade" id="grade" /><br>
        <label> Celular</label>
        <input type="text" name="phone" id="phone" /><br>
        <button type="submit">Guardar Profesor</button>
    </form>
</body>
</html>
