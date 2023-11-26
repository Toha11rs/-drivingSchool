@extends('layouts.app')
@section('title', 'Главная страница | Автошкола "Drive" ')
@section('content')


<head>
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="{{ asset('images/logo.png') }}"  width="200"  ><use xlink:href="#bootstrap"/></img>
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link1 px-2 headerssize link-secondary">Главная</a></li>
        <li><a href="#" class="nav-link1 px-2 headerssize">О нас</a></li>
        <li><a href="#" class="nav-link1 px-2 headerssize">Контакты</a></li>
        <li><a href="#" class="nav-link1 px-2 headerssize">Услуги и цены</a></li>
        <li><a href="#" class="nav-link1 px-2 headerssize">FAQ</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn1 btn-outline-primary1 me-2">Начать учиться</button>
        <button type="button" class="btn1 color">Войти</button>
      </div>
    </header>
  </div>

<body style="margin: 0; padding: 0;overflow-x: hidden;">

  <div>
    <section class="banner-section">
      <video muted loop="loop" class="banner-section__video" autoplay="autoplay">
        <source src="{{ asset('images/main/video1.mp4') }}" autoplay="autoplay" type="video/mp4">
      </video>
      <main class="banner-section__main">
  <h1 class="banner-section__title">
    <span>Получи права категории B <br> в Москве за 2 месяца</span>
  </h1>
  <p class="banner-section__subtitle">
    Обучим теории ПДД, научим водить автомобиль <br>
    сопроводим до получения прав
  </p>
    <div class="buttons">
<button class="button button--accent btn-fx-4 open-modal-js none"><span>Начать учиться</span></button>
<a href="/" class="button button--primary btn-fx-4"><span>Подробнее</span></a>
    </div>
  </div>
      </main>
    </section>
  </div>



<div class="container">
  <div class="section">
    <div class="wrap">
      <div class="contacts-info">
    <ul class="main-contacts table-list">
      <li class="address ie_css3" style="background: #46A5FF;">
        <div class="info">
        <div class="caption centerh1">Занимайся на сайте где угодно и когда удобно <br></div>
        <p class="sizepp" style="width:270px"><br>Доступ 24/7 к 800+ урокам теории останется у тебя даже после окончания обучения </p>
        </div>
      </li>

      <li class="ie_css3">
        <div class="info">
          <div class="caption centerh1 nizname">Учи теорию онлайн</div>
          <p class="sizepp">Видеоуроки на конкретных примерах простым языком <br> после каждого проходи тест и закрепляй знания</p>
          <a href="/" class="button button--primary btn-fx-4"><span>Подробнее</span></a>
        </div>
      </li>
      <li class="ie_css3" style="background: #46A5FF;">
        <div class="info">
          <div class="caption centerh1 nizname">Учись водить</div>
          <p class="sizepp">
            Выбирай инструктора на сайте, договаривайся о встрече в удобное время и улучшай навыки вождения
          </p>
          <a href="/" class="button button--primary btn-fx-4"><span>Подробнее</span></a>
        </div>
      </li>
    </ul>
  </div>
 </div>
</div>


<div class="centerh1">
  <h1>Выбери свой курс обучения</h1>
</div>


<div class="section">
  <div class="wrap">
   <div class="contacts-info">
     <ul class="main-contacts table-list">
      <li class="ie_css3">
        <div class="info">
          <div class="caption centerh1 nizname">Начальный</div>
          <p class="sizepp">Пройдешь полный курс теории и пробное занятие с инструктором</p>
          <p>-Бессрочный доступ к урокам теории</p>
          <p>-Теория онлайн или очно</p>
          <p>-14 занятий по вождению и 1 занятия по маршруту ГИБДД</p>
          <p>-Документы для ГИБДД</p>
          <div class="caption centerh1"><span class="nizname">Цена</span><a href="/" class="button button--primary btn-fx-4"><span>Выбрать курс</span></a></div>
        </div>
      </li>
 
       <li class="ie_css3" style="background: #46A5FF;">
          <div class="info">
            <div class="caption centerh1 nizname">Стандарт</div>
              <p class="sizepp">Научишься водить и отработаешь частые маршруты</p>
              <p>-Бессрочный доступ к урокам теории</p>
              <p>-Теория онлайн или очно</p>
              <p>-20 занятий по вождению и 4 занятия по маршруту ГИБДД</p>
              <p>-Документы для ГИБДД</p>
              <div class="caption centerh1 nizname"><span class="nizname">Цена</span><a href="/" class="button button--primary btn-fx-4"><span>Выбрать курс</span></a></div>
            </div>
       </li>

      <li class="ie_css3">
        <div class="info">
          <div class="caption centerh1 nizname">Премиум</div>
          <p class="sizepp">Сдашь экзамены и получишь права категории В</p>
          <p>-Бессрочный доступ к урокам теории</p>
          <p>-Теория онлайн или очно</p>
          <p>-28 занятий по вождению и 8 занятия по маршруту ГИБДД</p>
          <p>-Документы для ГИБДД</p>
          <div class="caption centerh1"><span class="nizname">Цена</span> <a href="/" class="button button--primary btn-fx-4"><span>Выбрать курс</span></a></div>
        </div>
      </li>
     </ul>
   </div>
  </div>
</div>

<div class="frame1">
  <div class="text-wrapper">Наши инструктора</div>
    <div class="instructor">
      <div class="ellipse"></div>
      <div class="rating">
        <img class="star" src="{{ asset('images/main/star.png') }}"/>
        <div class="rating-value">5.0</div>
      </div>
      <p class="instructor-info">
        <span class="name">Имя Фамилия</span><br />
        <span class="details">Стаж<br />Автомобиль</span>
      </p>
    </div>
    <div class="instructor">
      <div class="ellipse"></div>
      <div class="rating">
        <img class="star" src="{{ asset('images/main/star.png') }}" />
        <div class="rating-value">5.0</div>
      </div>
      <p class="instructor-info">
        <span class="name">Имя Фамилия</span><br />
        <span class="details">Стаж<br />Автомобиль</span>
      </p>
    </div>
    <div class="instructor">
      <div class="ellipse"></div>
      <div class="rating">
        <img class="star" src="{{ asset('images/main/star.png') }}" />
        <div class="rating-value">5.0</div>
       
      </div>
      <p class="instructor-info">
        <span class="name">Имя Фамилия</span><br />
        <span class="details">Стаж<br />Автомобиль</span>
      </p>
    </div>
    <div class="instructor">
      <div class="ellipse"></div>
      <div class="rating">
        <img class="star" src="{{ asset('images/main/star.png') }}" />
        <div class="rating-value">5.0</div>
      </div>
      <p class="instructor-info">
        <span class="name">Имя Фамилия</span><br />
        <span class="details">Стаж<br />Автомобиль</span>
      </p>
    </div>
  </div>



  <div class="faq-header">FAQ</div>

<div class="faq-content">
  <div class="faq-question">
    <input id="q1" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q1" class="panel-title">Писку даш ебат</label>
    <div class="panel-content">Нет</div>
  </div>
  
  <div class="faq-question">
    <input id="q2" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q2" class="panel-title">Писку даш ебат</label>
    <div class="panel-content">Ладно дам</div>
  </div>
  
  <div class="faq-question">
    <input id="q3" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q3" class="panel-title">Писку даш ебат</label>
    <div class="panel-content">Иди нахуй</div>
  </div>
</div>

</div>
</body>

<footer>

</footer>


@endsection
