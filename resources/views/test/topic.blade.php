<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


@extends('layouts.app')
@section('title')
    @php
        echo 'Билет № ' . $topicId;
    @endphp
@endsection
@section('content')

<div id="progress"></div>
<div id="quiz pdd-ticket" style="background: #f5f5f5;">
    <p id="counter"></p>
    <h2 id="question"></h2>
    <img id="question-image" src="" alt="Фото вопроса" style="display: none;">
    <ul id="options"></ul>
    <p id="result"></p>

    <button id="answer-btn" style="display: none;">Ответить</button>
    <button id="next-btn" style="display: none;">Следующий вопрос</button>
    <div id="answer-tip"></div>
</div>

<form id="myForm" action="{{route("ticketStore")}}" method="post">
    @csrf
    <input type="hidden" name="correctAnswers" >
    <input type="hidden" name="incorrectAnswers">
</form>

@include("BladeJs.TopicJS")
@endsection
