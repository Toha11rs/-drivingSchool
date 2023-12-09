<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

@extends('layouts.app')
@section('title', 'Тестовый билет')
@section('content')
<body>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="container">
<div id="question-container"></div>


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
    </div>
<meta name="csrf-token" content="{{ csrf_token() }}">
@include("BladeJs.TicketJS")

<form id="myForm" action="{{route("ticketStore")}}" method="post">
    @csrf
    <input type="hidden" name="correctAnswers" >
    <input type="hidden" name="incorrectAnswers" >
</form>
@endsection
