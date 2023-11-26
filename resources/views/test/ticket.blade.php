<link href="{{ asset('css/app.css') }}" rel="stylesheet">


@extends('layouts.app')
@section('title', 'Тестовый билет')
@section('content')
<body>
<div id="question-container"></div>
<button id="answer-btn">Ответить</button>
<div id="answer-tip"></div>
<button id="next-question-btn" style="display:none;">Перейти к следующему вопросу</button>
<table id="result-table" style="display:none;">
    <thead>
    <tr>
        <th>Номер вопроса</th>
        <th>Ваш ответ</th>
        <th>Правильный ответ</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>
<meta name="csrf-token" content="{{ csrf_token() }}">
@include("BladeJs.TicketJS")
@endsection
