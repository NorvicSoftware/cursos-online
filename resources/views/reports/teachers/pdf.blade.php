<html>
    <header>
        <title>REPORTES</title>
    </header>
    <body>
        <h2>REPORTES DE PROFESORES CON MATERIAS</h2>
        <table>
                <thead>
                <tr>
                    <th>Profesor</th>
                    <th>Profesión</th>
                    <th >Grado Academico</th>
                    <th >Materias</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        @if($teacher->full_name === "Carla Ortiz")
                            <td class="dept">{{ $teacher->full_name }}</td>

                        @else
                            <td>{{ $teacher->full_name }}</td>
                        @endif
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
    </body>
</html>


<style>

    th {
        background-color: #796F6C;
    }
    .dept {
        color: #D53E11;
    }
</style>