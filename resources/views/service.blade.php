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
      color: #fff;
      font-weight: bold;
      font-size: 30px;
  }
  .navbar-brand:hover {
      color: #fff;
  }
  .navlink {
      position: relative;
    left: 5rem;
    margin-right: 15px;
     color: #fff;
     font-size: 20px;
     font-family:Arial, Helvetica, sans-serif;  }
  .navlink:hover {
      color: blue;
      font-weight: bold;
  }
   #btn-form1{
       position: relative;
       left:20rem;   
   }
   #lang {
       position: relative;
       left: 21rem;
   }
   .heading1{
       margin-top: 120px;
   }
   .column {
       left: 70px;
    margin-left: 50px;
    float: left;
    width: 420px;
    height: 250px;
    margin-top: 50px;
    position: relative;
    border: 1px solid #4456;
    border-radius: 16px;
    background-color: #fff;
   }
   .column:hover{
    box-shadow: 3px 3px 50px rgba(0, 0, 0, 0.9);
    border-radius: 16px;
   }
   .display-4 {
       margin-top: 100px;
       color: #000;
   }
   .box3-3{
    position: relative;
    left: 40px;
    top: 20px;
    width:55px; 
    height:45px; 
    border-radius:5px; 
    background-color:#e0f1ff;
}
#circle14{
    position: relative;
    left: 27px;
    top: 10px;
    width: 15px;
    height: 15px;
    border-radius: 40px;
    background-color: rgb(30, 75, 172);
} 
#circle15{
    position: relative;
    left: 10px;
    top: 10px;
    width: 15px;
    height: 15px;
    border-radius: 40px;
    background-color: #04D7CD;
}
.box4-4{
    position: relative;
    left: 40px;
    top: 20px;
    width:55px; 
    height:45px; 
    border-radius:5px; 
    background-color:#d8d8d8;
}
.row h3{
    position: relative;
    left: 40px;
    top: 30px;
    color: #000;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: 500;
}
.row p{
    position: relative;
    left: 40px;
    top: 30px;
}
#circle16 {
    position: relative;
    left: 12px;
    top: 8px;
    width: 30px;
    height: 30px;
    border-radius: 50px;
    background-color: #f1f1f1;
}
.box5-5{
    position: relative;
    left: 40px;
    top: 20px;
    width:55px; 
    height:45px; 
    border-radius:5px; 
    background-color:#d8d8d8;
}
#circle17 {
    position: relative;
    left: 10px;
    top: 6px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: #f1f1f1;
}
#circle18 {
    position: absolute;
    left: 30px;
    top: 6px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: #fff;
}
#circle19 {
    position: relative;
    left: 10px;
    top: 10px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: #fff;
}
#circle20 {
    position: absolute;
    left: 30px;
    top: 25px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: #f1f1f1;
}
.box6-6{
    position: relative;
    left: 40px;
    top: 20px;
    width:55px; 
    height:45px; 
    border-radius:5px; 
    background-color:#a3dfdc;
}
#circle21 {
    position: relative;
    left: 10px;
    top: 6px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: #f1f1f1;
}
#circle22 {
    position: absolute;
    left: 30px;
    top: 6px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: #fff;
}
#circle23 {
    position: relative;
    left: 10px;
    top: 10px;
    width: 15px;
    height: 15px;
    border-radius: 10px;
    background-color: #fff;
}
.footer {
       position: relative;
       top: 100px;
       height: 220px;
       color: #fff;
   }
   .footer h1{
       position: relative;
       left: 3rem;
       width: 300px;
       color: #fff;
   }
   .footer h5{
       width: 300px;
   }
   .footer p{
       position: relative;
       width: 160px;
   }
   .row3 {
       margin-left: 15px;
   }
   .contacts {
       width: 100%;
   }
   .column1 {
     position: absolute;
     left: 30%;
     margin-top: 55px;
   }
   .social {
       position: absolute;
       left: 60%;
       top: 50px;
   }
   .social a{
       margin-right: 30px;
       text-decoration: none;
   }
   .fa-instagram {
    padding: 12px;
	color: #456;
	background-color: #f1f1f1;
    border-radius: 10px;
	cursor: pointer;
}
.fa-facebook {
    padding: 12px;
	color: #456;
	background-color: #f1f1f1;
    border-radius: 10px;
	cursor: pointer;
}
.fa-whatsapp {
    padding: 12px;
	color: #456;
	background-color: #f1f1f1;
    border-radius: 10px;
	cursor: pointer;
}
.fa-twitter {
    padding: 12px;
	color: #456;
	background-color: #f1f1f1;
    border-radius: 10px;
	cursor: pointer;
}
.fa-instagram:hover{
    background-color: rgb(143, 19, 19);
    color: #fff;
}
.fa-facebook:hover{
    background-color: rgb(19, 62, 143);
    color: #fff;
}
.fa-whatsapp:hover{
    background-color: rgb(90, 180, 38);
    color: #fff;
}
.fa-twitter:hover{
    background-color: rgb(133, 162, 255);
    color: #fff;
}
.row4 {
    position:absolute;
    left: 57%;
    top: 150px;
}
</style>
    <nav class="navbar navbar-expand bg-dark fixed-top">
      <a href="{{route('project')}}" class="navbar-brand">App-<span style="color: blue;">publisher</span></a>
      <ul class="navbar-nav">
       <li class="nav-item"><a href="{{route('service')}}" class="nav-link navlink">Услуги</a></li>
       <li class="nav-item"><a href="{{route('projects_company')}}" class="nav-link navlink">Проекты</a></li>
       <li class="nav-item"><a href="{{route('company')}}" class="nav-link navlink">Компания</a></li>
      </ul>
      <a href="" class="btn btn-primary" id="btn-form1">Оставить заявку</a>
      <div class="nav-item dropdown">
  <a class="btn btn-success dropdown-toggle" id="lang" type="button" data-toggle="dropdown">Choose lang
  </a>
  <style>
      .dropdown-menu{
       margin-left: 100px;   
      }
  </style>
  <ul class="dropdown-menu" id="list">
    <li><a class="dropdown-item" href="lang/en">EN</a></li>
    <li><a class="dropdown-item" href="lang/ru">RU</a></li>
    <li><a class="dropdown-item" href="lang/kz">KZ</a></li>
  </ul>
