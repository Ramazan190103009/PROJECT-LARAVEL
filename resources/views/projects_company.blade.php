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
   .display-4{
       margin-top: 90px;
   }
   .column:hover{
    box-shadow: 3px 3px 50px rgba(0, 0, 0, 0.9);
    border-radius: 16px;
}
.column { 
    margin-left: 50px;
    float: left;
    width: 300px;
    position: relative;
    left:170px;
    margin-right: 10px;
    margin-top: 0px;
    border: 1px solid #4456;
    border-radius: 16px;
    background-color: #fff;
    height: 440px; 
}
#col3{
    position: relative;
    left: 32px;
    top:50px;
    width: 300px;
}
#col4{
    position: relative;
    left: 32px;
    top:50px;
}
.vl {
    position: relative;
    left: 140px;
    margin-top: 0px;
    width: 100px;
    height: 100px;
    border-right: 1px solid black;
}
#col5{
    position: absolute;
    left: 170px;
    top:390px;
}
#first-proj{
    position: relative;
    left: 35px;
    top: 40px;
    width: 230px;
    cursor: pointer;
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
    left: 60%;
    top: 150px;
}
</style>
<nav class="navbar navbar-expand bg-dark fixed-top">
      <a href="{{route('project')}}" class="navbar-brand">App-<span style="color: blue;">publisher</span></a>
      <ul class="navbar-nav">
       <li class="nav-item"><a href="{{route('service')}}" class="nav-link navlink">{{__('text.service')}}</a></li>
       <li class="nav-item"><a href="{{route('projects_company')}}" class="nav-link navlink">{{__('text.projects')}}</a></li>
       <li class="nav-item"><a href="{{route('company')}}" class="nav-link navlink">{{__('text.company')}}</a></li>
      </ul>
      <a href="{{route('contact')}}" class="btn btn-primary" id="btn-form1">{{__('text.application')}}</a>
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
       <h1 class="display-4">{{__('text.des3')}}</h1>
       <p>{{__('text.des4')}}</p>

<div id="demo" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
  <div class="row">
    <div class="carousel-item active">
      <div class="column"> 
         <img src="{{asset('images/Rectangle 1.png')}}" id="first-proj" width="300" height="300">
         <p id="col3">Religion Inc.</p>
          <p id="col4">1 000 000+ <br>скачиваний</p> 
          <span class="vl"></span> 
          <p id="col5">23 000+<br>отзывов</p>
      </div>
      <div class="column"> 
         <img src="{{asset('images/Rectangle 2.png')}}" id="first-proj" width="300" height="300">
         <p id="col3">Religion Inc.</p>
          <p id="col4">1 000 000+ <br>скачиваний</p> 
          <span class="vl"></span> 
          <p id="col5">23 000+<br>отзывов</p>
      </div>
</div>
   <div class="carousel-item">
      <div class="column"> 
         <img src="{{asset('images/Rectangle 3.png')}}" id="first-proj" width="300" height="300">
         <p id="col3">Religion Inc.</p>
          <p id="col4">1 000 000+ <br>скачиваний</p> 
          <span class="vl"></span> 
          <p id="col5">23 000+<br>отзывов</p>
      </div>
      <div class="column"> 
         <img src="{{asset('images/Rectangle 2.png')}}" id="first-proj" width="300" height="300">
         <p id="col3">Religion Inc.</p>
          <p id="col4">1 000 000+ <br>скачиваний</p> 
          <span class="vl"></span> 
          <p id="col5">23 000+<br>отзывов</p>
      </div>
    </div>
  </div>
</div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
  </div>
</div>
<div class="footer bg-dark">
       <div class="row contacts">
           <h1>{{__('text.contacts')}}</h1>
           <div class="container telephone">
           <h5>{{__('text.phone')}}</h5>
           +7 495 100 83 02
           </div>
           <div class=" container addres">
            <h5>{{__('text.address')}}</h5>
           {{__('text.address-des1')}}<br>{{__('text.address-des2')}} 
           </div>
        <div class="column1">
           <div class="container address">
            <h5>{{__('text.email')}}</h5>
            go@app-publisher.ru
           </div>
           <div class="container addres">
            <h5>{{__('text.schedule')}}</h5>
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
       {{__('text.privacy')}}</div>
   </div>
</body>
</html>