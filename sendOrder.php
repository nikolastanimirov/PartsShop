<?php
session_start();

$total_price = 0;
$total_item = 0;

$output = '

<div class="table-responsive" id="order_table">
 <table class="table">
';

if (!empty($_SESSION["shopping_cart"])) {
    foreach ($_SESSION["shopping_cart"] as $keys => $values) {
        $output .= '
  <tr>
   <td>' . $values["product_name"] . '</td>
   <td>' . $values["product_quantity"] . '</td>
   <td align="right">' . $values["product_price"] . 'лв</td>
   <td align="right">' . number_format($values["product_quantity"] * $values["product_price"], 2) . 'лв</td>
   <td><button name="delete" class="btn btn-danger delete" id="' . $values["product_id"] . '">Премахни</button></td>
  </tr>
  ';
        $total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
    }
    $output .= '
 <tr>
        <td colspan="3" align="right">Общо</td>
        <td align="right">' . number_format($total_price, 2) . 'лв</td>
        <td></td>
    </tr>
 ';
} else {
    $output .= '
    <tr>
     <td colspan="5" align="center">
      Количката ви е празна!
     </td>
    </tr>
    ';
}
$output .= '</table>

';

echo $output;
