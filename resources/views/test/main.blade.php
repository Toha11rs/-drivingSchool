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
        
        @include("components.header.headerProfile")

      
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
        
            @include("components.footer.footerMain")

   

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
