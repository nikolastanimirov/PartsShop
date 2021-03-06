<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta charset="UTF-8">
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
    <title>Document</title>
</head>
<body>

<form method="post" action="removeProduct.php">
  	  <h1>Remove from catalog</h1>
      <hr size="2px" width="100%" />
      <div class="form-group">
        <label for="exampleInputEmail1">Product Name</label>
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
        <label for="exampleInputPassword1">Price</label>
        <input
          type="text"
          class="form-control"
          id="exampleInputPassword1"
          name="price"
          placeholder="$$"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input
          type="text"
          class="form-control"
          id="exampleInputPassword1"
          name="description"
          placeholder="Description ..."
        />
      </div>
      <div class="input-group">
  	  <button type="submit" class="btn btn-success" name="submit">Remove</button>
  	</div>

</body>
</html>
