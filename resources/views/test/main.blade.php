<!DOCTYPE html>
<html>
<head>
    <title>Тест ПДД</title>

</head>
<body>
<h1>Билеты ПДД (категория A и B)</h1>


@for ($i = 1; $i < 41; $i++)
  <a href="{{route("ticket",["ticketId"=>$i])}}">  Билет № {{$i}}</a>
    @endfor
</body>

</html>
