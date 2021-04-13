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
        background-color: #f1f2f3;
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
       left: 19rem;  
   }
   #lang {
       position: relative;
       left: 20rem;
   }
   #list {
       left: 5rem;
   }
   .img-phone{
       position: absolute;
       width: 45%;
       margin-left: 100px;
       margin-top: 50px;
   }
   .img-jostik{
       left: 0rem;
       margin-top: 150px;
       width: 45%;
   }
   .des1 {
        position: absolute;
        left: 55%;
        top: 120px;
        color: #000;
   }
   .des1 h1 {
       font-size: 60px;
   }
   .des1 p{
       font-size: 18px;
   }
   .p1{
       font-size: 18px;
       font-weight: bold;
       color: #04035F;
   } 
   #img-group{
      width: 50px;
      height: 50px;
      margin-right: 30px;
   }
   .row1{
       position: absolute;
       left: 57.5%;
       top: 460px;
   } 
   .row2{
       position: absolute;
       left: 57.5%;
       top: 550px;
   } 
   .circle {
       width: 50px;
       height: 50px;
       border-radius: 50px;
       background-color: #04D7CD;
       margin-right: 30px;
   }
   .p2{
       font-size: 18px;
       font-weight: bold;
       color: #04035F;
   } 
   .footer {
       width: 100%;
       height: 220px;
       color: #fff;
   }
   .footer h1{
       position: relative;
       left: 3rem;
       width: 300px;
   }
   .footer h5{
       width: 300px;
   }
   .footer p{
       width: 160px;
   }
   .contacts {
       width: 100%;
   }
   .row3 {
       margin-left: 15px;
       
   }
   .column1 {
     position: absolute;
     left: 30%;
     margin-top: 55px;
   }
   .social {
       position: absolute;
       left: 60%;
       top: 700px;
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
    left: 60%;
    top: 800px;
}
</style>
    <nav class="navbar navbar-expand bg-dark fixed-top">
      <a href="{{route('project')}}" class="navbar-brand">App-<span style="color: blue;">publisher</span></a>
      <ul class="navbar-nav">
       <li class="nav-item"><a href="{{route('service')}}" target="_blank" class="nav-link navlink">Услуги</a></li>
       <li class="nav-item"><a href="{{route('projects_company')}}" target="_blank" class="nav-link navlink">Проекты</a></li>
       <li class="nav-item"><a href="{{route('company')}}" target="_blank" class="nav-link navlink">Компания</a></li>
      </ul>
      <a href="" class="btn btn-primary" id="btn-form1">Оставить заявку</a>
      <div class="dropdown">
  <a class="btn btn-success dropdown-toggle" id="lang" type="button" data-toggle="dropdown">Choose lang
  </a>
  <style>
      .dropdown-menu{
       margin-left: 230px;   
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
      <img src="{{asset('images/phone 2.png')}}" class="img-rounded img-phone" alt="phone">
      <img src="{{asset('images/jostik.png')}}" class="img-rouded img-jostik" alt="jostik">
     <div class="container col-md-5 des1">
       <h1 class="">Чем мы занимаемся?</h1>
       <p>Apppublisher - это Digital-агентство и GameDev студия с<br>
          уникальными разработками, основанная в 2010 году.<br></p>
          <p>Наша команда ищет перспективные проекты по России,<br>
          СНГ и всему миру, и оказывает помощь в их продвижении
          <br>и локализации для иностранных рынков.    </p>
     </div>
     <div class="row row1">
       <img src="{{asset('images/Group.png')}}" id="img-group" alt="circles">
       <p class="p1">40 000 000+ установок наших игр<br>и приложений по всему миру</p>
     </div>
     <div class="row row2">
       <div class="circle"></div>
       <p class="p2">10 лет успешного опыта<br>продвижения проектов</p>
     </div>
   </div>
   <div class="footer bg-dark">
       <div class="row contacts">
           <h1>Контакты</h1>
           <div class=" container telephone">
           <h5>Телефон</h5>
           <p>+7 495 100 83 02</p>
           </div>
           <div class=" container addres">
            <h5>Адрес</h5>
            <p>г. Москва,<br>  ул. Новый Арбат, 27а</p> 
           </div>
        <div class="column1">
           <div class="container addres">
            <h5>E-mail</h5>
            <p>go@app-publisher.ru</p> 
           </div>
           <div class="container addres">
            <h5>Режим работы</h5>
            <div class="row">
            <p class="row3">Пн - Пт<br>Сб - Вс</p> 
            <p>10:00 - 18:00<br>выходной</p></div>
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