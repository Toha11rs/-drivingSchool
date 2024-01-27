<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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

    <button id="bookButton">Выбрать дату занятия</button>

    <div id="selectedDate"></div>

    <div id="timeSlots"></div>


    <style>
        /* Стили для временных слотов */
        .time-slot {
            width: 50px;
            height: 50px;
            display: inline-block;
            border: 1px solid #ccc;
            margin: 5px;
            text-align: center;
            line-height: 50px;
            cursor: pointer;
        }

        /* Стили для занятых временных слотов */
        .busy {
            background-color: red; /* Цвет для занятых слотов */
            color: white;
        }

        /* Стили для выбранного временного слота */
        .selected {
            background-color: green; /* Цвет для выбранного слота */
            color: white;
        }

        /* Скрытый элемент формы */
        #selectedDateTime {
            display: none;
        }
    </style>
    <div id="successMessage" style="display: none;">Вы успешно записались на урок на время: <span id="lessonTime"></span></div>

    <form id="bookingForm" method="post" action="{{route("instructorModalStore",["instructorId"=>$instructor->id])}}">
        @csrf
        <input type="hidden" name="calendar" id="selectedDateTime">
        <input type="hidden" name="user_id" value="{{$user->id}}">
        <input type="hidden" name="instructor_id" value="{{$instructor->id}}">
        <button type="submit" id="submitBtn" style="display: none;">
            Записаться на урок
        </button>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>

        $(document).ready(function() {
            var selectedDateTime = '';

            // Кнопка "Записаться" открывает календарь для выбора даты
            $('#bookButton').click(function() {
                openDatePicker();
                $(this).hide();
            });

            // Функция для открытия календаря Datepicker
            function openDatePicker() {
                $('<div id="datepicker"></div>').datepicker({
                    dateFormat: 'dd.mm.yy',
                    onSelect: function(dateText) {
                        // При выборе даты отображаем временные слоты и выбранную дату
                        $('#selectedDate').text('Выбранная дата: ' + dateText);
                        showTimeSlots(dateText);
                    },
                    onClose: function() {
                        $(this).remove(); // Удаляем календарь после выбора даты
                    }
                }).appendTo('#timeSlots');
            }

            // Функция для отображения временных слотов
            function showTimeSlots(selectedDate) {
                // Очищаем содержимое блока временных слотов
                $('#timeSlots').empty();

                // Создаем временные слоты для выбранной даты (предположим, что есть данные о занятых временных слотах)
                var timeSlots = [
                    '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00'
                ];

                // Проходимся по временным слотам и отображаем их
                timeSlots.forEach(function(time) {
                    var slotElement = $('<div class="time-slot">' + time + '</div>');

                    // Проверяем, занят ли данный временной слот (предположим, что есть данные о занятых слотах)
                    // Здесь вы можете добавить логику проверки наличия записей в этот временной слот
                    var isSlotBusy = checkIfSlotIsBusy(selectedDate, time); // Функция для проверки доступности слота

                    // Если слот занят, добавляем класс busy для стилизации
                    if (isSlotBusy) {
                        slotElement.addClass('busy');
                    } else {
                        // Если слот свободен, добавляем обработчик клика
                        slotElement.click(function() {
                            // Удаляем выделение у других слотов
                            $('.time-slot').removeClass('selected');
                            // Выделяем выбранный слот
                            $(this).addClass('selected');
                            // Сохраняем выбранную дату и время
                            selectedDateTime = selectedDate + ' ' + time;
                            // Записываем значение в скрытое поле формы
                            $('#selectedDateTime').val(selectedDateTime);
                            // Показываем кнопку "Записаться"
                            $('#submitBtn').show();
                        });
                    }

                    // Добавляем временной слот на страницу
                    $('#timeSlots').append(slotElement);
                });
            }

            // Функция для проверки доступности временного слота (замените эту функцию на вашу логику)
            function checkIfSlotIsBusy(date, time) {
                // Здесь вы можете выполнить проверку наличия записей для выбранной даты и времени
                // Например, запрос к серверу для проверки наличия записей на это время
                // Верните true, если слот занят, и false, если свободен
                // Это просто заглушка, нужно реализовать вашу логику
                return false;
            }

            // Обработчик отправки формы
            var selectedDateTime = '';

            $('#bookingForm').submit(function(e) {
                e.preventDefault();
                selectedDateTime = $('#selectedDateTime').val();

                fetch($(this).attr('action'), {
                    method: 'POST',
                    body: new FormData(this)
                })
                    .then(function(response) {
                        console.log('Статус:', response.status);
                        console.log(selectedDateTime);

                        // После успешной отправки формы
                        $('#successMessage').text('Вы успешно записались на урок на время: ' + selectedDateTime);
                        $('#successMessage').show(); // Показываем сообщение
                        $('#lessonTime').text(selectedDateTime); // Выводим выбранное время в сообщении
                        $('#bookingForm').hide();
                        $('#selectedDate').hide();
                        $('#timeSlots').hide();
                        $('#instructorModal').hide();
                    })
                    .catch(function(error) {
                        console.error('Ошибка:', error);
                    });
            });

        });
    </script>

</div>
