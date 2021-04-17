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
     font-family:Arial, Helvetica, sans-serif;
  }
  .navlink:hover {
      color: blue;
      font-weight: bold;
  }
   #btn-form1{
       position: relative;
       left: 20rem;   
   }
   #lang{
       position: relative;
       left: 255%;
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
       background-color: #5360FE;
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
      </ul>
      <a href="{{route('contact')}}" class="btn btn-primary" id="btn-form1">Оставить заявку</a>
      <div class="nav-item dropdown">
  <a class="btn btn-success dropdown-toggle" id="lang" type="button" data-toggle="dropdown">Choose lang
  </a>
  <style>
      .dropdown-menu{
       margin-left: 320px;   
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
     <svg class="svg1" height="220" width="100">
        <ellipse cx="-10" cy="150" rx="50" ry="40" style="fill:#5360FE;"/>
      </svg>
    <h4 class="display-3 heading1">Продвигаем и издаём <br> игры и приложения</h4>
    <p class="des1">Тщательно анализируем результаты, грамотно поддерживаем <br>в развитии и монетизизации вашего продукта</p>
    <button class="btn btn-cost" id="btn_cost">Узнать стоимость</a></button>
<style>
  .btn-cost:hover {
      background-color: green;
      box-shadow: 5px 10px #f1f1f1;
      color: #fff;
  }
  #modal4 form{
    position: relative;
    left: 25%;
    top: 70px;
    width: 600px;
    height: 450px;
    border-radius: 30px;
    background-color: #5360FE;
}
#modal4 .close{
    position: relative;
    left: 20%;
    top: -60px;
    color: red;
    border: none;
    font-size: 50px;
    font-weight: bold;
    cursor: pointer;
}
#modal4 input {
    position: relative;
    left: 10%;
}
#modal4 input[type=text]{
    width: 37%;
    height: 50px;
    border-radius: 50px;
}
#modal4 #name{
    position: relative;
    top: 100px;
}
#modal4 #number {
    position: relative;
    top: 27px;
    margin-left: 40%;
}
#modal4 input[type=email]{
    position: relative;
    top: 30px;
    width: 77%;
    height: 50px;
    border-radius: 50px;
}
#modal4 input[type=file]{
    position: relative;
    width: 77%;
    top: 30px;
    height: 50px;
    border-radius: 50px;
}
#modal4 h1{
    position: absolute;
    left: 19%;
    top: 20px;
    color: #fff;
}
#modal4 #submit {
    position: absolute;
    left: 27%;
    top: 350px; 
    width: 40%;

}
#modal4 {
    width: 100%;
    height: 100%;
    border-color: rgb(0, 0, 0, 0.9);
}
.modal {
    width: 100%;
    height: 100%;
    background-color: rgb(0, 0, 0, 0.9);
}
</style>
<script>
      $("#btn_cost").click(function() {
       $("#modal4").show(1000);
     });
     $(document).ready(function(){
      $('#header1').fadeIn(2000);
    });
</script>
<div class="modal" id="modal4" style="display: none;">
                <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                  <h1>Узнать стоимость</h1>
                  @csrf
         @if ($message = Session::get('msg'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
            @endif  
                  <span class="close" onclick="document.getElementById('modal4').style.display='none'">&times;</span>
                  <input class="form-control" type="text" id="name" name="name" placeholder="Имя"><br>
                  <input class="form-control" type="text" id="number" name="phone" id="number" placeholder="Телефон"><br>
                  <input class="form-control" type="email" id="email" name="email" placeholder="E-mail"><br>
                  <input type="file" name="file" id="file" class="form-control">
                  <input class="form-control btn btn-success" id="submit" type="submit" id="submit" value="Отправить">
                </form>
</div>
        <div class="img">
        <img src="{{asset('images/Vectary.png')}}" alt="vectary" class="img-rounded img-vectary">
        <img src="{{asset('images/phone.png')}}" alt="phone" class="img-rounded img-phone">
        </div>
</div>

</body>
</html>