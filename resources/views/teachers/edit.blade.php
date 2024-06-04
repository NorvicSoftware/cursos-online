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
<form action="{{ route("teachers.update", $teacher->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label> Nombre del profesor</label>
    <input type="text" name="full_name" id="full_name" value="{{ $teacher->full_name }}" /><br>
    <label> Profesión</label>
    <input type="text" name="profession" id="profession" value="{{ $teacher->profession }}" /><br>
    <label> Grado academico</label>
    <input type="text" name="grade" id="grade" value="{{ $teacher->grade }}" /><br>
    <label> Celular</label>
    <input type="text" name="phone" id="phone" value="{{ $teacher->phone }}" /><br>
    <button type="submit">Guardar Profesor</button>
</form>
</body>
</html>

