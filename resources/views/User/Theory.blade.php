@extends('layouts.theory')
@section('title', $theme)
@section('content')
    <link href="{{ asset('css/theory.css') }}" rel="stylesheet">

    <body>
    <div class="container-fluid">
        <div class="row">
            // УРОК
            @extends("Theory.components.lesson")
        </div>
    </div>
    </body>
@endsection
