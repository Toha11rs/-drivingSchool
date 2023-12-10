<!DOCTYPE html>
<html>
<head>
    <title>Тест ПДД</title>
</head>
<body>
<h1>Билеты ПДД (категория A и B)</h1>


@for ($i = 1; $i < 41; $i++)
        <a class="square" style="background-color: {{ $color_exam[$i] }}" href="{{ route("ticket", ["ticketId" => $i]) }}"> {{ $i }}</a>
@endfor


<a href="{{ route("exam") }}"><p>Экзамен</p></a>

<p id="openModalBtn">Выбрать тему</p>

@include("test.modal.topicModal")


</body>
</html>
<style>
    .square {
    background: #ffffff;
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
    color: #fff;
    }
</style>
