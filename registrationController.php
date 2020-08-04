<?php
session_start();
require 'pdo.php';
$dbController = new DBController();
$errors = array();
$pdo = $dbController->connectDB();

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    $firstname = $_POST['email'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $post_code = $_POST['post_code'];

    if (empty($email)) {array_push($errors, "Email is required");}
    if (empty($password_1)) {array_push($errors, "Password is required");}
    if (empty($firstname)) {array_push($errors, "Firstname is required");}
    if (empty($city)) {array_push($errors, "City is required");}
    if (empty($post_code)) {array_push($errors, "Post code is required");}
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    $user_check_query = "SELECT * FROM users WHERE email=? LIMIT 1";
    $statemt = $pdo->prepare($user_check_query);
    $statemt->execute([$email]);

    $result = $statemt->fetchAll();
    $emailResult = $statemt->fetch();

    if (count($result) > 0) {
        array_push($errors, "Email already exists");
    }

    if (count($errors) == 0) {
        $password = md5($password_1);

        $query = "INSERT INTO users (email, password, firstname, city, street, post_code)
            VALUES(?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$email, $password, $firstname, $city, $street, $post_code]);

        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";

        header('location: login.php');
    }
}
