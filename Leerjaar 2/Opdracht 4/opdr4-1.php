<?php

$products= [
    ["Watermeloen ", 3.99, 9,],
    ["Banaan ", 0.99, 22],
    ["Appel ", 1.50, 13],
    ["Mineola ", 1.50, 29]

];

$products [3][2]= 120;
echo  "De ".$products[1][0]. "kost ", $products[1][1];
$products [] = ["Tablet", 299.99, 50];

echo "<pre>";
print_r($products);
echo "</pre>";

?>