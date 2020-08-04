<?php
session_start();
require 'pdo.php';
$dbController = new DBController();
$errors = array();
$pdo = $dbController->connectDB();

if ($_SESSION['admin'] == 0) {
    header('location: products.php');
}

if (isset($_POST['submit']) && !empty($_FILES["file"]["name"])) {

    $product_img = $_FILES['product_img']['name'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["product_img"]["name"]);

    if (empty($product_img)) {array_push($errors, "Product img is required");}
    if (empty($product_name)) {array_push($errors, "Product Name is required");}
    if (empty($price)) {array_push($errors, "Price is required");}
    if (empty($description)) {array_push($errors, "Description is required");}
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {
        if (count($errors) == 0) {
            // Convert to base64
            $image_base64 = base64_encode(file_get_contents($_FILES['product_img']['tmp_name']));
            $image = 'data:image/' . $imageFileType . ';base64,' . $image_base64;
            $query = "INSERT INTO parts_test (image, product_name, price, description)
            VALUES('" . $image . "',?,?,?)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$_FILES['product_img']['tmp_name'], $target_dir . $product_img, $product_name, $price, $description]);

            header('location: products.php');
        }
    }
}
