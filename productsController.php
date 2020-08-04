<?php
require 'pdo.php';
$dbController = new DBController();
$errors = array();
$pdo = $dbController->connectDB();

// $user_check_query = "SELECT * FROM test_parts UNION SELECT * FROM lada";
$test = "INSERT IGNORE INTO parts select * FROM parts_test";
$statemt1 = $pdo->prepare($test);
$statemt1->execute();
$test1 = "SELECT * FROM parts";
$statemt = $pdo->prepare($test1);
$statemt->execute();

$result = $statemt->fetchAll();

foreach ($result as $row) {
    echo '<li>';
    echo '<a href="login.php"><div class="card" style="width: 20rem;">';
    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['product_img']) . 'alt="Img" style="width:250px; height:150px"/>';
    echo '<h3 class="card-title">' . $row['product_name'] . '</h3>';
    echo '<p class="card-text">' . $row['description'] . '</p>';
    echo '<h5 class="card-text">' . $row['price'] . ' лв</h5>';
    echo '<a href="login.php" class="btn btn-success btn-lg">Към магазина</a>';
    echo '</div></a>';
    echo '</li>';

}
