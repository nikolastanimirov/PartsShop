<?php
session_start();


$username = "";
$email    = "";
$errors = array(); 


$host = "localhost";
$user = "NRS160";
$password = "kL2C67";
$database = "carsalesmanagement";
$pdo = new PDO("mysql:host=$host;dbname=$database",$user, $password);





// REGISTER USER
if (isset($_POST['users'])) {

  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];
  $firstname = $_POST['firstname'];
  $city = $_POST['city'];
  $street = $_POST['street'];
  $post_code = $_POST['post_code'];

  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
 if (empty($firstname)) { array_push($errors, "Firstname is required"); }
 if (empty($city)) { array_push($errors, "City is required"); }
if (empty($post_code)) { array_push($errors, "Post code is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM users WHERE email=? LIMIT 1";
  $statemt=$pdo->prepare($user_check_query);
  $statemt->execute([$email]);

  $result = $statemt->fetchAll();
  $email = $statemt->fetch();
  
  if ($email) {
    if ($email['email'] === $email) {
      array_push($errors, "Email already exists");
    
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);
  	$query = "INSERT INTO users (email, password, firstname, city, street, post_code) 
  			  VALUES(?, ?, ?, ?, ?, ?)";
  	$stmt=$pdo->prepare($query);
    $stmt->execute([$email,$password,$firstname,$city,$street,$post_code]);

  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	 
    header('location: index.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE email=? AND password=?";
    $stmt= $pdo->prepare($query);
    $stmt->execute([$email,$password]);
    $results=$stmt->fetchAll();

  	if (count($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong email/password combination");
  	}
  }
}

?>