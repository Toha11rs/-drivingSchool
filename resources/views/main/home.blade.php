@extends('layouts.app')
@section('title', 'Главная страница | Автошкола "Drive" ')
@section('content')


<head>
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<script>
  document.addEventListener('DOMContentLoaded', function () {
  var mySwiper = new Swiper('.swiper-container', {
    
  });
});
</script>

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

  
<div class="section-services">
  <a href="#" class="services-item col-md-4 col-sm-6">
    <h3 class="service-item__title">Занимайся на сайте где угодно и когда удобно</h3>
    <p class="sizepp service-item__title" >Доступ 24/7 к 800+ урокам теории останется у тебя даже после окончания обучения </p>
    
  </a>

  <a href="#" class="services-item col-md-4 col-sm-6 brick">
    <h3 class="service-item__title">Учи теорию онлайн</h3>
    <p class="sizepp service-item__title">Видеоуроки на конкретных примерах простым языком после каждого проходи тест и закрепляй знания</p>
  </a>

  <a href="#" class="services-item col-md-4 brown">
    <h3 class="service-item__title">Учись водить</h3>
    <p class="sizepp service-item__title">Выбирай инструктора на сайте, договаривайся о встрече в удобное время и улучшай навыки вождения</p>
    
  </a>
</div>


<div class="container">

<div class="centerh1">
  <h1>Выбери свой курс обучения</h1>
</div>


<ul class="category_list row">
  <li>
    <a href="#">
      <picture>
        <source srcset="\images\main\akpp.jpg" type="image/jpg">
        <img alt="Категория В АКПП" src="\images\main\akpp.jpg" title="Категория В АКПП">  
      </picture>
      <span class="category_name">
        Категория<span>«В»</span><b>АКПП</b>31 500₽</span>
      </span>
      <span class="category_price">Выбрать курс</span>
      </a>
  </li>

  <li>
    <a href="#">
      <picture>
        <source srcset="\images\main\mkpp.jpg" type="image/jpg">
        <img alt="Категория В МКПП" src="\images\main\mkpp.jpg" title="Категория В МКПП">  
      </picture>
      <span class="category_name">
        Категория<span>«В»</span><b>МКПП</b>28 500₽</span>
      </span>
      <span class="category_price">Выбрать курс</span>
      </a>
  </li>
  <li>
    <a href="#">
      <picture>
        <source srcset="\images\main\vip.jpg" type="image/jpg">
        <img alt="Категория В VIP" src="\images\main\vip.jpg" title="Категория В VIP">  
      </picture>
      <span class="category_name">
        Категория<span>«В»</span><b>VIP</b>35 000₽</span>
      </span>
      <span class="category_price">Выбрать курс</span>
      </a>
  </li>
</ul>
<div class="text-wrapper">Наши инструктора</div>

