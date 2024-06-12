@extends('layout')
@section('header') PROFESORES @endsection
@section('content')
    <div class="container">
        <div>
            <x-menu />
        </div>
        <main>
            <h1>REPORTES DE PROFESORES CON MATERIAS</h1>
            <a href="{{ route('reports.teachers.pdf') }}" target="blank">IMPRIMIR PDF</a>
            <a href="{{ route('reports.teachers.excel') }}">IMPRIMIR EXCEL</a>
            <table>
                <thead>
                <tr>
                    <th>Profesor</th>
                    <th>Profesión</th>
                    <th>Grado Academico</th>
                    <th>Materias</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->full_name }}</td>
                        <td>{{ $teacher->profession }}</td>
                        <td>{{ $teacher->grade }}</td>
                        <td>
                            @foreach ( $teacher->courses as $course )
                                {{ $course->name }}<br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </main>
    </div>
@endsection

