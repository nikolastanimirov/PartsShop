
<html>

<head>
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
<title>
Авточасти Росен Петров
</title>
</head>
<body>
  <?php require 'loginUser.php';require 'errors.php';require 'header.php';?>
  <form method="post" action="login.php">
	  <div class="form-group">
            <hr size="2px" width="75%">
           <label for="exampleInputEmail1">Имейл</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="email">
          </div>
          <div class="form-group">
           <label for="exampleInputPassword1">Парола</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" name="password">
          </div>
          <button type="submit" class="btn btn-success" name="submit">Влез</button>

  </form>
</body>
</html>