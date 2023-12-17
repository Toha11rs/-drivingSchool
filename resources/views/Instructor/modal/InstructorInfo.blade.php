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

    <form id="bookingForm">
        <label for="date">Выберите дату:</label>
        <input type="date" id="date" required><br><br>

        <label for="time">Выберите время:</label>
        <select id="time" required disabled>
            <option value="" disabled selected>Выберите время</option>
        </select>

        <div id="timeSlots" style="display: none;"></div>

        <input type="submit" value="Записаться">
    </form>


    <Style>
        /* Стили для формы */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            width: 300px;
            margin: 0 auto;
        }

        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

    </Style>

    <script>
        // ... (ваш предыдущий код)

        const timeSlotsContainer = document.getElementById('timeSlots');

        dateInput.addEventListener('change', () => {
            updateTimes();
            timeSelect.disabled = false;
            timeSlotsContainer.style.display = 'block'; // Показываем контейнер для времени после выбора даты
        });

        function updateTimes() {
            const selectedDate = dateInput.value;

            timeSelect.innerHTML = '<option value="" disabled selected>Выберите время</option>';

            const bookedTimesForDate = bookedTimes.filter(time => time.startsWith(selectedDate));

            const options = getAvailableTimes(bookedTimesForDate);
            options.forEach(option => {
                const timeOption = document.createElement('option');
                timeOption.value = option;
                timeOption.textContent = option.slice(11, 16);

                if (bookedTimesForDate.includes(option)) {
                    timeOption.style.color = 'red';
                    timeOption.disabled = true;
                }

                timeSelect.appendChild(timeOption);
            });

            displayTimeSlots(options); // Отображаем время в отдельных ячейках
        }

        function displayTimeSlots(times) {
            timeSlotsContainer.innerHTML = ''; // Очищаем предыдущее время

            times.forEach(time => {
                const timeCell = document.createElement('div');
                timeCell.textContent = time.slice(11, 16);

                if (bookedTimes.includes(time)) {
                    timeCell.style.color = 'red';
                    timeCell.classList.add('booked');
                }

                timeSlotsContainer.appendChild(timeCell);
            });
        }

        // ... (остальной ваш код)

    </script>
{{--<form method="post" action="{{route("instructorModalStore",["instructorId"=>$instructor->id])}}">--}}

{{--    <p>Выберите дату: <input type="dateTime" name="calendar">--}}
{{--    <button type="submit">  --}}
{{--        Записаться на урок--}}
{{--    </button>--}}
{{--    </form>--}}

</div>
