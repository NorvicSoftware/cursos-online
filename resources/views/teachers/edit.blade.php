@extends('layout')
@section('header') PROFESORES @endsection
@section('content')
<div class="container">
        <div>
            <x-menu />
        </div>
<form action="{{ route('teachers.update', $teacher->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label> Nombre del profesor</label>
    <input type="text" name="full_name" id="full_name" value="{{ $teacher->full_name }}" /><br>
    @if($errors->has('full_name'))
            <div class="error">{{ $errors->first('full_name') }}</div>
        @endif
    <label> Profesión</label>
    <input type="text" name="profession" id="profession" value="{{ $teacher->profession }}" /><br>
    @if($errors->has('profession'))
        <div class="error">{{ $errors->first('profession') }}</div>
    @endif
    <label> Grado academico</label>
    <input type="text" name="grade" id="grade" value="{{ $teacher->grade }}" /><br>
    <label> Celular</label>
    <input type="text" name="phone" id="phone" value="{{ $teacher->phone }}" /><br>
    <button type="submit">Guardar Profesor</button>
</form>
</div>
@endsection

