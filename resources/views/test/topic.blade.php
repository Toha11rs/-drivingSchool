<link href="{{ asset('css/app.css') }}" rel="stylesheet">


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
    <ul id="options"></ul>
    <p id="result"></p>

    <button id="answer-btn" style="display: none;">Ответить</button>
    <button id="next-btn" style="display: none;">Следующий вопрос</button>
    <div id="answer-tip"></div>
</div>


@include("BladeJs.TopicJS")
@endsection