<section>
  <div class="wrapper_HC8y0">
    <section>
      <div class="wrapper_M5SC9">
        <main>
          <div class="UiSlider slider_RO2VQ">
            <div class="UiSlider__wrap">
              <div class="UiSlider__outer">
                <div class="swiper-container UiSlider__container">
                  <div class="swiper-wrapper UiSlider__wrapper">
                    <div class="swiper-slide UiSlider__slide">
                      <div class="slide_9NpQX">
                        <div class="info_eE2Rw">
                          <h3 class="infoTitle_Ycbzd">Mercedes Benz C63</h3> 
                          <figure class="image_-ugiw"><img src="/images/main/mercedes.png" alt="Mercedes Benz c63" loading="lazy"></figure>
                        </div> <div class="card_7kl-X">
                          <div class="wrapper_nOhzl">
                            <header class="header_+GsNI">
                              <div class="info_-gWS4">
                                <figure><img src="" alt="Инструктор фио" loading="lazy" class="photo_hGeAq"></figure> 
                                <p class="name_NKKBG">Фамилия <br>Имя Отчество</p> 
                                <div class="rating_DiS2h"><p class="ratingText_5JRGZ">5<span class="ratingIcon_O-FFf">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon sprite-icons icon_+n+sB">
                                  <use href="/_nuxt/b499e513c4962324ba10af08374b6f65.svg#i-iconstar" xlink:href="/_nuxt/b499e513c4962324ba10af08374b6f65.svg#i-iconstar"></use>
                                </svg>
                              </span>
                            </p>
                          </div>
                        </div> 
                        <p class="text_+WdKB">Инструктор на категорию
                        <span class="textBlack_dNSRC">«М, В, В1, С».</span>
                        </p>
                    </header> 
                    <main>
                      <div class="row_ouEjh">
                        <p class="rowText_D0F0s">Стаж работы</p> 
                        <p class="bold_peTAu">38 года</p>
                      </div> 
                      <div class="row_ouEjh">
                      <p class="rowText_D0F0s">Коробка передач</p> 
                      <p class="bold_peTAu">Механика</p>
                    </div> 
                      <div class="row_ouEjh">
                        <p class="rowText_D0F0s">Учебный автомобиль</p> 
                        <p class="bold_peTAu">Mercedes Benz C63</p>
                      </div>
                    </main> 
                    <footer>
                      <a href="#" class="v-btn v-btn--outlined v-btn--router v-btn--tile theme--light v-size--x-large info--text button_56UAW">
                        <span class="v-btn__content">Записаться на вождение</span>
                      </a>
                    </footer>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide UiSlider__slide">
              <div class="slide_9NpQX"><div class="info_eE2Rw">
              <h3 class="infoTitle_Ycbzd">Renault Sandero</h3> 
              <figure class="image_-ugiw"><img src="/images/main/sandero.png" alt="Renault Sandero" loading="lazy"></figure>
            </div> 
            <div class="card_7kl-X">
              <div class="wrapper_nOhzl">
                <header class="header_+GsNI">
                  <div class="info_-gWS4">
                    <figure><img src="" alt="Инструктор фио" loading="lazy" class="photo_hGeAq"></figure> 
                    <p class="name_NKKBG">Фамилия <br> Имя Отчество</p> 
                    <div class="rating_DiS2h"><p class="ratingText_5JRGZ">5<span class="ratingIcon_O-FFf">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon sprite-icons icon_+n+sB">
                        <use href="/images/main/stars.svg" xlink:href="/images/main/stars.svg"></use>
                      </svg>
                    </span>
                  </p>
                </div></div> 
                    <p class="text_+WdKB">Инструктор на категорию
                    <span class="textBlack_dNSRC"> «А, М, В, В1, С, D».</span>
                  </p>
                </header> 
                <main>
                  <div class="row_ouEjh">
                    <p class="rowText_D0F0s">Стаж работы</p> <p class="bold_peTAu"> 24 лет</p>
                  </div> 
                    <div class="row_ouEjh">
                      <p class="rowText_D0F0s">Коробка передач </p> 
                      <p class="bold_peTAu">Автомат</p>
                    </div> 
                    <div class="row_ouEjh">
                    <p class="rowText_D0F0s">Учебный автомобиль</p>
                     <p class="bold_peTAu"> Renault Sandero</p>
                    </div>
                  </main> 
                  <footer><a href="#" class="v-btn v-btn--outlined v-btn--router v-btn--tile theme--light v-size--x-large info--text button_56UAW">
                    <span class="v-btn__content">Записаться на вождение</span>
                  </a>
                </footer>
              </div>
            </div>
          </div>
        </div>
<div class="swiper-slide UiSlider__slide"><div class="slide_9NpQX"><div class="info_eE2Rw">
  <h3 class="infoTitle_Ycbzd">LADA granta</h3> 
  <figure class="image_-ugiw"><img src="/images/main/granta.png" alt="LADA granta" loading="lazy"></figure>
</div> 
<div class="card_7kl-X">
  <div class="wrapper_nOhzl">
    <header class="header_+GsNI">
      <div class="info_-gWS4">
        <figure><img src="" alt="Инструктор фио" loading="lazy" class="photo_hGeAq"></figure> 
        <p class="name_NKKBG">  Фамилия <br>Имя Отчество</p>
        <div class="rating_DiS2h"><p class="ratingText_5JRGZ">5
          <span class="ratingIcon_O-FFf">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon sprite-icons icon_+n+sB">
            <use href="/_nuxt/b499e513c4962324ba10af08374b6f65.svg#i-iconstar" xlink:href="/_nuxt/b499e513c4962324ba10af08374b6f65.svg#i-iconstar"></use>
          </svg>
        </span>
      </p>
    </div>
  </div> 
        <p class="text_+WdKB"> Инструктор на категорию
          <span class="textBlack_dNSRC"> «М, В, В1».</span>
        </p>
      </header> 
      <main>
        <div class="row_ouEjh">
          <p class="rowText_D0F0s"> Стаж работы</p> 
          <p class="bold_peTAu">4 года</p>
        </div> 
        <div class="row_ouEjh"><p class="rowText_D0F0s">Коробка передач</p> 
          <p class="bold_peTAu"> Механика </p>
        </div> 
        <div class="row_ouEjh">
          <p class="rowText_D0F0s"> Учебный автомобиль</p>
          <p class="bold_peTAu">LADA granta</p>
        </div>
      </main>
       <footer>
        <a href="#" class="v-btn v-btn--outlined v-btn--router v-btn--tile theme--light v-size--x-large info--text button_56UAW">
          <span class="v-btn__content">Записаться на вождение</span>
        </a>
      </footer>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main> 
