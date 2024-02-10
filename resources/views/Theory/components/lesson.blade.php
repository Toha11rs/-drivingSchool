<div class="col-lg-9 main-content">
    <h1>Добро пожаловать в автошколу "ЕБАНАТ SCHOOL"</h1>
    <p>Здесь вы найдете уроки по вождению автомобиля.</p>
    <div id="lesson1">
        <h2>Тема {{$topicId}}: {{$theme}}</h2>
    </div>

    <div class="col-md-9 myheader">

        изменения c <a href="/pdd/change-1-sept-2023">1 сентября 2023</a>

        @include("Theory.pagesWithTheory." . $topicId)
    </div>


    <Style>
        img {
            width: 30px;
            height: 40px;
        }
    </Style>
</div>
</div>
