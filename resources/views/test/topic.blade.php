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

@include("components.header.headerProfile")

<div class="container">
<div id="quiz pdd-ticket" class="question">
    <div id="progress" style="display:inline-block"></div>
    <p id="counter"></p>
    <img class="centerque" id="question-image" src="" alt="Фото вопроса">
    <h2 class="questions centerque" id="question"></h2>
    <ul id="options">
        
    </ul>
    <p id="result"></p>

    <button id="answer-btn" style="display: none;" class="buttonnext">Ответить</button>
    <button id="next-btn" style="display: none;" class="buttonnext">Следующий вопрос</button>
    <div class="hint-text" id="answer-tip"></div>
</div>

<form id="myForm" action="{{route("ticketStore")}}" method="post">
    @csrf
    <input type="hidden" name="correctAnswers" >
</form>
</div>

@include("components.footer.footerMain")

@include("BladeJs.TopicJS")
@endsection

<style>
    .square {
    
    border-radius: 2px;
    color: var(--link,#1b75cc);
    float: left;
    font-size: 16px;
    height: 40px;
    line-height: 40px;
    margin-bottom: 10px;
    margin-left: 10px;
    text-align: center;
    text-decoration: none;
    width: 40px;
  
    }
</style>
