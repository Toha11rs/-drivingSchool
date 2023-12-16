<div class="modal fade" id="instructorModal{{$instructor->id}}" tabindex="-1" role="dialog" aria-labelledby="instructorModalLabel{{$instructor->id}}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="instructorModalLabel{{$instructor->id}}">{{$instructor->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

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

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
