

    <?php
session_start();
require 'pdo.php';
$dbController = new DBController();
$errors = array();
$pdo = $dbController->connectDB();

if ($_SESSION['admin'] == 0) {
    header('location: products.php');
}

$product_name = $_POST['product_name'];
$price = $_POST['price'];
$description = $_POST['description'];

if (count($errors) == 0) {
    $query = "UPDATE products SET price='$price' WHERE product_name='$product_name'";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $message = "The car information was updated!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('location: products.php');
}
?>