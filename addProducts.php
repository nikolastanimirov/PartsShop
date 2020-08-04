<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
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
</head>
<body>
  <?php
require 'addProductsController.php';
require 'errors.php';
?>
  <form method="post" action="addProducts.php" enctype="multipart/form-data">
  	  <h1>Добави нов продукт</h1>
      <hr size="2px" width="100%" />
      <div class="form-group">
        <label for="exampleInputEmail1">Снимка</label>
        <input
          type="file"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          name="product_img"
          placeholder="Enter product"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Име на продуктът</label>
        <input
          type="text"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          name="product_name"
          placeholder="Enter product"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Цена</label>
        <input
          type="text"
          class="form-control"
          id="exampleInputPassword1"
          name="price"
          placeholder="$$"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Описание</label>
        <input
          type="text"
          class="form-control"
          id="exampleInputPassword1"
          name="description"
          placeholder="Description ..."
        />
      </div>
      <div class="input-group">
  	  <button type="submit" class="btn btn-success" name="submit">Add</button>
  	</div>
</body>
</html>