<h3>Запись на урок вождения</h3>
@foreach($instructors as $instructor)
    <a href="{{ route("instructorModal", ["instructorId" => $instructor->id]) }}" class="instructor-modal-open">{{$instructor->name}}</a>
    <br>
@endforeach

<div class="modal" id="instructorModal">
</div>
<Style>

    /* Стили для модального окна */
    .modal {
        display: none; /* По умолчанию скрыто */
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
<script>
    $(document).ready(function() {
        $('.instructor-modal-open').click(function(e) {
            e.preventDefault();

            var instructorPageUrl = $(this).attr('href');

            // Загрузка содержимого страницы инструктора в модальное окно
            $('#instructorModal').load(instructorPageUrl, function() {
                // По завершении загрузки отображаем модальное окно
                $('#instructorModal').show();
            });
        });

        // Закрытие модального окна при клике на него или за его пределами
        $(document).on('click', function(e) {
            if ($(e.target).closest('#instructorModal').length === 0) {
                $('#instructorModal').hide();
            }
        });
    });

</script>
