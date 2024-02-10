<link href="{{ asset('css/app.css') }}" rel="stylesheet">


@extends('layouts.app')
@section('title', 'Тестовый билет')
@section('content')
@include("components.header.headerProfile")

<div class="container">
<div id="question-container"></div>
<button id="answer-btn">Ответить</button>
<p id="counter"></p>
<p id="result-container"></p>
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
</div>



@include("components.footer.footerMain")
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@include("BladeJs.ExamJS")

@endsection

