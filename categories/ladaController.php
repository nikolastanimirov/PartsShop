<?php
require '../pdo.php';
$dbController = new DBController();
$errors = array();
$pdo = $dbController->connectDB();

$user_check_query = "SELECT * FROM lada";
$statemt = $pdo->prepare($user_check_query);
$statemt->execute();

$result = $statemt->fetchAll();

foreach ($result as $row) {
    echo '<li>';
    echo '<a href="../login.php"><div class="card" style="width: 20rem;">';
    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['product_img']) . 'alt="Img" style="width:250px; height:150px"/>';
    echo '<h3 class="card-title">' . $row['product_name'] . '</h3>';
    echo '<p class="card-text">' . $row['description'] . '</p>';
    echo '<h5 class="card-text">' . $row['price'] . ' лв</h5>';
    echo '<a href="../login.php" class="btn btn-success btn-lg">Към магазина</a>';
    echo '</div></a>';
    echo '</li>';

}
