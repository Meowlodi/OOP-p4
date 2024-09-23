<?php

$books= [
    "book1" => ["name" => "Twisted Love", "author" => "Ana Huang", "pages" => 352],
    "book2" => ["name" => "Twisted Games", "author" =>"Ana Huang", "pages" => 448],
    "book3" => ["name" => "Twisted Hate", "author" =>"Ana Huang", "pages" => 520],
    "book4" => ["name" => "Twisted Lies", "author" =>"Ana Huang", "pages" => 560],
];
echo  $books ["book2"]["name"]. " is geschreven door: " . $books ["book2"]["author"];

$books ["book1"] ["pages"] = 350;

echo "<pre>";
print_r($books);
echo "</pre>";
$books ["book5"]= ["name" => "De Ontdekking van de Hemel", "author" => "Harry Mulisch", "pages" => 900];

echo "<pre>";
print_r($books);

echo "</pre>";
?>