<?php

session_start();
?>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet"href="css/style.css"/>

    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <title>Авточасти Росен Петров</title>
 </head>
<body>
<?php require "header.php"?>
 <form action="mail.php" method="post">
 <div class="form-group">
            <h2>Поръчка</h2>
            <hr size="2px" width="75%">
            <label for="exampleInputEmail1">Име</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Собствено" name="first_name"/>
          </div>
          <div class="form-group">
            <label for="exampleInputText">Фамилия</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Фамилия" name="last_name".>
          </div>
          <div class="form-group">
            <label for="exampleInputText">Имейл</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Имейл" name="email"/>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Адрес</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
          </div>
          <input type="submit" id="pay_bill" value="изпрти" name="submit"></input></br>
          </div>
          </form>
</br>
         <a href="Logout.php"><h4>Logout</h4></a>

  <div class="panel-body" id="order_cart"></div>



  </body>
  <script src="scripts/cart.js"></script>
</html>

