<?php

function calSales ($products, $price, $qty){
    $products =  $price * $qty;
    $totalSales = $products;
    echo $totalSales;
}
// function calSales ($products, $price, $qty){
//     $products =  $price * $qty;
//     $totalSales = $products;
//     echo $totalSales;
// }

// $bread = calSales("bread", 400, 2);
// $tea = calSales("Tea", 200, 2);
// echo "Bread: $bread";
// echo "tea: $tea";


// function Sales($bread, $tea){
//   $total = $bread + $tea;
//  echo $total;
// }

// Sales($bread, $tea);

$bread = calSales("bread", 400, 2);
$tea = calSales("Tea", 200, 2);
echo "Bread: $bread";
echo "tea: $tea";
$products = [
  ["bread", 400, 1],
  ["tea", 200, 2],
  ["milk", 200, 2],
];


function Sales($bread, $tea){
  $total = $bread + $tea;
 echo $total;
function calculateTotalSales($products)
{
    $totalSales = 0;
    foreach ($products as $product) {
        $price = $product[1];
        $quantity = $product[2];
        $totalSales += $price * $quantity;
    }
    return $totalSales;
}
}

Sales($bread, $tea);
$totalSales = calculateTotalSales($products);
echo $totalSales;
?>