@extends('layouts.lessons')
@section('title', $theme)
@section('content')
    <link href="{{ asset('css/theory.css') }}" rel="stylesheet">

    <body>
    <div class="container-fluid">
        <div class="row">
            @extends("Lesson.components.lesson")
        </div>
    </div>
    </body>
@endsection
