@extends('layout')
@section('header') PROFESORES @endsection
@section('content')
    <h1>LISTADO DE PROFESORES</h1>
    <a href="/teachers/create">Nuevo Profesor</a>
    <table>
        <thead>
        <tr>
            <th>Profesor</th>
            <th>Profesión</th>
            <th>Grado Academico</th>
            <th>Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td>{{ $teacher->full_name }}</td>
                <td>{{ $teacher->profession }}</td>
                <td>{{ $teacher->grade }}</td>
                <td>
                    <a href="{{route('teachers.edit', $teacher->id)}}">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

