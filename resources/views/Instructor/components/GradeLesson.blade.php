<h3>Оцените уроки</h3>

@if(isset($lessonsGrade[0]))
    @foreach($lessonsGrade as $less)
        <p>{{$less->instructor->name}}</p>
        <p>Дата проведения занятия: {{$less->start_time}}</p>
        <div class="rating" data-id="{{$less->id}}">
            <span class="star" data-rating="5">&#9733;</span>
            <span class="star" data-rating="4">&#9733;</span>
            <span class="star" data-rating="3">&#9733;</span>
            <span class="star" data-rating="2">&#9733;</span>
            <span class="star" data-rating="1">&#9733;</span>
        </div>

        <form id="grade-form" class="grade-form" method="post" action="{{ route("GradeLessonStore") }}">
            @csrf
            <input type="hidden" name="rating" value="">
            <input type="hidden" name="LessonId" value="{{$less->id}}">
        </form>
        <br>
        <hr>
    @endforeach

@else
    <p>У вас нет уроков, которые надо оценить</p>
@endif


<script>

    $(document).ready(function() {
        $('.rating').each(function() {
            var formId = $(this).next('.grade-form').attr('id');

            $(this).find('.star').on('mouseenter', function() {
                var currentRating = $(this).data('rating');
                $(this).nextAll().addBack().css('color', '#ffcc00');
                $(this).prevAll().css('color', 'transparent');
            });

            $(this).on('mouseleave', function() {
                var selectedRating = $(this).find('.star[selected="selected"]').data('rating');
                $(this).find('.star').css('color', 'transparent');
                $(this).find('.star').each(function() {
                    if ($(this).data('rating') <= selectedRating) {
                        $(this).css('color', '#ffcc00');
                    }
                });
            });

            $(this).find('.star').on('click', function() {
                var rating = $(this).data('rating');
                var lessonId = $(this).closest('.rating').data('id');
                console.log('Выбранная оценка: ' + rating + ' для урока с ID: ' + lessonId);

                var $ratingInput = $('#grade-form input[name="rating"]');
                $ratingInput.val(rating);

                $(this).attr('selected', 'selected');
                $(this).nextAll().addBack().css('color', '#ffcc00');
                $(this).prevAll().css('color', 'transparent');


                $('#' + formId).submit();
                return false;
            });
        });
    });

</script>
<Style>

    .rating {
        unicode-bidi: bidi-override;
        direction: rtl;
        text-align: center;
    }

    .rating .star {
        display: inline-block;
        font-size: 30px;
        color: transparent;
        cursor: pointer;
        transition: color 0.2s ease-in-out;
        -webkit-text-stroke: 1px black;
    }

    .rating .star:hover,
    .rating .star[selected="selected"] {
        color: #ffcc00;
    }


</Style>
