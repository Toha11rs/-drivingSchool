<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">


<div class="col-lg-3 col-md-6 sidebar">
    <h3>Темы</h3>
    <ul class="list-group scrollable-list">
        @foreach($allTopics as $key => $topic)
            @php
                $lessonNumber = $key + 1;
                if ($lessonNumber <= $lastProgress) {
                    $class = 'list-group-item-success';
                    $icon = '<i class="fas fa-check"></i>';
                }  elseif ($lessonNumber == $lastProgress + 1) {
                    $class = 'list-group-item-primary';
                   $icon = '<i class="fas fa-lock-open"></i>';
                } else {
                    $class = 'list-group-item-secondary disabled';
                    $icon = '<i class="fas fa-lock"></i>';
                }
            @endphp
            <a href="{{ route("MyLesson", [$lessonNumber]) }}" class="list-group-item {{ $class }}">
                {!! $icon !!} Тема {{ $lessonNumber }}: {{ $topic["topic"] }}
            </a>
        @endforeach
    </ul>
</div>

<Style>
    body {
        font-family: 'Roboto', sans-serif;
    }


    .scrollable-list {
        max-height: calc(100vh - 100px); /* 100% высоты экрана минус высота заголовка и футера */
        overflow-y: auto; /* Добавление вертикального скролла, если элементы не помещаются */
    }
</Style>
//ХУЕВАЯ АДАПТАЦИЯ ПОД ТЕЛЕФОН
{{--@media (max-width: 767.98px) {--}}
{{--.scrollable-list {--}}
{{--max-height: 200px; --}}
{{--overflow-y: auto; --}}
{{--}--}}

{{--.list-group-item {--}}
{{--width: 100%; --}}
{{--margin-bottom: 5px; --}}
{{--}--}}
{{--}--}}