</div>
</section>
  



<section>
  <div class="faq-header">FAQ</div>

<div class="faq-content">
  <div class="faq-question">
    <input id="q1" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q1" class="panel-title"> Какие документы нужны для записи в автошколу? </label>
    <div class="panel-content">- Паспорт гражданина России <br> - Военный билет или приписное свидетельство (для военнообязанных)</div>
  </div>
  
  <div class="faq-question">
    <input id="q2" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q2" class="panel-title">Как происходит оплата?</label>
    <div class="panel-content">Оплата проводится различными способами при заключении договора — наличным и безналичным расчетом. <br> Подробнее — nen
     <br> Возможна оплата обучения частями: первый взнос в размере 25% от общей стоимости обучения в течении первой недели занятий, остальную оплату любыми частями до конца курса обучения.</div>
  </div>
  
  <div class="faq-question">
    <input id="q3" type="checkbox" class="panel">
    <div class="plus">+</div>
    <label for="q3" class="panel-title">Как организовано обучение?</label>
    <div class="panel-content">Программа создана на основе действующих нормативных требований. <br> В неё входят: <br>

      - Теория. Она включает изучение правил дорожного движения, основ устройства и обслуживания ТС, навыки оказания первой медицинской помощи. У водителей грузовых автомобилей в курс включены и другие предметы для подготовки специалистов по грузоперевозкам.
      <br>- Практика на автодроме. На закрытой площадке отрабатываются базовые умения.
      <br>- Практика в реальных условиях города. Занятиям на городских магистралях уделяется особое внимание, так как выпускникам в ближайшие месяцы придётся уже совершенно самостоятельно по ним передвигаться.
      <br>Теоретические и практические занятия проходят параллельно. Такая организация учебного процесса способствует успешному овладению всеми необходимыми знаниями и умениями.</div>
  </div>
</div>

</div>
</section>



<footer>
  <div class="mt-5 pt-5 pb-5 footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-xs-12 about-company">
          <h2>Автошкола "Drive"</h2>
          <p class="pr-5 text-white-50">
            Профессиональное образовательное учреждение "Автошкола Drive" — ваш путь к навыкам вождения и безопасности на дороге! <br> С момента своего основания в 2023 году мы посвящаем себя формированию ответственных и уверенных водителей.
          <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
        </div>
        <div class="col-lg-3 col-xs-12 links">
          <h4 class="mt-lg-0 mt-sm-3">Меню</h4>
            <ul class="m-0 p-0">
              <li><a href="#">Главная страница</a></li>
              <li><a href="#">Курсы обучения</a></li>
              <li><a href="#">Наши инструктора</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Политика конфиденциальности</a></li>
              
            </ul>
        </div>
        <div class="col-lg-4 col-xs-12 location">
          <h4 class="mt-lg-0 mt-sm-4">Контакты</h4>
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A30d23e13a0f35bf62fcf7b06340f70adef22d7017c5f3016cbd8c1483fa01a26&amp;source=constructor" width="450" style="border-radius: 8px;" height="200" frameborder="0"></iframe>
          <p class="mb-0"><i class="fa fa-phone mr-3"></i>(999) 999-9090</p>
          <p><i class="fa fa-envelope-o mr-3"></i>info@schooldrive.ru</p>
        </div>
      </div>
      <div class="row">
        <div class="col copyright">
          <p><small class="text-white-50"> Отправляя любую форму на сайте, вы соглашаетесь с Политикой конфиденциальности. <br>Лицензия № 000 серия 00000 №0000000 от 11 октября 2023 г. <br> © 2024. Все права защищены. </small></p>
        </div>
      </div>
    </div>
    </div>
</footer>

</body>


@endsection

