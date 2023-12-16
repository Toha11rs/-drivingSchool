<p><strong>ФИО:</strong> {{$instructor->name}}</p>
<p><strong>telegram:</strong> {{$instructor->telegram}}</p>
<p><strong>номер телефона:</strong> {{$instructor->phone}}</p>
<p><strong>Опыт:</strong> {{$instructor->experience}}</p>
<p><strong>Специализация:</strong> {{$instructor->category}}</p>
<div class="modal-body">
    <h4>Машины инструктора {{$instructor->name}}:</h4>

    @if ($instructor->drivingCar)
        <p><strong>Машина:</strong> {{$instructor->drivingCar->brand}}</p>
        <p><strong>Цвет:</strong> {{$instructor->drivingCar->color}}</p>
        <p><strong>Номер:</strong> {{$instructor->drivingCar->number}}</p>
        <p><strong>Тип:</strong> {{$instructor->drivingCar->type}}</p>
        <hr>
    @else
        <p>Нет данных о машинах для этого инструктора</p>
@endif
