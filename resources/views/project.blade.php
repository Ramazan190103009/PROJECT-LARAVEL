<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    <title>App-publisher</title>
</head>
<body>
<style>
    body {
        background-color: #f1f1f1;
    }
  .navbar-brand {
      margin-left: 70px;
      color: #000;
      font-weight: bold;
      font-size: 30px;
  }
  .navbar-brand:hover {
      color: #000;
  }
  .navlink {
      position: relative;
    left: 5rem;
    margin-right: 15px;
     color: #fff;
     font-size: 20px;
     font-family: serif;
  }
  .navlink:hover {
      color: blue;
      font-weight: bold;
  }
   #btn-form1{
       position: relative;
       margin-left:7rem;   
   }
   #lang {
       position: relative;
       margin-left: 7rem;
   }
   .heading1{
       margin-top: 120px;
   }
   .svg1 {
       position: absolute;
       left: 0px;
       top: 0px;
   }
   .des1 {
       color: #000;
       font-size: 20px;
   }
   .btn-cost {
       width: 250px;
       border-radius: 50px;
       color: #fff;
       font-size: 20px;
       box-shadow: 5px 10px #000;
   }
   .img-phone{
       position: absolute;
       left: 44%;
       top: 50px;
       width: 50%;
   }
   .img-vectary {
       position: absolute;
       left: 58%;
       top: 150px;
       width: 40%;
   }
   .vector {
       position: absolute;
       left: 0px;
       top: -120px;
       width: 100%;
   }
</style>
    <nav class="navbar navbar-expand bg-dark fixed-top">
      <a href="{{route('project')}}" class="navbar-brand">App-<span style="color: blue;">publisher</span></a>
      <ul class="navbar-nav">
       <li class="nav-item"><a href="{{route('service')}}" target="_blank" class="nav-link navlink">Услуги</a></li>
       <li class="nav-item"><a href="{{route('projects_company')}}" class="nav-link navlink">Проекты</a></li>
       <li class="nav-item"><a href="{{route('company')}}" class="nav-link navlink">Компания</a></li>
       <li class="nav-item"><a href="{{route('contact')}}" class="nav-link navlink">Контакты</a></li>
      </ul>
      <a href="" class="btn btn-primary" id="btn-form1">Оставить заявку</a>
      <div class="nav-item dropdown">
  <a class="btn btn-success dropdown-toggle" id="lang" type="button" data-toggle="dropdown">Choose lang
  </a>
  <ul class="dropdown-menu" id="list">
    <li><a class="dropdown-item" href="lang/en">EN</a></li>
    <li><a class="dropdown-item" href="lang/ru">RU</a></li>
    <li><a class="dropdown-item" href="lang/kz">KZ</a></li>
  </ul>
</div>
    </nav>    
<div class="container">
     <svg class="svg1" height="220" width="100">
        <ellipse cx="-10" cy="150" rx="50" ry="40" style="fill:#5360FE;"/>
      </svg>
    <h4 class="display-3 heading1">Продвигаем и издаём <br> игры и приложения</h4>
    <p class="des1">Тщательно анализируем результаты, грамотно поддерживаем <br>в развитии и монетизизации вашего продукта</p>
    <button class="btn btn-cost" style="background-color: #5360FE;">Узнать стоимость</button><a href="">

        <div class="img">
            <svg width="1920" height="936" class="vector" viewBox="0 0 1920 936" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2277.66 3.21116C2271.89 -2.02675 2243.01 6.20895 2173.64 81.0551C2086.93 174.613 2205.38 328.837 2045.63 412.194C1885.87 495.552 1776.05 197.588 1568.67 241.155C1361.3 284.721 1440.72 514.919 1301.59 558.706C1162.45 602.492 1041.41 435.121 856.656 507.01C671.906 578.899 749.711 858.584 600.523 923.471C451.334 988.358 198.46 743.147 -22.3682 819.409" stroke="#5360FE" stroke-width="2"/>
        </svg>
        <img src="{{asset('images/Vectary.png')}}" alt="vectary" class="img-rounded img-vectary">
        <img src="{{asset('images/phone.png')}}" alt="phone" class="img-rounded img-phone">
        </div>
</div>
</body>
</html>