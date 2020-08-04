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
require 'registrationController.php';
require 'errors.php';
?>
  <form method="post" action="registration.php">
  	  <h1>Create an account</h1>
      <hr size="2px" width="100%" />
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input
          type="email"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          name="email"
          placeholder="Enter email"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input
          type="password"
          class="form-control"
          id="exampleInputPassword1"
          name="password_1"
          placeholder="Password"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Re-Enter Password</label>
        <input
          type="password"
          class="form-control"
          id="exampleInputPassword1"
          name="password_2"
          placeholder="Re-Enter Password"
        />
      </div>
	  <div class="form-group">
        <label for="exampleInputPassword1">City</label>
        <input
          type="text"
          class="form-control"
          id="city"
          name="city"
          placeholder="City"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Street</label>
        <input
          type="text"
          class="form-control"
          id="street"
          name="street"
          placeholder="Street"
        />
      </div>
      <div class="form-group">
        <label for="exampleInputPostCode">Post Code</label>
        <input
          type="text"
          class="form-control"
          id="post-code"
          name="post_code"
          placeholder="Post Code"
        />
      </div>
      <button type="submit" class="btn btn-success" name="submit">Create</button>
    </form>
</body>
</html>