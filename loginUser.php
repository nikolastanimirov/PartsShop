<?php
session_start();
require 'pdo.php';
$dbController = new DBController();
$errors = array();
$pdo = $dbController->connectDB();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {array_push($errors, "Email is required");}
    if (empty($password)) {array_push($errors, "Password is required");}

    $user_check_query = "SELECT * FROM users WHERE email=? AND password=? LIMIT 1";
    $statemt = $pdo->prepare($user_check_query);
    $statemt->execute([$email, md5($password)]);

    $result = $statemt->fetchAll();
    $singleResult = $statemt->fetch();

    if (count($result) > 0) {
        if ($result[0]['admin'] == 1) {
            $_SESSION['admin'] = 1;
        } else {
            $_SESSION['admin'] = 0;
        }
        header('location: product-list.php');
    } else {
        $message = "Invalid Username or Password";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