</div>
</nav>
  <div class="container">
  <h4 class="display-4">Как мы работаем?</h4>
       <div class="row">
         <div class="column">
         <div class="box3-3">
          <div id="circle14"></div>
          <div id="circle15"></div> 
        </div>
         <h3>Аудит</h3>
         <p>Анализируем вашу игру или приложение:<br>  тематику, конкурентов,  UI/UX дизайн,<br> показатели  CPI, Retention и принимаем<br> решение о продвижении</p>
       </div>
         <div class="column">
        <div class="box4-4">
          <div id="circle16"></div>
        </div>
         <h3>Трафик и установки</h3>
         <p>Делаем предложение в формате<br> взаимовыгодного сотрудничества - вы<br> получаете установки и пользователей своей<br> игры или приложения.</p>
       </div>
        <div class="column">
        <div class="box5-5">
          <div id="circle17"></div>
          <div id="circle18"></div>
          <div id="circle19"></div>
          <div id="circle20"></div>
        </div>
         <h3>Поддержка</h3>
         <p>Индивидуальная работа с каждой командой<br> или разработчиком, которые получают<br> маркетинговую поддержку (в том числе — и<br> экспертную), доступ к аналитике и сервисам.</p>
       </div>
        <div class="column">
        <div class="box6-6">
          <div id="circle21"></div>
          <div id="circle22"></div>
          <div id="circle23"></div>
        </div>
         <h3>Экспертиза</h3>
         <p>Услуги по ASO оптимизации любых <br>приложений, аудиты текущего состояния<br> продукта, маркетинговые тесты и обеспечиваем<br> трафик игры или приложения.</p>
       </div>
      </div>
  </div>
  <div class="footer bg-dark">
       <div class="row contacts">
           <h1>Контакты</h1>
           <div class="container telephone">
           <h5>Телефон</h5>
           +7 495 100 83 02
           </div>
           <div class=" container addres">
            <h5>Адрес</h5>
           г. Москва,<br>  ул. Новый Арбат, 27а 
           </div>
        <div class="column1">
           <div class="container addres">
            <h5>E-mail</h5>
            go@app-publisher.ru
           </div>
           <div class="container addres">
            <h5>Режим работы</h5>
            Пн - Пт 10:00-18:00<br>Сб - Вс выходной
        </div>
       </div>
       </div>
       <div class="social">
       <a href="https://instagram.com" id="icon" class="fa fa-instagram" style="font-size: 30px;"></a>
        <a href="https://facebook.com" id="icon" class="fa fa-facebook" style="font-size: 30px;"></a>
        <a href="https://whatsapp.com" id="icon" class="fa fa-whatsapp" style="font-size: 30px;"></a>
        <a href="https://twitter.com" id="icon" class="fa fa-twitter" style="font-size: 30px;"></a>
       </div>
       <div class="row row4">APP-publisher, © 2021
       Политика конфиденциальности</div>
   </div>
</body>
</html>    