<!DOCTYPE html>
<html>
<head>
    <title>Тест ПДД</title>
</head>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
   
   

   

    <!-- Bootstrap CSS-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/hamburgers.min.css') }}" rel="stylesheet" media="all">



    <!-- Main CSS-->
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" media="all">
    

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="{{ asset('images/logo.png') }}" width="150" alt="Автошкола Drive" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="#">
                                    <span class="bot-line"></span>
                                    Главная
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    
                                    <span class="bot-line"></span>Вождение</a>
                            </li>
                            <li>
                                <a href="table.html">
                                    
                                    <span class="bot-line"></span>Теоретический курс</a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <span class="bot-line"></span>ПДД РФ</a>   
                            </li>
                          
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="content">
                                    <a class="js-acc-btn" href="#">Имя Фамилия </a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">Имя Фамилия</a>
                                            </h5>
                                           
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Аккаунт</a>
                                        </div>
                                        
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Настройки</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Выйти</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{ asset('images/logo.png') }}" width="150" alt="Автошкола Drive" />
                        </a>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                
                                <div class="content">
                                    <a class="js-acc-btn" href="#">Имя Фамилия</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">Имя Фамилия</a>
                                            </h5> 
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Аккаунт</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Настройки</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="#">
                                            <i class="zmdi zmdi-power"></i>Выйти</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Главная</a>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Вождение</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Теоретический курс</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>ПДД РФ</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
       
        

      
        <div class="page-content--bgf7">
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Теоретический курс</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="statistic-chart-1">
                                <h3 class="title-3 m-b-30">Билеты ПДД</h3>
                                <div class="chart-wrap" style="height: 350px">
                                    @for ($i = 1; $i < 41; $i++)
                                    <a class="square" style="background-color: {{ $color_exam[$i] }}" href="{{ route("ticket", ["ticketId" => $i]) }}"> {{ $i }}</a>
                            @endfor
                                    
                                </div>
                                
                            </div>
                           
                        </div>
                        <div class="col-md-6 col-lg-4">
                           
                            <div class="top-campaign">
                                <h3 class="title-3 m-b-30">Темы</h3>
                                <div class="table-responsive">
                                    <p id="openModalBtn">Выбрать тему</p>
                                    @include("test.modal.topicModal")
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-lg-4">
                            
                            <div class="chart-percent-2">
                                <h3 class="title-3 m-b-30">Экзамен</h3>
                                <a href="{{ route("exam") }}"><p>Экзамен</p></a>
                            </div>
                            
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
              <li><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Политика конфиденциальности</a></li>
              
            </ul>
        </div>
        <div class="col-lg-4 col-xs-12 location">
          <h4 class="mt-lg-0 mt-sm-4">Контакты</h4>
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A30d23e13a0f35bf62fcf7b06340f70adef22d7017c5f3016cbd8c1483fa01a26&amp;source=constructor" width="100%" style="border-radius: 8px;" height="200" frameborder="0"></iframe>
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
           
       

   

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
   
 
   
    <script src="{{ asset('css/animsition.min.js') }}"></script>
    
    <!-- Main JS-->
    <script src="{{ asset('js/main.js') }}"></script>

   
</body>


</html>
<style>
    .square {
    background: #ffffff;
    border-radius: 2px;
    color: var(--link,#1b75cc);
    float: left;
    font-size: 16px;
    height: 40px;
    line-height: 40px;
    margin-bottom: 10px;
    margin-left: 10px;
    text-align: center;
    text-decoration: none;
    width: 40px;
    color: #fff;
    }
</style>
