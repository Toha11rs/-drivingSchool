<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль ученика</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-block {
            margin-bottom: 20px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="container mt-4 ">
    <h1 class="mb-4">Профиль ученика</h1>
    <div class="row">

        <div class="col-md-4">
            <div class="profile-block">
                <h3>Запись на урок вождения</h3>

            @foreach($instructors as $instructor)
                <!-- Добавьте класс 'instructor-modal-open' к ссылке -->
                    <a href="{{ route("instructorModal", ["instructorId" => $instructor->id]) }}" class="instructor-modal-open">{{$instructor->name}}</a>
                    <br>
            @endforeach

        @include("Instructor.modal.mainModal")

            </div>
        </div>
        <div class="col-md-4">
            <div class="profile-block">
                <h3>Ближайший урок вождения</h3>
                <p>Информация о следующем уроке вождения: дата, время, место проведения и прочее.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="profile-block">
                <h3>Оцените предыдущий урок вождения</h3>
                <p>Здесь может быть форма для оценки или ссылка на оставление отзыва о последнем уроке вождения.</p>
            </div>
        </div>
    </div>
</div>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
