@extends('layout')
@section('content')
<div class="content">
    <x-menu />
</div>
<form action="{{ route('students.store')}}" method="POST">
    @csrf
    <label>Estudiente</label>
    <input type="text" name="full_name" maxlength="75"/>
    @if($errors->has('full_name'))
        <div class="error">{{ $errors->first('full_name')}}</div>
    @endif

    <label>Edad</label>
    <input type="text" name="age"/>
    @if($errors->has('age'))
        <div class="error">{{ $errors->first('age')}}</div>
    @endif

    <label>telefono</label>
    <input type="text" name="phone"/>
    @if($errors->has('phone'))
        <div class="error">{{ $errors->first('phone')}}</div>
    @endif
    <button type="submit">Guardar</button>
</form>

@endsection
