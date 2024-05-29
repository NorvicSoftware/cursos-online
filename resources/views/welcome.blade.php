<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">

{{--    @foreach($students as $student)--}}
{{--        {{ $student->full_name }}<br>--}}
{{--        @foreach($student->courses as $course)--}}
{{--            {{ $course->name }}--}}
{{--        @endforeach--}}
{{--        <br><br><br>--}}
{{--    @endforeach--}}

{{--{{ $students }}--}}

{{--    @foreach($students as $student)--}}
{{--         {{ $student->full_name }}<br>--}}
{{--                 @foreach($student->courses as $course)--}}
{{--                     {{ $course->name }}--}}
{{--                     {{ $course-> }}--}}
{{--                 @endforeach--}}
{{--         <br>--}}
{{--         <br>--}}
{{--    @endforeach--}}
    @php  $count = 0;@endphp
    @foreach($students as $student)
        {{ $count++ }} {{$student->full_name}} {{ $student->country }}<br>
{{--        {{$course->full_name}}<br><br>--}}
    @endforeach
    </body>
</html>
