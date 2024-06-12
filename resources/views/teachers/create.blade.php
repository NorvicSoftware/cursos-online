@extends('layout')
@section('header') PROFESORES @endsection
@section('content')
<div class="container">
        <div>
            <x-menu />
        </div>
    <form action="{{ route("teachers.store") }}" method="POST">
        @csrf
        <label> {{__('Full name')}}</label>
        <input type="text" name="full_name" id="full_name" />
        @if($errors->has('full_name'))
            <div class="error">{{ $errors->first('full_name') }}</div>
        @endif
        <br>
        <label> {{ __('Profession')}}</label>
        <input type="text" name="profession" id="profession" />
        @if($errors->has('profession'))
            <div class="error">{{ $errors->first('profession') }}</div>
        @endif<br>
        <label> {{__('Grade')}}</label>
        <input type="text" name="grade" id="grade" /><br>
        <label> {{__('Phone')}}</label>
        <input type="text" name="phone" id="phone" />
        @if($errors->has('phone'))
            <div class="error">{{ $errors->first('phone') }}</div>
        @endif<br>
        <button type="submit">{{__('Save teacher')}}</button>
    </form>
</div>
@endsection
