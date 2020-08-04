
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
  <?php session_start();?>
  <?php require 'header.php'?>
    <h1 class="catalog-title">Административен панел</h1>

    <?php
if ($_SESSION['admin'] == 1) {
    echo '<div class="container" id="admin-container">';
    echo '<div class="row">';
    echo '<div class="col-sm">
              <a href="addProducts.php">Добави </a>
          </div>';
    echo '<div class="col-sm">
              <a href="update.php">Промени </a>
          </div>';
    echo '<div class="col-sm">
              <a href="remove.php">Изтрий </a>
          </div>';
    echo '<div class="col-sm">
          <a href="Logout.php"><h3 style="text-decoration:underline">Изход</h3></a>

      </div>';
    echo '</div>';
    echo '</div>';
} else {
    echo '<nav class="navbar">';
    echo '<a class="navbar-brand" href="admin.php">Sign up </a>';
    echo '</nav';
}
?>
<input class="form-control mr-sm-2" type="text" id="searchValue-admin" onkeyup="myFunction()" placeholder="Търси по име" title="Търси по име">
<ul id="search-products-admin">
      <?php require 'productsController.php';?>
  </ul>
  <ul id="products-list-admin"></ul>
        <div class="tabs">
            <div class="first"><<</div>
            <div class="previous">Предишна</div>
            <div class="next">Следваща</div>
            <div class="last">>></div>
        </div>
</body>
</html>
<script src="scripts/admin.js"></script>