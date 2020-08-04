<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="css/style.css"/>

    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Авточасти</title>
  </head>
  <body>
    <?php require 'header.php';?>
    <div class="container">
      <div class="row" id="index-container-row">
        <div class="col-2">
          <?php require 'categories.php'?>
      </div>
      <div class="col-10" id="products">
        <input class="form-control mr-sm-2" type="text" id="searchValue" onkeyup="myFunction()" placeholder="Търси по име" title="Търси по име">
        <ul id="search-products">
          <?php require 'productsController.php';?>


        </ul>
        <ul id="products-list"></ul>
        <div class="tabs">
            <div class="first"><<</div>
            <div class="previous">Предишна</div>
            <div class="next">Следваща</div>
            <div class="last">>></div>
        </div>
      </div>
    </div>

    <?php require 'footer.php';?>

    <script src="scripts/main.js"></script>
    <script src="scripts/pagination.min.js"></script>
  </body>
</html>
