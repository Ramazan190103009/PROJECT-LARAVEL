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
        height: 1000px;
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
       <h1 class="display-4">Игры и приложения</h1>
       <p>которые мы продвигали, издавали или разработали</p>

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
</body>
</html>