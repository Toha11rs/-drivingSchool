<div class="col-lg-3 sidebar">
    <h3>Темы</h3>
    <ul class="list-group scrollable-list">
        @foreach($allTopics as  $key => $topic)

            <a href="{{route("theory",[$key+1])}}" class="list-group-item">Тема {{$key+1}}: {{$topic["topic"]}}</a>

        @endforeach

    </ul>

</div>
