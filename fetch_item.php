<?php

include 'database_connection.php';

$query = "SELECT * FROM parts_test ORDER BY id DESC";

$statement = $connect->prepare($query);

if ($statement->execute()) {
    $result = $statement->fetchAll();
    $output = '';
    foreach ($result as $row) {
        $output .= '
        <div class="card" style="width: 20rem;">
            <div class="unique-item"style="width:300px;height:250px; align="center;" id="product_' . $row["id"] . '">
                <img src="data:image/jpeg;base64,' . base64_encode($row['product_img']) . 'alt="Img" style="width:250px; height:150px">
                <h2>' . $row["product_name"] . '</h2>
                <h3>' . $row["description"] . '</h3>
                <h4 class="text-danger">$ ' . $row["price"] . '</h4>
                <h4 class="text-info">
                    <div class="checkbox">
                        <label><input type="checkbox" class="select_product" data-product_id="' . $row["id"] . '" data-product_name="' . $row["product_name"] . '" data-product_price="' . $row["price"] . '" data-product_description="' . $row["description"] . '" value=""> Избери</label>
                    </div>

                </h4>

            </div>
        </div>
  ';
    }
    echo $output;
}
