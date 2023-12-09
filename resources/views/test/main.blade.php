<!DOCTYPE html>
<html>
<head>
    <title>Тест ПДД</title>
</head>
<body>
<h1>Билеты ПДД (категория A и B)</h1>


@for ($i = 1; $i < 41; $i++)
    <div class="square" style="background-color: {{ $color_exam[$i] }}">
        <a href="{{ route("ticket", ["ticketId" => $i]) }}">Билет № {{ $i }}</a>
    </div>
    <br>
@endfor
<a href="{{ route("exam") }}"><p>Экзамен</p></a>

<p id="openModalBtn">Выбрать тему</p>

@include("test.modal.topicModal")


</body>
</html>
<style>
    .square {
        width: 50px;
        height: 50px;
        outline: 2px solid #000;
        /*border-radius: 10px;*/
    }
</style>
