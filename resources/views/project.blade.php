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
       <li class="nav-item"><a href="{{route('projects_company')}}" target="_blank" class="nav-link navlink">Проекты</a></li>
       <li class="nav-item"><a href="{{route('company')}}" target="_blank" class="nav-link navlink">Компания</a></li>
       <li class="nav-item"><a href="{{route('contact')}}" target="_blank" class="nav-link navlink">Контакты</a></li>
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
        <img src="{{asset('images/Vectary.png')}}" alt="vectary" class="img-rounded img-vectary">
        <img src="{{asset('images/phone.png')}}" alt="phone" class="img-rounded img-phone">
        </div>
</div>

</body>
</html>