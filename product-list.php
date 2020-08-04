<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/style.css" />
    <script src="scripts/product-list.js"></script>

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
  <?php require 'header.php'?>
  <div class="sticky-top">
   <div class="row" id="cart-navigation" >
         <div class="col col-4"><a href="Logout.php"><button type="button" class="btn btn-success">Изход</button></a></div>
         <div class="col col-2"></div>
         <div class="col"> <button type="button" name="add_to_cart" id="add_to_cart" class="btn btn-success">Добави в количка</button></div>
         <div class="col col-2"></div>
         <div class="cart-icon" align="left"><a href="checkout.php"><img src="images/cart.png"/></a></div>
    </div>
   </div>
  <div class="container">
  <div class="row" id="index-container-row">
        <div class="col-2">
          <?php require 'categories.php'?>
      </div>
      <div class="col-10" id="products">
        <input class="form-control mr-sm-2" type="text" id="searchValue-logged" onkeyup="myFunction()" placeholder="Търси по име" title="Търси по име">
        <div class="panel-body" id="display_item"></div>
        <!-- <ul id="products-list-logged"></ul>
        <div class="tabs">
            <div class="first"><<</div>
            <div class="previous">Предишна</div>
            <div class="next">Следваща</div>
            <div class="last">>></div>
        </div> -->
      </div>

  </div>
  <?php require 'footer.php'?>

 </body>
 <script>
$(document).ready(function(){
        var scroll_pos = 0;
        $(document).scroll(function() {
            scroll_pos = $(this).scrollTop();
            if(scroll_pos > 300) {
                $(".sticky-top").css('background-color', 'white');
            } else {
                $(".sticky-top").css('background-color', '#f8f8f85e');
            }
        });
    });
 </script>
</html>

<script src="scripts/cart.js"></script>


