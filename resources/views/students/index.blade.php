@extends('layout')
@section('content')
    <div class="container">
        <div>
            <x-menu />
        </div>
        <main>
            <h1>LISTADO DE ESTUDIANTES</h1>
            <div class="actions">
                <a class="button-link" href="#">Nuevo Estudiente</a>
            </div>
            <table>
                <thead>
                <tr>
                    <th>Estudiente</th>
                    <th>Edad</th>
                    <th>Acción</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->full_name }}</td>
                        <td>{{ $student->age }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </main>
    </div>

@endsection


