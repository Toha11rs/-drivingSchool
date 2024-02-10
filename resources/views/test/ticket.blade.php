<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('css/hamburgers.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('css/profile.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet" media="all">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

@extends('layouts.app')
@section('title', 'Тестовый билет')
@section('content')
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
       
        @include("components.header.headerProfile")
        

      
        <div class="page-content--bgf7">
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <meta name="csrf-token" content="{{ csrf_token() }}">

                        <div class="container">
                    <div id="question-container"></div>
                    
                    
                    <table id="result-table" style="display:none;">
                        <thead>
                        <tr>
                            <th>Номер вопроса</th>
                            <th>Ваш ответ</th>
                            <th>Правильный ответ</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
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

<meta name="csrf-token" content="{{ csrf_token() }}">
@include("BladeJs.TicketJS")

<form id="myForm" action="{{route("ticketStore")}}" method="post">
    @csrf
    <input type="hidden" name="correctAnswers" >
    <input type="hidden" name="incorrectAnswers" >
</form>
@endsection
