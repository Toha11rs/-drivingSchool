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
                        <a style="text-decoration: none;" href="#">
                            <span class="bot-line"></span>
                            Главная
                        </a>
                    </li>
                    <li>
                        <a style="text-decoration: none;" href="#">
  
                            <span class="bot-line"></span>О нас</a>
                    </li>
                    <li>
                        <a style="text-decoration: none;" href="table.html">
  
                            <span class="bot-line"></span>Контакты</a>
                    </li>
                    <li class="has-sub">
                        <a style="text-decoration: none;" href="#">
                            <span class="bot-line"></span>Услуги и цены</a>
                    </li>
                    <li class="has-sub">
                      <a style="text-decoration: none;" href="#">
                          <span class="bot-line"></span>FAQ</a>
                  </li>
  
                </ul>
            </div>
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="content">
                            @if($user)
                            <a style="text-decoration: none;" class="js-acc-btn" href="#">{{$user->name}} </a>
                            @else
                                <a style="text-decoration: none;" class="js-acc-btn" href="#">Войти </a>
                            @endif
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
  
                                <div class="content">
                                    <h5 class="name">
                                        @if($user)
                                        <a style="text-decoration: none;" href="#">{{$user->name}}</a>
                                        @else
                                            <a href="#">Войти</a>
                                    </h5>
                                    @endif
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                              <div class="account-dropdown__item">
                                <a style="text-decoration: none;" href="#">
                                    <i class="zmdi zmdi-account"></i>Обучение</a>
                            </div>
                                <div class="account-dropdown__item">
                                    <a style="text-decoration: none;" href="#">
                                        <i class="zmdi zmdi-account"></i>Аккаунт</a>
                                </div>
  
                                <div class="account-dropdown__item">
                                    <a style="text-decoration: none;" href="#">
                                        <i class="zmdi zmdi-money-box"></i>Настройки</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a style="text-decoration: none;" href="#">
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
                            <a style="text-decoration: none;" class="js-acc-btn" href="#">Имя Фамилия</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
  
                                <div class="content">
                                    <h5 class="name">
                                        <a style="text-decoration: none;" href="#">Имя Фамилия</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                              <div class="account-dropdown__item">
                                <a style="text-decoration: none;" href="#">
                                    <i class="zmdi zmdi-account"></i>Обучение</a>
                            </div>
                                <div class="account-dropdown__item">
                                    <a style="text-decoration: none;" href="#">
                                        <i class="zmdi zmdi-account"></i>Аккаунт</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a style="text-decoration: none;" href="#">
                                        <i class="zmdi zmdi-settings"></i>Настройки</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a style="text-decoration: none;" href="#">
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
                    <a style="text-decoration: none;" class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Главная</a>
                </li>
                <li>
                    <a style="text-decoration: none;" href="chart.html">
                        <i class="fas fa-chart-bar"></i>О нас</a>
                </li>
                <li>
                    <a style="text-decoration: none;" href="table.html">
                        <i class="fas fa-table"></i>Контакты</a>
                </li>
                <li>
                    <a style="text-decoration: none;" href="form.html">
                        <i class="far fa-check-square"></i>Услуги и цены</a>
                </li>
                <li>
                  <a style="text-decoration: none;" href="form.html">
                      <i class="far fa-check-square"></i>FAQ</a>
              </li>
            </ul>
        </div>
    </nav>
  </header>