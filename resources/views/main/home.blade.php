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
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('css/hamburgers.min.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('css/profile.css') }}" rel="stylesheet" media="all">
<link href="{{ asset('css/main.css') }}" rel="stylesheet" media="all">

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

@include("components.header.headerMain")
        

<div class="container">
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


@include("components.footer.footerMain")


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Политика конфиденциальности</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Политика в отношении обработки персональных данных
1. Общие положения
Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных, предпринимаемые Автошкола Drive (далее – Оператор).
1.1. Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.
1.2. Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта.

2. Основные понятия, используемые в Политике
2.1. Автоматизированная обработка персональных данных – обработка персональных данных с помощью средств вычислительной техники;
2.2. Блокирование персональных данных – временное прекращение обработки персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных);
2.3. Веб-сайт – совокупность графических и информационных материалов, а также программ для ЭВМ и баз данных, обеспечивающих их доступность в сети интернет по сетевому адресу;
2.4. Информационная система персональных данных — совокупность содержащихся в базах данных персональных данных, и обеспечивающих их обработку информационных технологий и технических средств;
2.5. Обезличивание персональных данных — действия, в результате которых невозможно определить без использования дополнительной информации принадлежность персональных данных конкретному Пользователю или иному субъекту персональных данных;
2.6. Обработка персональных данных – любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных;
2.7. Оператор – государственный орган, муниципальный орган, юридическое или физическое лицо, самостоятельно или совместно с другими лицами организующие и (или) осуществляющие обработку персональных данных, а также определяющие цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными;
2.8. Персональные данные – любая информация, относящаяся прямо или косвенно к определенному или определяемому Пользователю веб-сайта;
2.9. Пользователь – любой посетитель веб-сайта;
2.10. Предоставление персональных данных – действия, направленные на раскрытие персональных данных определенному лицу или определенному кругу лиц;
2.11. Распространение персональных данных – любые действия, направленные на раскрытие персональных данных неопределенному кругу лиц (передача персональных данных) или на ознакомление с персональными данными неограниченного круга лиц, в том числе обнародование персональных данных в средствах массовой информации, размещение в информационно-телекоммуникационных сетях или предоставление доступа к персональным данным каким-либо иным способом;
2.12. Трансграничная передача персональных данных – передача персональных данных на территорию иностранного государства органу власти иностранного государства, иностранному физическому или иностранному юридическому лицу;
2.13. Уничтожение персональных данных – любые действия, в результате которых персональные данные уничтожаются безвозвратно с невозможностью дальнейшего восстановления содержания персональных данных в информационной системе персональных данных и (или) уничтожаются материальные носители персональных данных.

3. Оператор может обрабатывать следующие персональные данные Пользователя
3.1. Фамилия, имя, отчество;
3.2. Номера телефонов;
3.3. Также на сайте происходит сбор и обработка обезличенных данных о посетителях (в т.ч. файлов «cookie») с помощью сервисов интернет-статистики (Яндекс Метрика и Гугл Аналитика и других).
3.4. Вышеперечисленные данные далее по тексту Политики объединены общим понятием Персональные данные.

4. Цели обработки персональных данных
4.1. Цель обработки персональных данных Пользователя — уточнение деталей заказа.
4.2. Также Оператор имеет право направлять Пользователю уведомления о новых продуктах и услугах, специальных предложениях и различных событиях. Пользователь всегда может отказаться от получения информационных сообщений, направив Оператору письмо на адрес электронной почты azdrive@yandex.ru с пометкой «Отказ от уведомлений о новых продуктах и услугах и специальных предложениях».
4.3. Обезличенные данные Пользователей, собираемые с помощью сервисов интернет-статистики, служат для сбора информации о действиях Пользователей на сайте, улучшения качества сайта и его содержания.

5. Правовые основания обработки персональных данных
5.1. Оператор обрабатывает персональные данные Пользователя только в случае их заполнения и/или отправки Пользователем самостоятельно через специальные формы, расположенные на сайте. Заполняя соответствующие формы и/или отправляя свои персональные данные Оператору, Пользователь выражает свое согласие с данной Политикой.
5.2. Оператор обрабатывает обезличенные данные о Пользователе в случае, если это разрешено в настройках браузера Пользователя (включено сохранение файлов «cookie» и использование технологии JavaScript).

6. Порядок сбора, хранения, передачи и других видов обработки персональных данных
Безопасность персональных данных, которые обрабатываются Оператором, обеспечивается путем реализации правовых, организационных и технических мер, необходимых для выполнения в полном объеме требований действующего законодательства в области защиты персональных данных.
6.1. Оператор обеспечивает сохранность персональных данных и принимает все возможные меры, исключающие доступ к персональным данным неуполномоченных лиц.
6.2. Персональные данные Пользователя никогда, ни при каких условиях не будут переданы третьим лицам, за исключением случаев, связанных с исполнением действующего законодательства.
6.3. В случае выявления неточностей в персональных данных, Пользователь может актуализировать их самостоятельно, путем направления Оператору уведомление на адрес электронной почты Оператора azdrive@yandex.ru с пометкой «Актуализация персональных данных».
6.4. Срок обработки персональных данных является неограниченным. Пользователь может в любой момент отозвать свое согласие на обработку персональных данных, направив Оператору уведомление посредством электронной почты на электронный адрес Оператора azdrive@yandex.ru с пометкой «Отзыв согласия на обработку персональных данных».

7. Трансграничная передача персональных данных
7.1. Оператор до начала осуществления трансграничной передачи персональных данных обязан убедиться в том, что иностранным государством, на территорию которого предполагается осуществлять передачу персональных данных, обеспечивается надежная защита прав субъектов персональных данных.
7.2. Трансграничная передача персональных данных на территории иностранных государств, не отвечающих вышеуказанным требованиям, может осуществляться только в случае наличия согласия в письменной форме субъекта персональных данных на трансграничную передачу его персональных данных и/или исполнения договора, стороной которого является субъект персональных данных.

8. Заключительные положения
8.1. Пользователь может получить любые разъяснения по интересующим вопросам, касающимся обработки его персональных данных, обратившись к Оператору с помощью электронной почты.
8.2. В данном документе будут отражены любые изменения политики обработки персональных данных Оператором. Политика действует бессрочно до замены ее новой версией.
8.3. Актуальная версия Политики в свободном доступе расположена в сети Интернет по адресу.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

</body>

<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>



<script src="{{ asset('css/animsition.min.js') }}"></script>

<!-- Main JS-->
<script src="{{ asset('js/main.js') }}"></script>


@endsection

