<link href="{{ asset('css/app.css') }}" rel="stylesheet">


@extends('layouts.app')
@section('title')
    @php
        echo 'Билет № ' . $topicId;
    @endphp
@endsection
@section('content')
<div id="quiz">
    <h2 id="question"></h2>
    <ul id="options"></ul>
    <p id="result"></p>
    <p id="counter"></p>
    <div id="progress"></div>
    <button id="answer-btn" style="display: none;">Ответить</button>
    <button id="next-btn" style="display: none;">Следующий вопрос</button>
    <div id="answer-tip"></div>
</div>


@include("BladeJs.TopicJS")
@endsection
