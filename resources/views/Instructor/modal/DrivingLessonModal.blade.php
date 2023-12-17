<div id="firstThreeDates">
@foreach($lessons->take(3) as $lesson)
    <a href="{{route("DrivingLessonModal",["LessonId"=>$lesson->id])}}"  class="lesson-modal-open">{{$lesson->start_time}}</a><br>
@endforeach

<button id="showAllDates">Посмотреть все</button>
</div>

<div id="allDates" style="display: none;">
    @foreach($lessons as $lesson)
        <a href="{{route("DrivingLessonModal",["LessonId"=>$lesson->id])}}"  class="lesson-modal-open">{{$lesson->start_time}}</a><br>
    @endforeach

        <button id="hideAllDates">Скрыть</button>
</div>


<div class="modal" id="DrivingLessonModal">
</div>

<script>
    $(document).ready(function() {
        $('.lesson-modal-open').click(function(e) {
            e.preventDefault();

            var instructorPageUrl = $(this).attr('href');

            // Загрузка содержимого страницы инструктора в модальное окно
            $('#DrivingLessonModal').load(instructorPageUrl, function() {
                // По завершении загрузки отображаем модальное окно
                $('#DrivingLessonModal').show();
            });
        });

        // Закрытие модального окна при клике на него или за его пределами
        $(document).on('click', function(e) {
            if ($(e.target).closest('#DrivingLessonModal').length === 0) {
                $('#DrivingLessonModal').hide();
            }
        });
        $('#showAllDates').on('click', function() {
            $('#allDates').show(); // Показать все даты при клике на кнопку
        });


        $('#showAllDates').on('click', function() {
            $('#firstThreeDates').hide(); // Скрыть первые три записи
            $('#allDates').show(); // Показать все записи
        });

        $('#hideAllDates').on('click', function() {
            $('#allDates').hide(); // Скрыть все записи
            $('#firstThreeDates').show(); // Показать первые три записи
        });
    });



</script>
<Style>


    .modal {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 20px;
        max-width: 80%; /* Максимальная ширина модального окна */
        max-height: 80%; /* Максимальная высота модального окна */
        overflow-y: auto; /* Позволяет прокручивать, если контент превышает размеры окна */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Тень */
        z-index: 9999; /* Устанавливаем поверх других элементов */
    }

    /* Стили для фона (затемнения) вокруг модального окна */
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Полупрозрачный черный цвет */
        z-index: 9998; /* Устанавливаем под модальное окно, но поверх остальных элементов */
    }

    /* Опциональные стили для кнопки закрытия модального окна */
    .close-modal {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Полупрозрачный черный цвет */
        z-index: 9998; /* Устанавливаем под модальное окно, но поверх остальных элементов */
    }
</Style>
